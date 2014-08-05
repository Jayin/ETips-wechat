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
}