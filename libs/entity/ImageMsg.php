<?php
require_once 'Receive.php';

class ImageMsg extends Receive{
	/**
	 * 图片链接
	 */
	public $PicUrl;
	/**
	 * 图片消息媒体id，可以调用多媒体文件下载接口拉取数据。
	 */
	public $MediaId;
	
}
