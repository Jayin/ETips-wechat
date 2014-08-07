<?php

// require './libs/configure.php';
require 'libs/Wechat.php';
//加载设置文件
$wechatConfig = require 'configure.php';

$wechat = new Wechat($wechatConfig);

$wechat->valid();

$wechat->RecevieMsg();

//业务逻辑处理 ->reply

$wechat->text("ETips正在努力开发中，敬请期待！")->reply();



