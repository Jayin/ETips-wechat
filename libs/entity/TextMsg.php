<?php
require_once 'Receive.php';
class TextMsg extends Receive {
	/**
	 * 文本消息内容
	 */
	public $Content;
	
	public function __construct($xml_string) {
		parent::__construct ( $xml_string );
		$obj = simplexml_load_string ( $xml_string );
		$this->Content = self::getString ( $obj->Content );
	}
}

