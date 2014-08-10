<?php
use utils\HttpRequest;
require_once 'HttpRequest.php';

/**
 * 小黄鸡
 * @author jayin
 *
 */
class Chater{
	private $msg;
	const DEFAULT_REPLY = "好吧，是我笨！我听不懂你说啥。。(逃";
	public function  __construct(){
		$msg = DEFAULT_REPLY;
	}
	public function send($word){
		$req = new HttpRequest();
		$xml_data = "para=".$word;
		$this->msg =$req->post('http://www.xiaohuangji.com/ajax.php', $xml_data);
	}
	
	public function getMsg(){
		if($this->msg){
			return $this->msg;
		}else{
			return Chater::DEFAULT_REPLY;
		}
	}
}