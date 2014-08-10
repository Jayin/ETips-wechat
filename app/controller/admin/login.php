<?php
require_once '__init__.php';

$app->get ( function ($req, $res) {
	$res->render('admin/login.html');
} );

$app->post ( function ($req, $res) {
	 var_dump($req);
	 $username = $req->data['username'];
	 $password = $req->data['password'];
	 echo $username."<br>";
	 echo $password;
} );

$app->put ( function ($req, $res) {
	echo "put!!!!!!!!!!";
} );

$app->delete ( function ($req, $res) {
	echo "delete!!!!!!!!!!";
} );

$app->work ();
	
