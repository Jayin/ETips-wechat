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
}