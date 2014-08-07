<?php
require_once 'Receive.php';

class VideoMsg extends Receive{
	/** 
	 * 视频消息媒体id，可以调用多媒体文件下载接口拉取数据。
	 */
	public $MediaId;
	/**
	 * 视频消息缩略图的媒体id，可以调用多媒体文件下载接口拉取数据。
	 */
	public $ThumbMediaId;
	public function __construct($xml_string) {
		parent::__construct ( $xml_string );
		$obj = simplexml_load_string ( $xml_string );
		$this->MediaId = self::getString ( $obj->MediaId );
		$this->ThumbMediaId = self::getString ( $obj->ThumbMediaId );
	}
    
	
}