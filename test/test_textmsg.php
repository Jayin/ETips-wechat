<?php
use utils\HttpRequest;
require_once 'libs/utils/HttpRequest.php';

$req = new HttpRequest();

$url='http://localhost/ETips-wechat/?signature=359432c62b290556eaa67cec6579490218f51f58&timestamp=1407324357&nonce=298696280';
$xml_data = '
<xml>
<ToUserName>234234134</ToUserName>
<FromUserName>2342345</FromUserName>
<CreateTime>1348831860</CreateTime>
<MsgType>text</MsgType>
<Content>Hi,I am Jayin</Content>
<MsgId>1234567890123456</MsgId>
</xml>';

$res = $req->post($url, $xml_data);

var_dump($res);