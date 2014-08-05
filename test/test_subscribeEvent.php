<?php
require_once 'libs/entity/SubscribeEvent.php';

$xml_string = '<xml>
<ToUserName>5516</ToUserName>
<FromUserName>4645</FromUserName>
<CreateTime>12345678911124</CreateTime>
<MsgType>event</MsgType>
<Event>subscribe</Event>
</xml>';

$event = new SubScribeEvent($xml_string);

var_dump($event);

if($event->isSubscribe()){
	echo "欢迎订阅";
}else{
	echo "你取消订阅";
}

