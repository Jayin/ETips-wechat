<?php
require 'interface/IWechat.php';
class Wechat implements Iwechat {
	private $TOKEN = '';
	public function __construct($configure) {
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
		// TODO Auto-generated method stub
	}
	public function dispatch() {
		// TODO Auto-generated method stub
	}
	public function reply() {
		// TODO Auto-generated method stub
	}
}