<?php
use utils\HttpRequest;
require_once 'libs/utils/HttpRequest.php';

//post
// $req = new HttpRequest();
// $res = $req->post('http://localhost/ETips-wechat/app/test/framework/AppTest', null);
// var_dump($res);

echo "------------<br>";
//get
$req = new HttpRequest();
$res = $req->get('http://localhost/ETips-wechat/app/test/framework/AppTest',null);
var_dump($res);

