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
			<label for=\"8c250tqk-imCpt\">Проверочное слово:</label><br />
			<input type=\"text\" id=\"8c250tqk-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
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
					'upload' => '<script> showboxlinkad81b2d701d4780149b0a07b9510dc14 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_1.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkad81b2d701d4780149b0a07b9510dc14, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinked932c9a3617e310d190fa04d7d2ed4a = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_1.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinked932c9a3617e310d190fa04d7d2ed4a, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlinka049135c21869c8f1cf77dfe78409c0d = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_3b.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinka049135c21869c8f1cf77dfe78409c0d, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink70afd9b38a182312d37aefddff0b676f = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_3b.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink70afd9b38a182312d37aefddff0b676f, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlink40d4573848f7dee5176f30c0cf76d1aa = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_2.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink40d4573848f7dee5176f30c0cf76d1aa, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkdd372e3b7b40361dfd69190bae109e83 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_2.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkdd372e3b7b40361dfd69190bae109e83, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlink639809929df18a18ad2210e2da6cf54f = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink639809929df18a18ad2210e2da6cf54f, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink12b7a5c73c6e2eed92da3d86bb4be4b8 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink12b7a5c73c6e2eed92da3d86bb4be4b8, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlinkd3d17552b5ccbd3b8d8dda1b9adc22c1 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkd3d17552b5ccbd3b8d8dda1b9adc22c1, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink904b3448826f3ec22f6fca4130050b3c = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink904b3448826f3ec22f6fca4130050b3c, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlinkb1d1d1b359b78ecc4dbe1f044dc4f583 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cycling_shoe_1.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkb1d1d1b359b78ecc4dbe1f044dc4f583, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkde9615bdc1005f811bcda2db52d75467 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cycling_shoe_1.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkde9615bdc1005f811bcda2db52d75467, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlink85815bf0080a857760d0be854c6f1e35 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bike_helmet.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink85815bf0080a857760d0be854c6f1e35, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkb1b3803740419b94fb6344bf9503c08d = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bike_helmet.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkb1b3803740419b94fb6344bf9503c08d, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlink74d3f2bad0ebfb77e4402713958ea688 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bell_1a.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink74d3f2bad0ebfb77e4402713958ea688, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkadb2e4bab9673d5c70c37c306cf6240d = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bell_1a.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkadb2e4bab9673d5c70c37c306cf6240d, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlinkf7747ad4543410a517e08840cc7efac3 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/brakes_a.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkf7747ad4543410a517e08840cc7efac3, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkae46d061386d02d26ec29bb30335d72f = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/brakes_a.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkae46d061386d02d26ec29bb30335d72f, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlink2a8b793eed3256c97d040df629160f1f = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/boxing_gloves.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink2a8b793eed3256c97d040df629160f1f, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink268af37fb09b5a093b7c5ed9c6a292a9 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/boxing_gloves.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink268af37fb09b5a093b7c5ed9c6a292a9, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlink0bf855923b0899b2d89c8522f42dc11e = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/ski_glasses.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink0bf855923b0899b2d89c8522f42dc11e, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink1ac4eed5172275a790d8c3a54966ab75 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/ski_glasses.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink1ac4eed5172275a790d8c3a54966ab75, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlink51967c2a7cecb5044a8fd29ee06e70ee = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/snap-hook.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink51967c2a7cecb5044a8fd29ee06e70ee, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink49d3a6e7459c49f35f30bec16ede6fb5 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/snap-hook.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink49d3a6e7459c49f35f30bec16ede6fb5, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlink99c98967ffd7ad3ac4a9ecfb14305222 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/camping_shoe_.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink99c98967ffd7ad3ac4a9ecfb14305222, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkcc1fca95686c203240ae860f2a7984eb = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/camping_shoe_.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkcc1fca95686c203240ae860f2a7984eb, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlink0e71f1d1330d35872d8ececbd955c4f5 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink0e71f1d1330d35872d8ececbd955c4f5, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinke8799a40e0f79b37c9b1db75a0bcee9a = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinke8799a40e0f79b37c9b1db75a0bcee9a, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlinkbd8ea2bf81eb9d77a15d42aac6be8842 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/tent-2.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkbd8ea2bf81eb9d77a15d42aac6be8842, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink7d0a61fd574619d14f4bc7f6c99c673d = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/tent-2.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink7d0a61fd574619d14f4bc7f6c99c673d, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlink9698cb500d6730d0c23644317313fa2d = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/men-goggles_3.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink9698cb500d6730d0c23644317313fa2d, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink16221a16bdc04110246dc444bea7c465 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/men-goggles_3.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink16221a16bdc04110246dc444bea7c465, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlink497ca85c677f239aff00b9031b69d63e = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink497ca85c677f239aff00b9031b69d63e, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkcd469b46673b5a5ac867d5a47e833631 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkcd469b46673b5a5ac867d5a47e833631, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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
					'upload' => '<script> showboxlink60fc8e7722e70172cbfe77ea6de1798d = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/clothing.png\',\'width\': 625,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink60fc8e7722e70172cbfe77ea6de1798d, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink185739260a5c881f7f022ecc603f85ca = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/clothing.png\',\'width\': 625,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink185739260a5c881f7f022ecc603f85ca, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
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