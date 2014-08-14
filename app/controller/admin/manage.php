<?php
require_once '../common/__init__.php';

//
$app->get ( function ($app, $req, $res) {
	$res->render('admin/manage.html');
	
} );

$app->post ( function ($app, $req, $res) {
} );

$app->work();
	

