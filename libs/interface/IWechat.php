<?php
/**
 * interface for Wechat
 * @author jayin
 *
 */
interface Iwechat{
	/**
	 *  验证
	 */
	public function valid($return = false);
	/**
	 * 生成接受对象
	 */
	public function RecevieMsg();
	/**
	 * 回复
	 */
	public function reply();
	
	/**
	 * 回复文本消息
	 * @param $Content 回复的消息内容（换行：在content中能够换行，微信客户端就支持换行显示） 
	 */
	public function text($Content);
	
	/**
	 * 回复图片消息
	 * @param $MediaId 通过上传多媒体文件，得到的id
	 */
	public function image($MediaId);
	
	/**
	 * 回复语音消息
	 * @param  $MediaId 通过上传多媒体文件，得到的id
	 */
	public function voice($MediaId);
	
	/**
	 * 回复视频消息
	 * @param $MediaId 通过上传多媒体文件，得到的id 
	 * @param [optional] $Title  视频消息的标题
	 * @param [optional] $Description  	视频消息的描述 
	 */
	public function video($MediaId,$Title,$Description);
	
	/**
	 * 回复音乐消息
	 * @param [optional] $Title 音乐标题 
	 * @param [optional] $Description  	音乐描述 
	 * @param [optional] $MusicURL 音乐链接 
	 * @param [optional] $HQMusicUrl 高质量音乐链接，WIFI环境优先使用该链接播放音乐 
	 * @param $ThumbMediaId 缩略图的媒体id，通过上传多媒体文件，得到的id 
	 */
	public function music($Title,$Description,$MusicURL,$HQMusicUrl,$ThumbMediaId);
	/**
	 * 回复图文消息
	 * 
	 * @param  $ArticleCount  图文消息个数，限制为10条以内 
	 * @param  $Articles  多条图文消息信息，默认第一个item为大图,注意，如果图文数超过10，则将会无响应 
	 * @param  [optional] $Title  	图文消息标题 
	 * @param  [optional] $Description 图文消息描述 
	 * @param  [optional] $PicUrl 图片链接，支持JPG、PNG格式，较好的效果为大图360*200，小图200*200 
	 * @param  [optional] $Url  	点击图文消息跳转链接 
	 */
	public function news($ArticleCount,$Articles,$Title,$Description,$PicUrl,$Url);
	
}








