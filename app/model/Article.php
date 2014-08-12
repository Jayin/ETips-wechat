<?php


class Article {
	/** 文章唯一id*/
	public $Id;
	/**图文消息标题 */
	public $Title;
	/** 图文消息描述*/
	public $Description;
	/**图片链接，支持JPG、PNG格式，较好的效果为大图360*200，小图200*200 */
	public $PicUrl;
	/** 点击图文消息跳转链接*/
	public $Url;
	/** 文章类型*/
	public $article_type;
	
	function __construct() {
		//TODO __construct
	}
}

 