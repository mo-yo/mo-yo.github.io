<?php

// Users data
$imSettings['access']['users'] = array(
	'example@example.com' => array(
		'id' => '3owymnb6',
		'groups' => array('umng1uhr'),
		'firstname' => 'Admin',
		'lastname' => '',
		'password' => '$2a$11$MdT3wtAuA/lHmRB6JCE4Peg0KChFYcm5k9sXgHgSs8Fb92gDizanq',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => false
	)
);

// Admins list
$imSettings['access']['admins'] = array('3owymnb6');

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