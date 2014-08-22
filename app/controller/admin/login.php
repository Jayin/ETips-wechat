<?php


require_once 'index.php';

$app->onPre(function ($app){
	 $app->model('Admin');
});

$app->get ( function ($app,$req, $res) {
	$res->render('admin/login.html');
} );

$app->post ( function ($app,$req, $res) {
 
	 $username = $req->data['username'];
	 $password = $req->data['password'];

     $admin = new Admin($app);
	 $a =$admin->login($username,$password);
	 if($a){
	 	// $req->session->clean();
	 	$req->session->data['userid'] = $a->id;;
	 	$res->redirct('admin/manage');
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
	
