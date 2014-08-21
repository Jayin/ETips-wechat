<?php
require_once 'index.php';

$req = new \utils\HttpRequest();

$url = 'http://localhost/ETips-wechat/app/controller/admin/manage.php';
$post_data = array(
    "title" => "t1",
    "description" => "des1",
    "picurl" => "picurl",
    "url" => "url",
    "article_type" => "common",
);

$r = $req->post($url,$post_data);

var_dump($r);



