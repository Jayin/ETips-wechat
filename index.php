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
		$wechat->text ( "亲，我收到发的图片了,么么哒" )->reply ();
		break;
	case Wechat::MSGTYPE_LINK :
		$wechat->text ( "亲，我收到发的链接了,么么哒" )->reply ();
		break;
	case Wechat::MSGTYPE_LOCATION :
		$wechat->text ( "亲，我收到发的地理位置信息了,么么哒" )->reply ();
		break;
	case Wechat::MSGTYPE_VOICE :
		$wechat->text ( "亲，我收到发的语音了,么么哒" )->reply ();
		break;
	case Wechat::MSGTYPE_VIDEO :
		$wechat->text ( "亲，我收到发的视频了,么么哒" )->reply ();
		break;
	default :
		$wechat->text ( "亲，我无法识别你发了什么东西....(逃" )->reply ();
		break;
}






