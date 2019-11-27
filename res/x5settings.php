<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'https://mo-yo.ml/',
	'homepage_url' => 'https://mo-yo.ml/index.html',
	'icon' => 'https://mo-yo.ml/favicon.png',
	'version' => '14.0.3.1',
	'sitename' => 'Реставрация ванн',
	'public_folder' => '',
	'salt' => '6b0jiluomh3agob33ar312shbsw6l2o3hqszwrdsx4m1zw',
	'use_common_email_sender_address' => false,
	'common_email_sender_addres' => ''
);


$imSettings['admin'] = array(
	'notification_public_key' => '03ea60437ad05f48',
	'notification_private_key' => 'e4e94864ae9968e7',
	'enable_manager_notifications' => false,
	'theme' => 'orange'
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'force_sender' => false,
	'email_opening' => 'Уважаемый клиент,<br /><br />Благодарим Вас за покупку. Здесь Вы найдете информацию о заказе.<br /><br />Ниже приведен список заказанных товаров, информация о размере платежа и выбранных Вами способах оплаты и доставки.',
	'email_closing' => 'Обращайтесь к нам за дополнительной информацией.<br /><br />С уважением, сотрудники отдела продаж.',
	'email_digital_shipment_opening' => 'Уважаемый Клиент,<br /><br />Благодарим вас за покупку и высылаем вам список ссылок для загрузки заказанных товаров:',
	'email_digital_shipment_closing' => 'Мы в вашем распоряжении для дополнительной информации.<br /><br />С уважением, Коммерческий отдел',
	'email_physical_shipment_opening' => 'Уважаемый Клиент,<br /><br />Благодарим вас за покупку и высылаем вам список заказанных товаров:',
	'email_physical_shipment_closing' => 'Мы в вашем распоряжении для дополнительной информации.<br /><br />С уважением, Коммерческий отдел',
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => '',
	'vat_type' => 'included'
));

$ecommerce->setDigitalProductsData(array());

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();
/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(
	'template' => array(
),
	'pages' => array(

	)
);

/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = false;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '</head>' . "\n" . '<body bgcolor="rgba(55, 71, 79, 1)" style="background-color: rgba(55, 71, 79, 1);">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt \'Arial\'; color: rgba(0, 0, 0, 1); background-color: rgba(255, 255, 255, 1); text-align: left; text-decoration: none;  width: 700px;border-style: solid; border-color: rgba(0, 0, 0, 1); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;background-color: rgba(255, 255, 255, 1)" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Arial\'; color: rgba(255, 255, 255, 1); background-color: transparent; text-align: center; text-decoration: none;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'Это письмо-подтверждение предназначено для исключения несанкционированного использования вашего адреса электронной почты.<br>Если вы получили это сообщение по ошибке, пожалуйста, сообщите об этом отправителю и удалите это письмо, не делая копий.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = 'rgba(255, 255, 255, 1)';
$ImMailer->bodyBackgroundEven = 'rgba(255, 255, 255, 1)';
$ImMailer->bodyBackgroundOdd = 'rgba(240, 240, 240, 1)';
$ImMailer->bodyBackgroundBorder = 'rgba(205, 205, 205, 1)';
$ImMailer->bodyTextColorOdd = 'rgba(255, 255, 255, 1)';
$ImMailer->bodySeparatorBorderColor = 'rgba(0, 0, 0, 1)';
$ImMailer->emailBackground = 'rgba(55, 71, 79, 1)';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt \'Arial\'; color: rgba(0, 0, 0, 1); background-color: rgba(255, 255, 255, 1); text-align: left; text-decoration: none; ';
$ImMailer->emailContentFontFamily = 'font-family: Arial;';
ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Проверочное слово:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";

// End of file x5settings.php