<?php

// Users data
$imSettings['access']['users'] = array(
	'example@example.com' => array(
		'id' => 'iy0m5t62',
		'groups' => array('iy0m5t62'),
		'firstname' => 'Admin',
		'lastname' => '',
		'password' => '$2a$11$GVi7F1L9T80EZjiXzczQNuD97BfN/0wJFu4Y.DW0QQJS9QPf.A0RW',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => 'index.php'
	),
	'' => array(
		'id' => 't11zb4mr',
		'groups' => array('t11zb4mr'),
		'firstname' => 'NuovoUtente',
		'lastname' => '',
		'password' => '$2a$11$KKShBVHEOgUh8atfPujgQe5olNYORvX32G1PJAIQ5Ip9ABUekpRIW',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => 'index.php'
	)
);

// Admins list
$imSettings['access']['admins'] = array('iy0m5t62');

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