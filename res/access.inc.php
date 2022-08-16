<?php

// Users data
$imSettings['access']['users'] = array(
	'example@example.com' => array(
		'id' => '6ycc6l8h',
		'groups' => array('0l1ggk0h'),
		'firstname' => 'Admin',
		'lastname' => '',
		'password' => '$2a$11$FPvzbfziM6DYw7Y3S.65gePpWzAJfdl6L1hh6qFe3zJ1ch6qyLPUy',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => false
	),
	'test@mail.ru' => array(
		'id' => '9tv2219i',
		'groups' => array('zibknked'),
		'firstname' => 'ВАНЯ',
		'lastname' => '',
		'password' => '$2a$11$Pmcf5wYedmWDreO8RdaSeOcoGsGHnlCHFFwEGZK4yZNHMy7sQwQha',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => false
	)
);

// Admins list
$imSettings['access']['admins'] = array('6ycc6l8h');

// Page/Users permissions
$imSettings['access']['pages'] = array();

// PASSWORD CRYPT

$imSettings['access']['password_crypt'] = array(
	'encoding_id' => 'php_default',
	'encodings' => array(
		'no_crypt' => array(
			'encode' => function ($pwd) { return $pwd; },
			'check' => function ($input, $encoded) { return $input == $encoded; }
		),
		'php_default' => array(
			'encode' => function ($pwd) { return password_hash($pwd, PASSWORD_DEFAULT); },
			'check' => function ($input, $encoded) { return password_verify($input, $encoded); }
		),
		'csharp_bcrypt' => array(
			'encode' => function ($pwd) { return password_hash($pwd, PASSWORD_BCRYPT); },
			'check' => function ($input, $encoded) { return password_verify($input, $encoded); }
		)
	)
);

// End of file access.inc.php