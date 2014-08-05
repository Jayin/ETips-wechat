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
	public function getRev();
	/**
	 * 任务调度
	 */
	public function dispatch();
	/**
	 * 回复
	 */
	public function reply();
}
