<?php
require_once '__init__.php';

$app->get ( function ($app, $req, $res) {
	
	echo "Home Page";
} );

$app->post ( function ($app, $req, $res) {
} );

$app->work();