<?php

namespace libs\framework;

class Request {
	public $cookie;
	public $session;
	public $files;
	public $request_time;
	/**
	 * query string
	 */
	public $params;
	/**
	 * post的KV数据
	 */
	public $data;
	public function __construct() {
		$this->cookie = $_COOKIE;
		if (isset($_SESSION))
			$this->session = $_SESSION;
		$this->file = $_FILES;
		$this->request_time = $_SERVER ['REQUEST_TIME'];
		$this->params = $_GET;
		$this->data = $_POST;
	}
}

