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
}