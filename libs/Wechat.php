<?php
require 'interface/IWechat.php';
require_once 'libs/entity/Receive.php';
require_once 'libs/entity/TextMsg.php';
require_once 'libs/entity/ImageMsg.php';
require_once 'libs/entity/LinkMsg.php';
require_once 'libs/entity/LocationMsg.php';
require_once 'libs/entity/VideoMsg.php';
require_once 'libs/entity/VoiceMsg.php';
require_once 'libs/entity/SubscribeEvent.php';


class Wechat implements Iwechat {
	/* 消息类型 */
	const MSGTYPE_TEXT = 'text';
	const MSGTYPE_IMAGE = 'image';
	const MSGTYPE_LOCATION = 'location';
	const MSGTYPE_LINK = 'link';
	const MSGTYPE_EVENT = 'event';
	const MSGTYPE_MUSIC = 'music';
	const MSGTYPE_NEWS = 'news';
	const MSGTYPE_VOICE = 'voice';
	const MSGTYPE_VIDEO = 'video';
	private $MsgType;
	private $TOKEN = '';
	private $receive;
	private $response;
	public function __construct($configure) {
		// 初始化配置
		if (isset ( $configure )) {
			$this->TOKEN = $configure ['TOKEN'];
		} else {
			die ( "请添加配置信息" );
		}
	}
	
	/**
	 * 验证请求签名操作
	 *
	 * @return boolean
	 */
	private function checkSignature() {
		$signature = $_GET ["signature"];
		$timestamp = $_GET ["timestamp"];
		$nonce = $_GET ["nonce"];
		
		$token = $this->TOKEN;
		$tmpArr = array (
				$token,
				$timestamp,
				$nonce 
		);
		sort ( $tmpArr, SORT_STRING );
		$tmpStr = implode ( $tmpArr );
		$tmpStr = sha1 ( $tmpStr );
		
		if ($tmpStr == $signature) {
			return true;
		} else {
			return false;
		}
	}
	/**
	 * 验证当前请求是否有效
	 *
	 * @param bool $return
	 *        	是否返回
	 * @return bool string
	 */
	public function valid($return = false) {
		$echoStr = isset ( $_GET ["echostr"] ) ? $_GET ["echostr"] : '';
		if ($return) {
			if ($echoStr) {
				if ($this->checkSignature ()) {
					return $echoStr;
				} else {
					return false;
				}
			} else
				return $this->checkSignature ();
		} else {
			if ($echoStr) {
				if ($this->checkSignature ()) {
					die ( $echoStr );
				} else {
					die ( 'no access' );
				}
			} else {
				if ($this->checkSignature ()) {
					return true;
				} else {
					die ( 'no access' );
				}
			}
		}
	}
	/**
	 * 接受微信请求信息
	 *
	 * @see Iwechat::getRev()
	 */
	public function RecevieMsg() {
		$xml_string = file_get_contents ( "php://input" );
		$this->MsgType = simplexml_load_string ( $xml_string )->MsgType;
		switch ($this->MsgType) {
			case Wechat::MSGTYPE_TEXT :
				$this->receive = new TextMsg ( $xml_string );
				break;
			case Wechat::MSGTYPE_IMAGE :
				$this->receive = new ImageMsg ( $xml_string );
				break;
			case Wechat::MSGTYPE_LINK :
				$this->receive = new LinkMsg ( $xml_string );
				break;
			case Wechat::MSGTYPE_LOCATION :
				
				break;
			case Wechat::MSGTYPE_VOICE :
				
				break;
			case Wechat::MSGTYPE_VIDEO :
				
				break;
			default :
				echo "defaut.....";
				break;
		}
	}
	public function reply() {
		echo $this->response;
	}
	public function text($Content) {
		$reply_text = '<xml>
					   <ToUserName>%s</ToUserName>
					   <FromUserName>%s</FromUserName>
					   <CreateTime>%d</CreateTime>
					   <MsgType>%s</MsgType>
					   <Content>%s</Content>
					   </xml>';
		$this->response = sprintf ( $reply_text, $this->receive->FromUserName, $this->receive->ToUserName, time (), 'text', $Content );
		return $this;
	}
	public function image($MediaId) {
		// TODO Auto-generated method stub
	}
	public function voice($MediaId) {
		// TODO Auto-generated method stub
	}
	public function video($MediaId, $Title, $Description) {
		// TODO Auto-generated method stub
	}
	public function music($Title, $Description, $MusicURL, $HQMusicUrl, $ThumbMediaId) {
		// TODO Auto-generated method stub
	}
	public function news($ArticleCount, $Articles, $Title, $Description, $PicUrl, $Url) {
		// TODO Auto-generated method stub
	}
	public function getMsgType() {
		return $this->MsgType;
	}
}