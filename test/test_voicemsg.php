<?php
use utils\HttpRequest;
require_once 'libs/utils/HttpRequest.php';

$req = new HttpRequest();

$url='http://localhost/ETips-wechat/?signature=359432c62b290556eaa67cec6579490218f51f58&timestamp=1407324357&nonce=298696280';
$xml_data ='
<xml>
<ToUserName>273942569</ToUserName>
<FromUserName>383425941</FromUserName>
<CreateTime>1357290913</CreateTime>
<MsgType>voice</MsgType>
<MediaId>456456234</MediaId>
<ThumbMediaId>34536234234</ThumbMediaId>
<MsgId>1234567890123456</MsgId>
</xml>';

$res = $req->post($url, $xml_data);

var_dump($res);