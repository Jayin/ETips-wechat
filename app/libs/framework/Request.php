<?php

namespace libs\framework;

require_once 'Session.php';

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
		$this->session = new Session();
		$this->file = $_FILES;
		$this->request_time = $_SERVER ['REQUEST_TIME'];
		$this->params = $_GET;
        if($_SERVER['REQUEST_METHOD'] !='GET' && $_SERVER['REQUEST_METHOD'] !='POST' ){
            parse_str(file_get_contents('php://input'), $this->data);
        }else{
            $this->data = $_POST;
        }

	}
}

