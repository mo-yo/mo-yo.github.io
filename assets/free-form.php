<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$subject = 'Заявка c сайта '.$_SERVER['HTTP_HOST'].' ';
$userName = strip_tags($_POST['free-user-name']);
$userPhone = strip_tags($_POST['free-user-phone']);
$userDate = strip_tags($_POST['free-user-date']);
$usermail = strip_tags($_POST['free-user-email']);
$userComments = strip_tags($_POST['free-user-comments']);
$admin_mail = strip_tags($_POST['free-admin-mail']);
if ( !empty( $userName ) ){$userName = '<tr><td style="border: 1px solid #a2a2a2;padding: 5px;">Имя: </td><td style="border: 1px solid #a2a2a2;padding: 5px;">'.$userName.'</td></tr>';}
if ( !empty( $userPhone ) ){$userPhone = '<tr><td style="border: 1px solid #a2a2a2;padding: 5px;">Телефон: </td><td style="border: 1px solid #a2a2a2;padding: 5px;">'.$userPhone.'</td></tr>';}
if ( !empty( $userDate ) ){$userDate = '<tr><td style="border: 1px solid #a2a2a2;padding: 5px;">Дата: </td><td style="border: 1px solid #a2a2a2;padding: 5px;">'.$userDate.'</td></tr>';}
if ( !empty( $usermail ) ){$usermail = '<tr><td style="border: 1px solid #a2a2a2;padding: 5px;">E-mail: </td><td style="border: 1px solid #a2a2a2;padding: 5px;">'.$usermail.'</td></tr>';}
if ( !empty( $userComments ) ){ $userComments = '<tr><td style="border: 1px solid #a2a2a2;padding: 5px;">Комментарий: </td><td style="border: 1px solid #a2a2a2;padding: 5px;">'.$userComments.'</td></tr>';}
$body = '
<html>
<head>
  <title>'.$subject.'</title>
</head>
<body>
<p style="display:block;width:50%;height: 25px;background:#005ac3;color:white;letter-spacing: 1px;text-indent:10px;line-height:25px;">КОНТАКТНЫЕ ДАННЫЕ:</p>
 <table style="width: 50%; border-collapse: collapse;">
    '.$userName.'
    '.$userPhone.'
    '.$userDate.'
    '.$usermail.'
    '.$userComments.'
</table>
</body>
</html>';
$headers   = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = 'From:<'.$admin_mail.'>';
$headers[] = 'Bcc: Admin <'.$admin_mail.'>';
$headers[] = 'X-Mailer: PHP/'.phpversion();
mail($admin_mail, $subject, $body, implode("\r\n", $headers));
} else {header ("Location: /");}
?>
