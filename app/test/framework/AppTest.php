<?php


require_once '__init__.php';

$app->get ( function ($app,$req, $res) {
// 	var_dump($req);
// 	$res->send("LOL!");
// 	$res->redirct("common/home");
	$data['username']  = "Jayin";
	$res->render('common/home.html',$data);
	
} );
$app->post ( function ($app,$req, $res) {
	echo "post !!";
} );

$app->put ( function ($app,$req, $res) {
	echo "put !!";
} );

$app->delete ( function ($app,$req, $res) {
	echo "delete !!";
} );

$app->work ();


