<?php
use utils\HttpRequest;
require_once 'libs/utils/HttpRequest.php';

//订阅
$req = new HttpRequest();

$url='http://localhost/ETips-wechat/?signature=359432c62b290556eaa67cec6579490218f51f58&timestamp=1407324357&nonce=298696280';
$xml_data ='
<xml>
<ToUserName>273942569</ToUserName>
<FromUserName>383425941</FromUserName>
<CreateTime>123456789</CreateTime>
<MsgType>event</MsgType>
<Event>subscribe</Event>
</xml>';


$res = $req->post($url, $xml_data);

var_dump($res);


//取消订阅
$req = new HttpRequest();
$url='http://localhost/ETips-wechat/?signature=359432c62b290556eaa67cec6579490218f51f58&timestamp=1407324357&nonce=298696280';
$xml_data ='
<xml>
<ToUserName>273942569</ToUserName>
<FromUserName>383425941</FromUserName>
<CreateTime>123456789</CreateTime>
<MsgType>event</MsgType>
<Event>unsubscribe</Event>
</xml>';


$res = $req->post($url, $xml_data);

var_dump($res);