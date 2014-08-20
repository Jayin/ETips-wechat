<?php
require_once '../common/__init__.php';

$app->onPre(function ($app,$req,$res){
    if(!$req->session->data['userid']){
        $res->redirct('admin/login');
    }
    $app->model('Admin');
    $app->model('Article');
});

//
$app->get ( function ($app, $req, $res) {
    //valid the user..
    $_Admin = new Admin($app);
    $_Article = new Article($app);

    $data = array();
    $data['articles'] = $_Article->getArticle(1);
	$res->render('admin/manage.html',$data);
} );

$app->post ( function ($app, $req, $res) {
} );

$app->work();
	

