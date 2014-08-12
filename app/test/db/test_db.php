<?php
require_once '../../libs/framework/DB.php';
$config = require_once '../../config.php';
$db = new DB ( $config );
//insert 
function insert($db) {
	$sqls = array (
			"INSERT INTO admin (name,psw,lv) VALUES('root11','dc76e9f0c0006e8f919e0c515c66dbba3982f785',10)",
			"INSERT INTO admin (name,psw,lv) VALUES('root12','dc76e9f0c0006e8f919e0c515c66dbba3982f785',10)",
			"INSERT INTO admin (name,psw,lv) VALUES('root13','dc76e9f0c0006e8f919e0c515c66dbba3982f785',10)",
			"INSERT INTO admin (name,psw,lv) VALUES('root14','dc76e9f0c0006e8f919e0c515c66dbba3982f785',10)",
			"INSERT INTO admin (name,psw,lv) VALUES('root15','dc76e9f0c0006e8f919e0c515c66dbba3982f785',10)"
			
	);
	
	foreach ($sqls as $sql){
		print_r($db->query($sql));
	}	
}

insert($db);

$res = $db->query('select * from admin');

if($res){
	print_r($res);	
}
