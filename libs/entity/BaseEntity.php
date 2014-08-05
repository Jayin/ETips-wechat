<?php
class BaseEntity{
	public function getInt($mixed){
		return (int)$mixed;
		 
	}
	
	public function getString($mixed){
		return (string)$mixed;
	}
}