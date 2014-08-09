<?php

ini_set("display_errors",'on');
error_reporting(E_ALL);
 
require_once '__init__.php';

$app->get ( function ($req, $res) {
	echo "get !!!";
	
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


