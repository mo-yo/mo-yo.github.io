<?php 


	include_once(__DIR__.'/../../../libs/phpmailer/src/POP3.php');

	include_once(__DIR__.'/../../../libs/phpmailer/src/PHPMailer.php');
	include_once(__DIR__.'/../../../libs/phpmailer/src/SMTP.php');
	include_once(__DIR__.'/../../../libs/phpmailer/src/Exception.php');	
	include_once(__DIR__.'/../../../libs/phpmailer/src/OAuth.php');	
	
	use PHPMailer\PHPMailer\PHPMailer;

	function setMailSettings(PHPMailer &$mail)
    {
    	
    		$email_settings = [
'phpmailer'=>[
'UseSendmailOptions'=>1,'phpmailer_enabled'=>1
],'smtp'=>[
'enabled'=>0
]
];
    	



        
        $smtp = null;
        if (($email_settings!==null)&& (array_key_exists('smtp',$email_settings)===true))
        {
            if ($email_settings['smtp']['enabled']===1)
            {
                $smtp = $email_settings['smtp'];
            }
        }
        if ($smtp !== null)
        {
            $mail->isSMTP();// Set mailer to use SMTP
            $mail->Host = $smtp['host'];  // Specify main and backup SMTP servers
            $mail->SMTPSecure = $smtp['protocol']; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = $smtp['port'];

            $mail->SMTPAuth = ($smtp['b_auth']===1)?true:false;    // Enable SMTP authentication
            $mail->Username = $smtp['user']; // SMTP username
            $mail->Password = $smtp['pwd'];           // SMTP password
        }
        else
        {

            $phpmailer_settings = $email_settings['phpmailer'];

            $mail->isMail();
            $mail->UseSendmailOptions = ($phpmailer_settings['UseSendmailOptions']===1)?true:false;
        }


    }

	function waSendMail( $to,$from, $title, $mess, $reply_to,&$error_string)
	{
		//if (strlen($to)==0) $to = ""; 
		//if (strlen($title)==0) $title = ""; 
		//if (strlen($title)==0) $title = ""; 
		if (strlen($to)==0)      
		{
			$error_string = 'No email';     
			return false;     
		}

        $main_address = "";
        $addresses = explode(";",$to);
        if (count($addresses)>0)
        {
            $main_address = $addresses[0];
        }

        if (filter_var($main_address, FILTER_VALIDATE_EMAIL)===false)
        {
            $error_string ='Invalid email ! ('.$main_address.')';
                    return false;
        }


        $mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';

        $mail->ClearReplyTos();

        if (strlen($reply_to)>0)
        {
            $mail->AddReplyTo($reply_to);
        }
        else
        {
            $mail->AddReplyTo($main_address);
        }

        if (strlen($from)==0)
        {
            $from = $main_address;
        }

        if (strlen($from)>0)
        {
            $mail->SetFrom($from);
        }

        foreach ($addresses as $address)
        {
            $mail->AddAddress($address);
        }

        setMailSettings($mail);
        //Content
        $mail->isHTML(false);
        $mail->Subject = $title;


        $error_upload = "";
        $warning_upload = "";
        
        if (strlen($warning_upload)>0)
        {
            $mess.="\n".$warning_upload;
        }
        if (strlen($error_upload)>0)
        {
            $mess.="\n".$error_upload;
        }


        $mail->Body    = $mess;
        if (@$mail->send()===false)
        {
            $error_string = $mail->ErrorInfo;
            return false;
        }
        return true;
	}


function waRetrievePostParameter($k)
{
	$val='';
	if (isset($HTTP_POST_VARS)&&array_key_exists($k,$HTTP_POST_VARS)) $val= $HTTP_POST_VARS[$k];
	if (isset($_POST)&&array_key_exists($k,$_POST)) $val= $_POST[$k];
	return stripslashes( $val );
}

$text_message = "";
//post.text|linebreaksbr





	$FROM = "";
	$TO = "";
	$MAIL_OBJECT = "";
	$mail_reply_to = "";

    $nb_files = 0;
	

        if ((strlen($text_message)==0)&&($nb_files>0))
        {
            $text_message .= "You have ".$nb_files." attachments !";
        }


$error_string = "";
$res = true;//
$res =waSendMail( $TO, $FROM,$MAIL_OBJECT, $text_message, $mail_reply_to,$error_string);


echo json_encode(['success'=>$res,'message'=>$error_string]);
