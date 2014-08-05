<?php

class Receive {
 	/**
 	 * 接收方微信号
 	 */
	public $ToUserName;
	/**
	 *发送方微信号，若为普通用户，则是一个OpenID
	 */
	public $FromUserName;
	/**
	 *消息创建时间
	 */
	public $CreateTime;
	/**
	 *消息类型
	 */
	public $MsgType ;
	/**
	 *消息id，64位整型
	 */
	public $MsgId;
	 

	public function __construct(){
	 
	}
}

 