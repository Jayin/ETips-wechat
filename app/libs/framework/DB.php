<?php
namespace libs\framework;

class DB {
	private $link;
	public function __construct($config) {
		
		$this->link = new \mysqli($config['DB_HOST'], $config['USERNAME'], $config['PSW'],  $config['DBNAME']);
		 
		if ($this->link->connect_error) {
			trigger_error('Error: Could not make a database link (' . $this->link->connect_errno . ') ' . $this->link->connect_error);
		}
		
		$this->link->set_charset("utf8");
		/* set autocommit to off */
		$this->link->autocommit(true);
	}
	
	public function query($sql){
	 
		$query = $this->link->query($sql);
 
		if(!$this->link->errno){
			if($query instanceof \mysqli_result ){
				$result = array();
				while ($row = $query->fetch_assoc()){
					$result[] = $row;
				}
				/* free result set */
				$query->close();
				return $result;
			}else{
				return true;
			}
		}else{
			trigger_error('Error: ' . $this->link->error  . '<br />Error No: ' . $this->link->errno . '<br />' . $sql);
		}
	}
	
	public function getLastId() {
		return $this->link->insert_id;
	}
	
	public function __destruct(){
		$this->link->close();
	}
	
}
