<?php
require_once 'Event.php';

class SubScribeEvent extends Event{
	
	public function  __construct($xml_string){
		$obj = simplexml_load_string($xml_string);
		$this->ToUserName = self::getInt($obj->ToUserName);
		$this->FromUserName = self::getInt($obj->FromUserName);
		$this->CreateTime = self::getInt($obj->CreateTime);
		$this->MsgType = self::getString($obj->MsgType);
		$this->Event = self::getString($obj->Event);
	}
	/**
	 * 是否已订阅
	 * @return boolean
	 */
	public function isSubscribe(){
		return $this->Event == 'subscribe';
	}
}