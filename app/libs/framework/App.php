<?php

namespace libs\framework;

use libs\framework\Response;
use libs\framework\Request;

require_once 'Request.php';
require_once 'Response.php';
require_once 'Loader.php';
require_once 'DB.php';

class App {
	public $request_method;
	// handler
	private $GET_handler;
	private $POST_handler;
	private $PUT_handler;
	private $DELETE_handler;
	private $Pre_handler;
	private $Finish_hander;
	// req and res
	private $request;
	private $response;
	//db
	public $db;
	//loader
	public $loader;
	// config
	public $config;
	public function __construct($config) {
		if(!$config){
			die('you should Application config');
		}
	
		$this->request_method = $_SERVER ['REQUEST_METHOD'];
		$this->config = $config;
		$this->db = new  DB($config);
		 
		$this->request = new Request();
		$this->response = new Response($config);
		
		$this->loader = new Loader($this);
	}
	public function work() {
		if($this->Pre_handler){
			$pre_handler = $this->Pre_handler;
			$pre_handler($this);
		}
		$handler = null;
		switch ($this->request_method) {
			case 'GET' :
				if ($this->GET_handler) {
					$handler = $this->GET_handler;
				}
				break;
			case 'POST' :
				if ($this->POST_handler) {
					$handler = $this->POST_handler;
				}
				break;
			case 'PUT' :
				if ($this->PUT_handler) {
					$handler = $this->PUT_handler;
				}
				break;
			case 'DELETE' :
				if ($this->DELETE_handler) {
					$handler = $this->DELETE_handler;
				}
				break;
			default :
				break;
		}
		if ($handler){
			$handler ($this, $this->request, $this->response );
		}
		if($this->Finish_hander){
			$finish_handler = $this->Finish_hander;
			$finish_handler($this);
			 
		}
			
	}
	public function get($get_handler = null) {
		$this->GET_handler = $get_handler;
	}
	public function post($post_handler = null) {
		$this->POST_handler = $post_handler;
	}
	public function put($put_handler = null) {
		$this->PUT_handler = $put_handler;
	}
	public function delete($delete_handler = null) {
		$this->DELETE_handler = $delete_handler;
	}
	
	public function onPre($pre_handler = null) {
		$this->Pre_handler = $pre_handler;
	}
	public function onFinish($Finish_hander = null) {
		$this->Finish_hander = $Finish_hander;
	}
}
