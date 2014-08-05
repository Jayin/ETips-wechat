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
    
	
}