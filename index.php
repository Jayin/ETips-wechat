<?php

// require './libs/configure.php';
require 'libs/Wechat.php';
// 加载设置文件
$wechatConfig = require 'configure.php';

$wechat = new Wechat ( $wechatConfig );

$wechat->valid ();

$wechat->RecevieMsg ();

// 业务逻辑处理 ->reply
switch ($wechat->getMsgType ()) {
	case Wechat::MSGTYPE_TEXT :
		$wechat->text ( "ETips正在努力开发中，敬请期待！" )->reply ();
		break;
	case Wechat::MSGTYPE_IMAGE :
		
		break;
	case Wechat::MSGTYPE_LINK :
		break;
	case Wechat::MSGTYPE_LOCATION :
		break;
	case Wechat::MSGTYPE_VOICE :
		break;
	case Wechat::MSGTYPE_VIDEO :
		break;
	default :
		$wechat->text ( "亲，我无法识别你发了什么东西....(逃" )->reply ();
		break;
}





