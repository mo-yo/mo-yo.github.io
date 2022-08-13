<?php

session_start();

$filename_php = $wa_page_infos['name_infos']['php'];
$basename = $wa_page_infos['name_infos']['basename'];
$wafx_base_res = $wa_page_infos['name_infos']['wafx_base_res'];
$lang = $wa_page_infos['name_infos']['lang'];



$wafx_key_token = 'wafx_token_authenticated';
$wafx_auth_valid = false;

if ($wafx_auth_valid!=true)
{

	?>
	<html>
	<head>
			<title>Securized access</title>
			<link rel="stylesheet" href="<?php echo $wafx_base_res;?>wafx_res/standard/css/wafx-auth-form.css"/>
	</head>
	<body>
<div class="login-page">
  <div class="form">
    <div class="login-form" >

    	<p><?php echo waWebMessage('WebMessage:RestrictArea:feature not avalaible',$lang);?></p>
      <input name="auth_wa_identifier" type="text" maxlength="15" value="<?php echo $wa_authorized_main_login;?>"  placeholder="<?php echo waWebMessage('WebMessage:RestrictArea:login placeholder',$lang);?>" required autocomplete="off" />
      <input name="auth_wa_password" readonly type="password" maxlength="15"  placeholder="<?php echo waWebMessage('WebMessage:RestrictArea:password placeholder',$lang);?>"  required autocomplete="off"/>
      <button><?php echo waWebMessage('WebMessage:RestrictArea:button label',$lang);?></button>
    </form>
  </div>
</div>


	</body>
	</html>
<?php
	exit();
}
