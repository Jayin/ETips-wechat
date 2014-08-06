<?php
require 'interface/IWechat.php';
require_once 'libs/entity/Receive.php';
require_once 'libs/entity/TextMsg.php';


class Wechat implements Iwechat {
	private $TOKEN = '';
	private $receive ;
	
	public function __construct($configure) {
		//初始化配置
		if (isset ( $configure )) {
			$this->TOKEN = $configure ['TOKEN'];
		} else {
			die ( "请添加配置信息" );
		}
		
	}
	
	/**
	 * 验证请求签名操作
	 * 
	 * @return boolean
	 */
	private function checkSignature() {
		$signature = $_GET ["signature"];
		$timestamp = $_GET ["timestamp"];
		$nonce = $_GET ["nonce"];
		
		$token = $this->TOKEN;
		$tmpArr = array (
				$token,
				$timestamp,
				$nonce 
		);
		sort ( $tmpArr ,SORT_STRING);
		$tmpStr = implode ( $tmpArr );
		$tmpStr = sha1 ( $tmpStr );

		if ($tmpStr == $signature) {
			return true;
		} else {
			return false;
		}
	}
	/**
	 * 验证当前请求是否有效
	 * 
	 * @param bool $return
	 *        	是否返回
	 * @return bool string
	 */
	public function valid($return = false) {
		$echoStr = isset ( $_GET ["echostr"] ) ? $_GET ["echostr"] : '';
		if ($return) {
			if ($echoStr) {
				if ($this->checkSignature ()) {
					return $echoStr;
				} else {
					return false;
				}
			} else
				return $this->checkSignature ();
		} else {
			if ($echoStr) {
				if ($this->checkSignature ()) {
					die ( $echoStr );
				} else {
					die ( 'no access' );
				}
			} else {
				if ($this->checkSignature ()) {
					return true;
				} else {
					die ( 'no access' );
				}
			}
		}
	}
	public function getRev() {
		$xml_string = file_get_contents("php://input"); 
		$type = simplexml_load_string($xml_string)->MsgType;
		switch ($type){
			case  'text':
				$this->receive = new TextMsg($xml_string);
				
				break;
			default:
				//not support
				break;
		}
	}
	public function dispatch() {
		// TODO Auto-generated method stub
	}
	public function reply() {
		$reply_text = '<xml>
<ToUserName>%s</ToUserName>
<FromUserName>%s</FromUserName>
<CreateTime>%d</CreateTime>
<MsgType>%s</MsgType>
<Content>%s</Content>
</xml>';
		$res = sprintf($reply_text,$this->receive->FromUserName,$this->receive->ToUserName,time(),'text','你好，ETips正在努力开发中!敬请期待！');
		echo $res ;
	}
}