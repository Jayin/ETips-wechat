<?php

namespace entity;
/**
 * 文章
 * @author jayin
 *
 */
class Article {
	/**
	 * 图文消息标题
	 */
	public $Title ;
	/**
	 * 图文消息描述
	 */
	public $Description ;
	/**
	 * 图片链接，支持JPG、PNG格式，较好的效果为大图360*200，小图200*200
	 */
	public $PicUrl ;
	/**
	 * 点击图文消息跳转链接
	 */
	public $Url ;
	/**
	 * 虽然文档上是可选的，但是为了统一管理，全部为必填
	 * @param [option] $Title
	 * @param [option] $Description
	 * @param [option] $PicUrl
	 * @param [option] $Url
	 */
	public function __construct($Title,$Description,$PicUrl,$Url) {
		$this->Title = $Title;
		$this->Description = $Description;
		$this->PicUrl = $PicUrl;
		$this->Url = $Url;
	}
	
	public function toXML(){
		$item = '<item>
					<Title>%s</Title>
					<Description>%s</Description>
					<PicUrl>%s</PicUrl>
					<Url>%s</Url>
				</item>';
		return sprintf($item,$this->Title,$this->Description,$this->PicUrl,$this->Url);
	}
}












