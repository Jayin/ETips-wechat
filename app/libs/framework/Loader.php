<?php

namespace libs\framework;

class Loader {
	private $app;
	function __construct($app) {
		$this->app = $app;
	}
	
	public function model($model){
		$filename = $this->app->config['model_folder'].$model.'.php';
		if(file_exists($filename)){
			include_once ($filename);
			return new $model($this->app);
		}else{
			trigger_error('Error: Could not load model ' . $filename . '!');
			exit();
		}
	}
}

?>