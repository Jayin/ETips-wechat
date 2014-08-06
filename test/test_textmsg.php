<?php
require_once 'libs/entity/TextMsg.php';

$xml_string = '
<xml><ToUserName>234234134</ToUserName><FromUserName>2342345</FromUserName><CreateTime>1348831860</CreateTime><MsgType>text</MsgType><Content>Hi,I am Jayin</Content><MsgId>1234567890123456</MsgId></xml>';

$msg = new TextMsg($xml_string);

var_dump($msg);