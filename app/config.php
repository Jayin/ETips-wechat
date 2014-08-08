<?php
$dev = true;

if ($dev) {
	return array (
			'USERNAME' => 'root',
			'PSW' => 'root',
			'PORT' => '3306',
			'DBNAME' => 'etips_wechat' 
	);
} else {
	return array (
			'USERNAME' => SAE_MYSQL_USER,
			'PSW' => SAE_MYSQL_PASS,
			'PORT' => SAE_MYSQL_PORT,
			'DBNAME' => SAE_MYSQL_DB 
	);
}