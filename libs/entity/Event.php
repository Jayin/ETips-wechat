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
	public function __construct() {
	}
}
