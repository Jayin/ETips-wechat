<?php
use entity\Article;
require_once 'libs/entity/Article.php';

$Articles = array (
		new Article ( "title1", "Description1", "PicUrl1", "Url1" ),
// 		new Article ( "title2", "Description2", "PicUrl2", "Url2" ),
// 		new Article ( "title3", "Description3", "PicUrl3", "Url3" ),
// 		new Article ( "title4", "Description4", "PicUrl4", "Url4" ),
// 		new Article ( "title5", "Description5", "PicUrl5", "Url5" ),
// 		new Article ( "title6",NewFile.html "Description6", "PicUrl6", "Url6" ),
// 		new Article ( "title7", "Description7", "PicUrl7", "Url7" ),
// 		new Article ( "title8", "Description8", "PicUrl8", "Url8" ),
// 		new Article ( "title9", "Description9", "PicUrl9", "Url9" ),
// 		new Article ( "title10", "Description10", "PicUrl10", "Url10" ),
		new Article ( "title11", "Description11", "PicUrl11", "Url11" ) 
);



// require './libs/configure.php';
require 'libs/Wechat.php';
// 加载设置文件
$wechatConfig = require 'configure.php';

$wechat = new Wechat ( $wechatConfig );


$wechat->news($Articles)->reply();
