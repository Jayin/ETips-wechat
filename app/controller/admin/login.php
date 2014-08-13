<?php


require_once '__init__.php';

$app->onPre(function ($app){
	echo "pre work";
});

$app->get ( function ($app,$req, $res) {
	$res->render('admin/login.html');
} );

$app->post ( function ($app,$req, $res) {
 
	 $username = $req->data['username'];
	 $password = $req->data['password'];
 
	 $model_admin = $app->loader->model('Admin');
	 $a = $model_admin->login($username,$password);
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
$app->onFinish(function ($app){
	echo "finish...";
});

$app->work ();
	
