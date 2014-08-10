<?php
/**
Application Config
 */
$dev = true;
$config = array (
		'view_folder' => __DIR__ . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . template . DIRECTORY_SEPARATOR,
		'controller_folder' => __DIR__ . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR 
);
// display errors
ini_set ( "display_errors", 'on' );
error_reporting ( E_ALL );

if ($dev) {
	// dev
	// DB config
	$config ['USERNAME'] = 'root';
	$config ['PSW'] = 'root';
	$config ['PORT'] = '3306';
	$config ['DBNAME'] = 'etips_wechat';
	$config ['App_Server'] = 'http://localhost/ETips-wechat/app/';
	
	return $config;
} else {
	// product
	// DB config
	$config ['USERNAME'] = SAE_MYSQL_USER;
	$config ['PSW'] = SAE_MYSQL_PASS;
	$config ['PORT'] = SAE_MYSQL_PORT;
	$config ['DBNAME'] = SAE_MYSQL_DB;
	$config ['App_Server'] = 'http://etips.sinaapp.com/app/';
	return $config;
}
