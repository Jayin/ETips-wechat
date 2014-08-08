<?php

namespace libs;

class App {
	public $request_method;
	public $post_handler;
	public $get_handler;
	public $put_handler;
	public $delete_handler;
	
	public function __construct() {
		$this->request_method = $_SERVER['REQUEST_METHOD'];
	}
	
	public function work(){
// 		call_user_func_array($this->request_method.'_handler');
	}
	
	public function post($post_handler= null){
		
	}
	
	public function get($get_handler=null){
		
	}
	
	public function put($put_handler=null){
		
	}
	
	public function delete($delete_handler=null){
		
	}
}

?>