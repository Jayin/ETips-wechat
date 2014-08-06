<?php

// require './libs/configure.php';
require 'libs/wechat.php';
//加载设置文件
$wechatConfig = require 'configure.php';

$wechat = new Wechat($wechatConfig);

$wechat->valid();

$wechat->getRev();

$wechat->reply();



