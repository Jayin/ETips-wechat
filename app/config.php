<?php
$dev = true;
$config = array(
	//public config
);

if ($dev) {
	//dev 
	ini_set("display_errors",'on');
	error_reporting(E_ALL);
	
	$config['USERNAME'] = 'root';
	$config['PSW'] = 'root';
	$config['PORT'] = '3306';
	$config['DBNAME'] = 'etips_wechat';
	return $config;
} else {
	//product
	$config['USERNAME'] = SAE_MYSQL_USER;
	$config['PSW'] = SAE_MYSQL_PASS;
	$config['PORT'] = SAE_MYSQL_PORT;
	$config['DBNAME'] = SAE_MYSQL_DB;
	return $config;
}