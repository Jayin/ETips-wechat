<?php


require_once '__init__.php';

$app->get ( function ($app,$req, $res) {
	$res->render('admin/login.html');
} );

$app->post ( function ($app,$req, $res) {
 
	 $username = $req->data['username'];
	 $password = $req->data['password'];
 
	 $mode_admin = $app->loader->model('Admin');
	 $a = $mode_admin->login($username,$password);
	 if($a){
	 	$res->redirct('common/home');
	 }else{
	 	echo 'login faild..';
	 }
} );

$app->put ( function ($app,$req, $res) {
	echo "put!!!!!!!!!!";
} );

$app->delete ( function ($app,$req, $res) {
	echo "delete!!!!!!!!!!";
} );

$app->work ();
	
