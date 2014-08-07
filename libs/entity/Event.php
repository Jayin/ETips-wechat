<?php
require_once 'BaseEntity.php';

class Event extends BaseEntity {
	/**
	 * 开发者微信号
	 */
	public $ToUserName;
	/**
	 * 发送方帐号（一个OpenID）
	 */
	public $FromUserName;
	/**
	 * 消息创建时间 （整型）
	 */
	public $CreateTime;
	/**
	 * 消息类型，event
	 */
	public $MsgType;
	/**
	 * 事件类型
	 */
	public $Event;
	
	public function __construct($xml_string) {
		$obj = simplexml_load_string($xml_string);
		$this->ToUserName = self::getString($obj->ToUserName);
		$this->FromUserName = self::getString($obj->FromUserName);
		$this->CreateTime = self::getInt($obj->CreateTime);
		$this->MsgType = self::getString($obj->MsgType);
		$this->Event = self::getString($obj->Event);
	}
}
