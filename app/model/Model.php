<?php


class Model {
	public $db;
	public function __construct($app = null) {
		if($app){
			$this->db = $app->db;
		}
	}
}

?>