<?php
use utils\HttpRequest;
require_once 'libs/utils/HttpRequest.php';


$req = new  HttpRequest();

// $res = $req->get('http://www.baidu.com');
// var_dump($res);

$url='http://localhost/ETips-wechat/?signature=359432c62b290556eaa67cec6579490218f51f58&timestamp=1407324357&nonce=298696280';
$xml_data = '
 <xml>
 <ToUserName>273942569</ToUserName>
 <FromUserName>383425941</FromUserName>
 <CreateTime>1348831860</CreateTime>
 <MsgType>image</MsgType>
 <PicUrl>http://www.etips.sinaapp.com/bg.jph</PicUrl>
 <MediaId>453452332342</MediaId>
 <MsgId>1234567890123456</MsgId>
 </xml>';

$req = new  HttpRequest();
$res = $req->post($url, $xml_data);

var_dump($res);