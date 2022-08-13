<?php

$basename = $wa_page_infos['name_infos']['basename'];
$filename_html = $wa_page_current_absolute_path.$basename.".html";
//nettoyage auto d'un eventuel fichier html
if (file_exists ($filename_html))
{
	unlink($filename_html);
}

function var_dump_ret($mixed = null) {
  ob_start();
  var_dump($mixed);
  $content = ob_get_contents();
  ob_end_clean();
  return $content;
}

function waSessionAuthKey(&$global_webacappella_auth_chain)
{
	return 'wafx_authenticated_uuids_'.$global_webacappella_auth_chain['unid'];
}

function waSessionIsAuthenticated(&$page_auth_chain,&$global_webacappella_auth_chain)
{
	$key_session = waSessionAuthKey($global_webacappella_auth_chain);
	if (array_key_exists($key_session, $_SESSION)==false)
	{
		$_SESSION[$key_session] = [];
	}
	//
	//error_log("waSessionIsAuthenticated ".var_dump_ret($_SESSION[waSessionAuthKey()]));
	//error_log("page_auth_chain ".var_dump_ret($page_auth_chain));
	foreach ($_SESSION[$key_session] as $user_uuid)
    {
    	if (array_key_exists($user_uuid, $global_webacappella_auth_chain['auth_chain'])==true)
		{
			$user_inf = &$global_webacappella_auth_chain['auth_chain'][$user_uuid];
			if (count(array_intersect($page_auth_chain, $user_inf['auth']))>0)
			{
				return true;
			}
		}
    }
	return false;
}

function waAuthCheck($login,$pwd,&$page_auth_chain,&$global_webacappella_auth_chain)
{
	$key_session = waSessionAuthKey($global_webacappella_auth_chain);
	$login = strtolower($login);
	$hash_pwd = sha1($pwd);
    foreach ($global_webacappella_auth_chain['auth_chain'] as $user_uuid => $user_inf)
    {
    	if ($login===$user_inf['login'])
    	{
 
			if ($user_inf['hash'] === $hash_pwd)
			{
				if (count(array_intersect($page_auth_chain, $user_inf['auth']))>0)
				{
					array_push($_SESSION[$key_session], $user_inf['uuid']);

					$_SESSION[$key_session] = array_unique($_SESSION[$key_session]);
					return true;
				}
			}
			return false;
    	}
    }
    return false;
}


function waWebMessage_internal($key,$lang)
{
	$arr = &$GLOBALS['global_webacappella_messages'];
	if (array_key_exists($lang,$arr))
	{
		$arr2 = &$arr[$lang];
		$key = strtolower($key);
		if (array_key_exists($key,$arr2))
		{
			return $arr2[$key];
		}	
	}
	return '';
}

function waWebMessage($key,$lang)
{
	$mess = waWebMessage_internal($key,$lang);
	if (strlen($mess)==0)
	{
		$mess = waWebMessage_internal($key,'en');
	}
	if (strlen($mess)==0)
	{
		return "*".$key;
	}
	return $mess;
}

