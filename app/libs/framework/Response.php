<?php

namespace libs\framework;

class Response {
	private $view_folder;
	private $app_server;
	/**
	 * @param array $config Application config
	 */
	public function __construct($config) {
		$this->view_folder = $config['view_folder'];
		$this->app_server = $config['App_Server'];
	}
	
	public function send($content){
		echo $content;
		exit();
	}
	
	public function render($template,$data=array()){
		$template_file = $this->view_folder .$template;
		if(file_exists($template_file)){
			extract($data);
			
			ob_start();
			require ($template_file);
			
			$content = ob_get_contents();
			ob_end_clean();
		}
		if($content){
			$this->send($content);
		}else{
			$this->send($template_file." is not exist!");
		}		 
	}
	
	public function redirct($url){
		$redirct_url = $this->app_server .'controller/'.$url;
		header(sprintf("location: %s",$redirct_url));
		exit();
	}
}

