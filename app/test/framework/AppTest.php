<?php


require_once '__init__.php';

$app->get ( function ($req, $res) {
// 	var_dump($req);
// 	$res->send("LOL!");
// 	$res->redirct("common/home");
	$data['username']  = "Jayin";
	$res->render('common/home.html',$data);
	
} );
$app->post ( function ($req, $res) {
	echo "post !!";
} );

$app->put ( function ($req, $res) {
	echo "put !!";
} );

$app->delete ( function ($req, $res) {
	echo "delete !!";
} );

$app->work ();


