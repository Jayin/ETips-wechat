<?php


require_once '__init__.php';

$app->onPre(function ($app){
	 $app->model('Admin');
});

$app->get ( function ($app,$req, $res) {
	$res->render('admin/login.html');
} );

$app->post ( function ($app,$req, $res) {
 
	 $username = $req->data['username'];
	 $password = $req->data['password'];
 
	 $a = $app->model_admin->login($username,$password);
	 if($a){
	 	$res->redirct('common/home');
	 }else{
	 	$data['error'] = "Password is incorrect!";
	 	$res->render('admin/login.html',$data);
	 }
} );

$app->put ( function ($app,$req, $res) {
	echo "put!!!!!!!!!!";
} );

$app->delete ( function ($app,$req, $res) {
	echo "delete!!!!!!!!!!";
} );
$app->onFinish(function ($app){
	 
});

$app->work ();
	
