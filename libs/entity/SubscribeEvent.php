<?php
require_once 'Event.php';
/**
 * 订阅/取消订阅事件
 * @author jayin
 *
 */
class SubScribeEvent extends Event{
	
	public function  __construct($xml_string){
		parent::__construct($xml_string);
	}
	
	/**
	 * 是否已订阅
	 * @return boolean
	 */
	public function isSubscribe(){
		return $this->Event == 'subscribe';
	}
}