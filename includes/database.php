<?php

	// define database parameters as an array
	$db = array('db_host'=>'localhost',
							'db_user'=>'root',
							'db_pass'=>'',
							'db_name'=>'cms');
	
	// loop thru the array to make them into constants
	foreach($db as $key=>$value) {
		define(strtoupper($key), $value);
	}

	// connect to database
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	
	// define other constants
	define('SITENAME', 'The Blogue', false);
	define('SITESUBTITLE', '&nbsp;&nbsp;&nbsp;Shooting Craps in Sin City', false);
	define('POSTSPERPAGE', 10);
	define('AUTHOR', 'Martin Mirzoyan', false);
	define('TIMEOUT', 120);
	define('HASHCOST', 12);
	define('TZ', 'America/Los_Angeles');

?>
