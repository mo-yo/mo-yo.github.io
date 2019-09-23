<?php

include ("../res/x5engine.php");
$ecommerce = Configuration::getCart();
// Check the coupon code
if (@$_GET['action'] == 'chkcpn' && isset($_POST['coupon'])) {
	header('Content-type: application/json');
	echo $ecommerce->checkCoupon($_POST['coupon']);
	exit();
}
// Get the logged user
else if (@$_GET['action'] == 'userdata') {
	$data = Configuration::getPrivateArea()->whoIsLogged();
	if (strlen(@$data['email'])) {
		$order = $ecommerce->getOrders(0, 1, $data['email']);
		if (count($order['orders'])) {
			$order = $ecommerce->getOrder($order['orders'][0]['id']);
			echo '{ "success": true, "invoiceData": ' . json_encode($order['invoice']) . ', "shippingData": ' . json_encode($order['shipping']) . '}';
		}
		else {
			echo '{ "success": true, "invoiceData": [{ "field_id":"Email", "value": "' . $data['email'] . '"},{ "field_id":"Name", "value": "' . str_replace('"', '\\"', $data['firstname']) . '"},{ "field_id":"LastName", "value": "' . str_replace('"', '\\"', $data['lastname']) . '"}]}';
		}
	} else {
		echo '{ "success": false }';
	}
	exit();
}
// Check the dynamic products status
else if (@$_GET['action'] == 'productstatus' && !isset($_POST['product_id']) && ($headers = imRequestHeaders()) !== false) {
	$token = "";
	foreach ($headers as $key => $value) {
		if (strtolower($key) == 'x-incomedia-wsx5-token') {
			$token = $value;
		}
	}
	if ($token == '662htk2igx4ils7z4fst0wp1sih3w3ufh3gzk64k7l3q63ukwtm7sv2') {
		header('Content-type: application/json');
		echo json_encode(array('data' => $ecommerce->getDynamicProductsStatus()));
		exit();
	}
}
// Check a single dynamic products status
else if (@$_GET['action'] == 'productstatus' && isset($_POST['product_id'])) {
	header('Content-type: application/json');
	echo $ecommerce->getDynamicProductQuantity(@$_POST['product_id']);
	exit();
}
// Download a digital product
else if (isset($_GET['download'])) {
	try {
		$ecommerce->startProductDownload($_GET['download']);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	exit();
}
else if (@$_GET['action'] == 'sndrdr' && isset($_POST['orderData'])) {
	$orderNo = $_POST['orderData']['orderNo'];
	$ecommerce->setOrderData($_POST['orderData']);
	$ecommerce->sendOwnerEmail();
	$ecommerce->sendCustomerEmail();
	header('Content-type: application/json');
	echo '{ "status": "ok", "orderNumber": "' . $orderNo . '" }';
	exit;
}

// End of file x5cart.php
