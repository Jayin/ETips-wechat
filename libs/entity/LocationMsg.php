<?php
require_once 'Receive.php';

class LocationMsg extends Receive{
	/**
	 * 地理位置维度
	 */
	public $Location_X;
	/**
	 * 地理位置经度
	 */
	public $Location_Y;
	/**
	 * 地图缩放大小
	 */
	public $Scale;
	/**
	 * 地理位置信息
	 */
	public $Label;
	
	public function __construct($xml_string) {
		parent::__construct ( $xml_string );
		$obj = simplexml_load_string ( $xml_string );
		$this->Location_X = self::getString ( $obj->Location_X );
		$this->Location_Y = self::getString ( $obj->Location_Y );
		$this->Scale = self::getString ( $obj->Scale );
		$this->Label = self::getString ( $obj->Label );
	}
}