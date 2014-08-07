<?php
require_once 'Receive.php';

class VoiceMsg extends Receive{
	/**
	 * 语音消息媒体id，可以调用多媒体文件下载接口拉取数据。
	 */
	public $MediaId;
	/**
	 * 语音格式，如amr，speex等
	 */
	public $Format;
	
	public function __construct($xml_string) {
		parent::__construct ( $xml_string );
		$obj = simplexml_load_string ( $xml_string );
		$this->MediaId = self::getString ( $obj->MediaId );
		$this->Format = self::getString ( $obj->Format );
	}
}