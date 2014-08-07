<?php
require_once 'Receive.php';

class LinkMsg extends Receive{
	/**
	 * 消息标题
	 */
	public $Title;
	/**
	 * 消息描述
	 */
	public $Description;
	/**
	 * 消息链接
	 */
	public $Url;
	
	public function __construct($xml_string){
		parent::__construct ( $xml_string );
		$obj = simplexml_load_string ( $xml_string );
		$this->Title = self::getString ( $obj->Title );
		$this->Description = self::getString ( $obj->Description );
		$this->Url = self::getString ( $obj->Url );
	}
}