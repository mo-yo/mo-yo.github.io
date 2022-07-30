<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => '03BD30E59FE1AEC2F1E0AA5997AC5D65',
	'url' => 'https://mo-yo.ml/',
	'homepage_url' => 'https://mo-yo.ml/index.html',
	'icon' => '',
	'version' => '2022.2.6.0',
	'sitename' => 'Новый проект 1',
	'lang_code' => 'ru-RU',
	'public_folder' => '',
	'salt' => 'hvsyg2xlum43ra2jz9163b6knq2sjy8fd9o9j5a0nks9',
	'common_email_sender_addres' => 'info@example.com'
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"rimfpdig-imCpt\">Проверочное слово:</label><br />
			<input type=\"text\" id=\"rimfpdig-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_ixvbrjsl.png',
	'notification_public_key' => '31fcbe412af66052',
	'notification_private_key' => 'a5f12e7e0556e97e',
	'enable_manager_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
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
	'page_url' => 'https://mo-yo.ml/cart/index.html',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(12, 52, 61, 1); background-color: rgba(255, 255, 255, 1); padding: 10px 20px 10px 20px; border-style: solid; border-width: 1px 1px 1px 1px; border-color: rgba(169, 169, 169, 1) rgba(169, 169, 169, 1) rgba(169, 169, 169, 1) rgba(169, 169, 169, 1); border-top-left-radius: 2px; border-top-right-radius: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px;',
	'email_opening' => 'Уважаемый покупатель, благодарим вас за ваш заказ и напоминаем, что вам нужно его оплатить.<br /><br />Ниже вы найдете список заказанных товаров, данные счета-фактуры и отправки и инструкции по оплате.',
	'email_closing' => 'Обращайтесь к нам за дополнительной информацией.<br /><br />С уважением, сотрудники отдела продаж.',
	'email_payment_opening' => 'Уважаемый покупатель,<br /><br />Благодарим вас за покупку. Мы получили ваш платеж. Ваш заказ будет выполнен в кратчайшие сроки.<br /><br />Ниже вы найдете список заказанных товаров, данные счета-фактуры и отправки.',
	'email_payment_closing' => 'Мы в вашем распоряжении для дополнительной информации.<br /><br />С уважением, Коммерческий отдел',
	'email_digital_shipment_opening' => 'Уважаемый Клиент,<br /><br />Благодарим вас за покупку и высылаем вам список ссылок для загрузки заказанных товаров:',
	'email_digital_shipment_closing' => 'Мы в вашем распоряжении для дополнительной информации.<br /><br />С уважением, Коммерческий отдел',
	'email_physical_shipment_opening' => '"Уважаемый клиент,<br /> Спасибо за покупку. Мы подтверждаем, что заказ был правильно обработан и отправлен.<br /> В приложении список заказанных товаров:"',
	'email_physical_shipment_closing' => 'Мы в вашем распоряжении для дополнительной информации.<br /><br />С уважением, Коммерческий отдел',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(240, 240, 240, 1)',
	'header_text_color' => 'rgba(0, 0, 0, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(255, 255, 255, 1)',
	'owner_email' => 'example@example.com',
	'vat_type' => 'included',
	'availability_image' => 'cart/images/cart-available.png'
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '$',
	'currency_code' => 'USD',
	'currency_name' => 'United States of America, Dollars',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array(
	'3lsbb42a' => array(
		'id' => '3lsbb42a',
		'name' => 'Shoes_1',
		'category' => '99t6t1yw',
		'categoryPath' => array(
			'99t6t1yw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 70.00,
		'singleFullPrice' => '57.38',
		'singleFullPricePlusVat' => '70.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/shoe_1.png',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://mo-yo.ml/images/shoe_1.png',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_1.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_1.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_1.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_1.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkfcd2bc034c4eed5a0d4f7f2223057d5f = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_1.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkfcd2bc034c4eed5a0d4f7f2223057d5f, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink7cd3a0db599e222075e6b77d75b6a5d5 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_1.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink7cd3a0db599e222075e6b77d75b6a5d5, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'shoes_1',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Shoes_1',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Shoes_1',
			'image' => 'https://mo-yo.ml/images/shoe_1.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '70.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'y5229c45' => array(
		'id' => 'y5229c45',
		'name' => 'Pink Shoes',
		'category' => '99t6t1yw',
		'categoryPath' => array(
			'99t6t1yw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Lorem Ipsum dolor sit amet',
		'sku' => '',
		'options' => array(),
		'price' => 100.00,
		'singleFullPrice' => '81.97',
		'singleFullPricePlusVat' => '100.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/shoe_3b.png',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://mo-yo.ml/images/shoe_3b.png',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_3b.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_3b.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_3b.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_3b.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinka43d3efc0e99cbe6e06b209903e03ccd = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_3b.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinka43d3efc0e99cbe6e06b209903e03ccd, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinka59e893b4fcbfd2a6dc17d79234028c3 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_3b.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinka59e893b4fcbfd2a6dc17d79234028c3, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'pink-shoes',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Pink Shoes',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Pink Shoes',
			'image' => 'https://mo-yo.ml/images/shoe_3b.png',
			'description' => 'Lorem Ipsum dolor sit amet',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '100.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'vpdex4ny' => array(
		'id' => 'vpdex4ny',
		'name' => 'Shoes_3',
		'category' => '99t6t1yw',
		'categoryPath' => array(
			'99t6t1yw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 55.00,
		'singleFullPrice' => '45.08',
		'singleFullPricePlusVat' => '55.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/shoe_2.png',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://mo-yo.ml/images/shoe_2.png',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_2.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_2.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_2.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_2.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkc16cdac22996d8d6bcd7037a9a7ef8b4 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_2.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkc16cdac22996d8d6bcd7037a9a7ef8b4, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkb72570d1843e82b5c9f763751adfaee4 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_2.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkb72570d1843e82b5c9f763751adfaee4, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'shoes_3',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Shoes_3',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Shoes_3',
			'image' => 'https://mo-yo.ml/images/shoe_2.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '55.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'm5o731m1' => array(
		'id' => 'm5o731m1',
		'name' => 'Running Arm Band',
		'category' => '99t6t1yw',
		'categoryPath' => array(
			'99t6t1yw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 85.00,
		'singleFullPrice' => '69.67',
		'singleFullPricePlusVat' => '85.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/run_2.jpg',
				'width' => 600,
				'height' => 600
			),
			array(
				'type' => 'image',
				'url' => 'images/run_3.jpg',
				'width' => 600,
				'height' => 600
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://mo-yo.ml/images/run_2.jpg',
			'width' => 600,
			'height' => 600
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink82c57f45c2b8a3993f508af1b8064f55 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink82c57f45c2b8a3993f508af1b8064f55, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinke9a680ec7bd40fa55b3e758aefc12f68 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinke9a680ec7bd40fa55b3e758aefc12f68, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 1, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 1, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 1, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 1, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink043893b1bb53236b18fcb238fae49eac = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink043893b1bb53236b18fcb238fae49eac, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkfcd1f36a7ee6f67ddc9872ffa906ab8b = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkfcd1f36a7ee6f67ddc9872ffa906ab8b, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'running-arm-band',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Running Arm Band',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Running Arm Band',
			'image' => array(
				'https://mo-yo.ml/images/run_2.jpg',
				'https://mo-yo.ml/images/run_3.jpg'
			),
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '85.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'1wg3d83n' => array(
		'id' => '1wg3d83n',
		'name' => 'Green cycling shoes',
		'category' => '8zhr4slu',
		'categoryPath' => array(
			'8zhr4slu'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 39.99,
		'singleFullPrice' => '32.78',
		'singleFullPricePlusVat' => '39.99',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Cycling_shoe_1.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://mo-yo.ml/images/Cycling_shoe_1.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cycling_shoe_1.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cycling_shoe_1.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cycling_shoe_1.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cycling_shoe_1.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkfeaf5c0055cd96443c99bcd72866af7b = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cycling_shoe_1.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkfeaf5c0055cd96443c99bcd72866af7b, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinka64f90f54cbd3630d2c40e3c92ffb376 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cycling_shoe_1.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinka64f90f54cbd3630d2c40e3c92ffb376, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0.0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'green-cycling-shoes',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Green cycling shoes',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Green cycling shoes',
			'image' => 'https://mo-yo.ml/images/Cycling_shoe_1.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '39.990'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'625cwa1f' => array(
		'id' => '625cwa1f',
		'name' => 'Bike Helmet',
		'category' => '8zhr4slu',
		'categoryPath' => array(
			'8zhr4slu'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 42.00,
		'singleFullPrice' => '34.43',
		'singleFullPricePlusVat' => '42.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/bike_helmet.png',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://mo-yo.ml/images/bike_helmet.png',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bike_helmet.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bike_helmet.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bike_helmet.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bike_helmet.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink13cdcc8d372704acf308f429692fd689 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bike_helmet.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink13cdcc8d372704acf308f429692fd689, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkafd4cb014251d630734d790525006428 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bike_helmet.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkafd4cb014251d630734d790525006428, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0.0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'bike-helmet',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Bike Helmet',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Bike Helmet',
			'image' => 'https://mo-yo.ml/images/bike_helmet.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '42.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'm1gs9e99' => array(
		'id' => 'm1gs9e99',
		'name' => 'Bike Bell',
		'category' => '8zhr4slu',
		'categoryPath' => array(
			'8zhr4slu'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(
			array(
				'id' => 's8f540db',
				'name' => 'Black + Pois',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'yrrwpvtk',
				'name' => 'Pink + Pois',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '10u0v1mv',
				'name' => 'Love & Bee yourself',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 5.99,
		'singleFullPrice' => '4.91',
		'singleFullPricePlusVat' => '5.99',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/bell_1a.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://mo-yo.ml/images/bell_1a.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bell_1a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bell_1a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bell_1a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bell_1a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink7d5ce87889c1311939a49d6d3b37e114 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bell_1a.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink7d5ce87889c1311939a49d6d3b37e114, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink9e0a4c88bb26212a89908823d2449995 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bell_1a.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink9e0a4c88bb26212a89908823d2449995, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0.0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'bike-bell',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Bike Bell',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Bike Bell',
			'image' => 'https://mo-yo.ml/images/bell_1a.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '5.990'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'zs17zh60' => array(
		'id' => 'zs17zh60',
		'name' => 'Bike Brakes',
		'category' => '8zhr4slu',
		'categoryPath' => array(
			'8zhr4slu'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 80.00,
		'singleFullPrice' => '65.57',
		'singleFullPricePlusVat' => '80.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/brakes_a.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://mo-yo.ml/images/brakes_a.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/brakes_a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/brakes_a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/brakes_a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/brakes_a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink7ba70ea2d916d54cf356cb545e7d6c2c = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/brakes_a.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink7ba70ea2d916d54cf356cb545e7d6c2c, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink08e5577059b879832ea2cfd3f6c4e7d3 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/brakes_a.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink08e5577059b879832ea2cfd3f6c4e7d3, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0.0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'bike-brakes',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Bike Brakes',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Bike Brakes',
			'image' => 'https://mo-yo.ml/images/brakes_a.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '80.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'w551k4y8' => array(
		'id' => 'w551k4y8',
		'name' => 'Boxing gloves',
		'category' => 'g4kpg7fs',
		'categoryPath' => array(
			'g4kpg7fs'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 15.00,
		'singleFullPrice' => '12.30',
		'singleFullPricePlusVat' => '15.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => array(
			array(
				'minimum' => 1,
				'value' => 60.00
			)
		),
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/boxing_gloves.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://mo-yo.ml/images/boxing_gloves.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/boxing_gloves.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/boxing_gloves.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/boxing_gloves.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/boxing_gloves.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinke7aae950db3d4057608dd54f91d516f4 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/boxing_gloves.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinke7aae950db3d4057608dd54f91d516f4, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink49b36180c08adabc6ac115ae351d19b6 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/boxing_gloves.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink49b36180c08adabc6ac115ae351d19b6, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => true,
		'slug' => 'boxing-gloves',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Boxing gloves',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Boxing gloves',
			'image' => 'https://mo-yo.ml/images/boxing_gloves.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '15.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'kx3sfo6u' => array(
		'id' => 'kx3sfo6u',
		'name' => 'Ski&Snow Kids Goggles',
		'category' => 'g4kpg7fs',
		'categoryPath' => array(
			'g4kpg7fs'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 45.00,
		'singleFullPrice' => '36.89',
		'singleFullPricePlusVat' => '45.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/ski_glasses.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://mo-yo.ml/images/ski_glasses.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/ski_glasses.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/ski_glasses.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/ski_glasses.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/ski_glasses.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink0efd772818f19760edb315271abf99d2 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/ski_glasses.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink0efd772818f19760edb315271abf99d2, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkb6542418237a3631e73a686776bd0a53 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/ski_glasses.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkb6542418237a3631e73a686776bd0a53, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0.0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'ski-snow-kids-goggles',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Ski&Snow Kids Goggles',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Ski&Snow Kids Goggles',
			'image' => 'https://mo-yo.ml/images/ski_glasses.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '45.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'tg0ox21f' => array(
		'id' => 'tg0ox21f',
		'name' => 'Snap Hook',
		'category' => '9c0o4464',
		'categoryPath' => array(
			'9c0o4464'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 8.99,
		'singleFullPrice' => '7.37',
		'singleFullPricePlusVat' => '8.99',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/snap-hook.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://mo-yo.ml/images/snap-hook.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/snap-hook.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/snap-hook.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/snap-hook.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/snap-hook.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink462206232d072fa4529e40b6b363217f = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/snap-hook.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink462206232d072fa4529e40b6b363217f, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink0236fb77aaacb084c918ff3c121c3075 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/snap-hook.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink0236fb77aaacb084c918ff3c121c3075, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0.0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'snap-hook',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Snap Hook',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Snap Hook',
			'image' => 'https://mo-yo.ml/images/snap-hook.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '8.990'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'27dp1se8' => array(
		'id' => '27dp1se8',
		'name' => 'Camping Shoes',
		'category' => '9c0o4464',
		'categoryPath' => array(
			'9c0o4464'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 45.00,
		'singleFullPrice' => '36.89',
		'singleFullPricePlusVat' => '45.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/camping_shoe_.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://mo-yo.ml/images/camping_shoe_.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/camping_shoe_.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/camping_shoe_.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/camping_shoe_.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/camping_shoe_.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinka36725b16d1cb9aec02a4d611f0d7fa0 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/camping_shoe_.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinka36725b16d1cb9aec02a4d611f0d7fa0, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink18c1fd355d625d6b37e484ed97abb480 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/camping_shoe_.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink18c1fd355d625d6b37e484ed97abb480, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0.0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'camping-shoes',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Camping Shoes',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Camping Shoes',
			'image' => 'https://mo-yo.ml/images/camping_shoe_.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '45.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'l3qe8o9d' => array(
		'id' => 'l3qe8o9d',
		'name' => 'Roof Top Tents',
		'category' => '9c0o4464',
		'categoryPath' => array(
			'9c0o4464'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 700.00,
		'singleFullPrice' => '573.77',
		'singleFullPricePlusVat' => '700.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/car-tent.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://mo-yo.ml/images/car-tent.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink613a038ea47f9f9c1989d42179de5b1c = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink613a038ea47f9f9c1989d42179de5b1c, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink3c7d01e28b07c41c5ab9a67775576f7c = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink3c7d01e28b07c41c5ab9a67775576f7c, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0.0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'roof-top-tents',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Roof Top Tents',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Roof Top Tents',
			'image' => 'https://mo-yo.ml/images/car-tent.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '700.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'q4ylpbgs' => array(
		'id' => 'q4ylpbgs',
		'name' => 'Various Colored Tents',
		'category' => '9c0o4464',
		'categoryPath' => array(
			'9c0o4464'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(
			array(
				'id' => 's8f540db',
				'name' => 'Pink + Turquoise',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'yrrwpvtk',
				'name' => 'Navy Blue',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '10u0v1mv',
				'name' => 'Green',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 129.99,
		'singleFullPrice' => '106.55',
		'singleFullPricePlusVat' => '129.99',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/tent-2.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://mo-yo.ml/images/tent-2.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/tent-2.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/tent-2.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/tent-2.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/tent-2.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkee358c334d084e87ba1fbba01e9865cb = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/tent-2.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkee358c334d084e87ba1fbba01e9865cb, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink6653f5622e703b6b7585f09f2a088a93 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/tent-2.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink6653f5622e703b6b7585f09f2a088a93, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0.0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'various-colored-tents',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Various Colored Tents',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Various Colored Tents',
			'image' => 'https://mo-yo.ml/images/tent-2.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '129.990'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'fjpfw68a' => array(
		'id' => 'fjpfw68a',
		'name' => 'Ski&Snow Men Goggles',
		'category' => 'g4kpg7fs',
		'categoryPath' => array(
			'g4kpg7fs'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(
			array(
				'id' => 's8f540db',
				'name' => 'Black',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'yrrwpvtk',
				'name' => 'White',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '10u0v1mv',
				'name' => 'Red',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 90.00,
		'singleFullPrice' => '73.77',
		'singleFullPricePlusVat' => '90.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/men-goggles_3.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://mo-yo.ml/images/men-goggles_3.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/men-goggles_3.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/men-goggles_3.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/men-goggles_3.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/men-goggles_3.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink5344cb5c4962b9f58530fb8f8f4fabb5 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/men-goggles_3.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink5344cb5c4962b9f58530fb8f8f4fabb5, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink1c3f55829b26bb71b8eab845ad577994 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/men-goggles_3.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink1c3f55829b26bb71b8eab845ad577994, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0.0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'ski-snow-men-goggles',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Ski&Snow Men Goggles',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Ski&Snow Men Goggles',
			'image' => 'https://mo-yo.ml/images/men-goggles_3.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '90.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'7en2lkr4' => array(
		'id' => '7en2lkr4',
		'name' => 'Roof Top Tents_sale',
		'category' => 'g4kpg7fs',
		'categoryPath' => array(
			'g4kpg7fs'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 700.00,
		'singleFullPrice' => '573.77',
		'singleFullPricePlusVat' => '700.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/car-tent.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://mo-yo.ml/images/car-tent.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkda06a3ec094e88cf9ac96f7230e3691d = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkda06a3ec094e88cf9ac96f7230e3691d, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkc13e4d33fe361832b38afdd088029cf4 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkc13e4d33fe361832b38afdd088029cf4, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0.0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'roof-top-tents_sale',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Roof Top Tents_sale',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Roof Top Tents_sale',
			'image' => 'https://mo-yo.ml/images/car-tent.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '700.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'6kb1363r' => array(
		'id' => '6kb1363r',
		'name' => 'Sports wear',
		'category' => 'g4kpg7fs',
		'categoryPath' => array(
			'g4kpg7fs'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 69.00,
		'singleFullPrice' => '56.56',
		'singleFullPricePlusVat' => '69.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => array(
			array(
				'minimum' => 10,
				'value' => 70.00
			)
		),
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/clothing.png',
				'width' => 625,
				'height' => 600
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://mo-yo.ml/images/clothing.png',
			'width' => 625,
			'height' => 600
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/clothing.png\',\'width\': 625,\'height\': 600}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/clothing.png\',\'width\': 625,\'height\': 600}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/clothing.png\',\'width\': 625,\'height\': 600}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/clothing.png\',\'width\': 625,\'height\': 600}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink3ea6827a17550bd6890feedfb715a82e = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/clothing.png\',\'width\': 625,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink3ea6827a17550bd6890feedfb715a82e, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink1a45d36d1f7642d4a9aacdaf26ea2bb1 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/clothing.png\',\'width\': 625,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink1a45d36d1f7642d4a9aacdaf26ea2bb1, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0.0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => true,
		'slug' => 'sports-wear',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Sports wear',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Sports wear',
			'image' => 'https://mo-yo.ml/images/clothing.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '69.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'81mr4hq7' => array(
		'id' => '81mr4hq7',
		'name' => 'Bike Helmet_sale',
		'category' => 'g4kpg7fs',
		'categoryPath' => array(
			'g4kpg7fs'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 42.00,
		'singleFullPrice' => '34.43',
		'singleFullPricePlusVat' => '42.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(),
		'thumb' => array(
			'type' => 'image/svg',
			'url' => 'https://mo-yo.ml/cart/images/no-preview.svg',
			'width' => 600,
			'height' => 600
		),
		'link' => null,
		'showboxLinks' => array(),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'bike-helmet_sale',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Bike Helmet_sale',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Bike Helmet_sale',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '42.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	)
));
$ecommerce->setSlugToProductIdMap(array(
	'shoes_1' => '3lsbb42a',
	'pink-shoes' => 'y5229c45',
	'shoes_3' => 'vpdex4ny',
	'running-arm-band' => 'm5o731m1',
	'green-cycling-shoes' => '1wg3d83n',
	'bike-helmet' => '625cwa1f',
	'bike-bell' => 'm1gs9e99',
	'bike-brakes' => 'zs17zh60',
	'boxing-gloves' => 'w551k4y8',
	'ski-snow-kids-goggles' => 'kx3sfo6u',
	'snap-hook' => 'tg0ox21f',
	'camping-shoes' => '27dp1se8',
	'roof-top-tents' => 'l3qe8o9d',
	'various-colored-tents' => 'q4ylpbgs',
	'ski-snow-men-goggles' => 'fjpfw68a',
	'roof-top-tents_sale' => '7en2lkr4',
	'sports-wear' => '6kb1363r',
	'bike-helmet_sale' => '81mr4hq7'
));
$ecommerce->setCategoriesData(array(
	'g4kpg7fs' => array(
		'id' => 'g4kpg7fs',
		'name' => 'ON SALE',
		'containsProductsWithProductPage' => false,
		'products' => array(
			'w551k4y8',
			'kx3sfo6u',
			'fjpfw68a',
			'7en2lkr4',
			'6kb1363r',
			'81mr4hq7'
		),
		'categories' => array()
	),
	'9c0o4464' => array(
		'id' => '9c0o4464',
		'name' => 'Camping',
		'containsProductsWithProductPage' => false,
		'products' => array(
			'tg0ox21f',
			'27dp1se8',
			'q4ylpbgs',
			'l3qe8o9d'
		),
		'categories' => array()
	),
	'8zhr4slu' => array(
		'id' => '8zhr4slu',
		'name' => 'Cycling',
		'containsProductsWithProductPage' => false,
		'products' => array(
			'1wg3d83n',
			'625cwa1f',
			'm1gs9e99',
			'zs17zh60'
		),
		'categories' => array()
	),
	'99t6t1yw' => array(
		'id' => '99t6t1yw',
		'name' => 'Running',
		'containsProductsWithProductPage' => false,
		'products' => array(
			'3lsbb42a',
			'y5229c45',
			'vpdex4ny',
			'm5o731m1'
		),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_qs1hyvus_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Банковский платеж',
		'description' => 'Оплатить позже банковским платежом.',
		'email_text' => 'Вот данные, необходимые для банковского платежа:

XXX YYY ZZZ

Пожалуйста, обратите внимание, что как только платеж будет проведен, необходимо отправить копию квитанции об оплате вместе с номером заказа.',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'почтой',
		'description' => 'Товары будут доставлены в течение 3-5 дней.',
		'email_text' => 'Доставка почтой.\\nТовары будут доставлены в течение 3-5 дней.',
		'enable_tracking' => false,
		'tracking_url' => ''
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'службой экспресс-доставки',
		'description' => 'Товары будут доставлены в течение 1-2 дней.',
		'email_text' => 'Доставка службой экспресс-доставки.\\nТовары будут доставлены в течение 1-2 дней.',
		'enable_tracking' => false,
		'tracking_url' => ''
	)));

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

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = false;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '</head>' . "\n" . '<body bgcolor="#708090" style="background-color: #708090;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 11pt \'Tahoma\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; border-style: solid; border-color: #783F04; border-top-width: 2px; border-right-width: 2px; border-bottom-width: 0; border-bottom: none; border-left-width: 2px; background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '<tr><td id="imEmailFooter" style="font: normal normal normal 11pt \'Tahoma\'; color: #000000; background-color: transparent; text-decoration: none; text-align: center;  width: 700px;border-style: solid; border-color: #783F04; border-top-width: 0; border-top: none; border-right-width: 2px; border-bottom-width: 2px; border-left-width: 2px; padding: 10px; background-color: #FFFFFF" width="700px">' . "\n\t\t" . 'Это письмо-подтверждение предназначено для исключения несанкционированного использования вашего адреса электронной почты.<br>Если вы получили это сообщение по ошибке, пожалуйста, сообщите об этом отправителю и удалите это письмо, не делая копий.' . "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#708090';
$ImMailer->emailContentStyle = 'font: normal normal normal 11pt \'Tahoma\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Tahoma;';

// End of file x5settings.php