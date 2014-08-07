<?php
use utils\HttpRequest;
require_once 'libs/utils/HttpRequest.php';

$req = new HttpRequest();

$url='http://localhost/ETips-wechat/?signature=359432c62b290556eaa67cec6579490218f51f58&timestamp=1407324357&nonce=298696280';
$xml_data ='
<xml>
<ToUserName>273942569</ToUserName>
<FromUserName>383425941</FromUserName>
<CreateTime>1351776360</CreateTime>
<MsgType>link</MsgType>
<Title>http://www.etips.sinaapp.com</Title>
<Description>Etips官方微信</Description>
<Url>http://www.etips.sinaapp.com</Url>
<MsgId>1234567890123456</MsgId>
</xml> ';

$res = $req->post($url, $xml_data);

var_dump($res);