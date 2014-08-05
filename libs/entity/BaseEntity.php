<?php
class BaseEntity{
	  public static function getInt($mixed){
		return (int)$mixed;
		 
	}
	
	public static function getString($mixed){
		return (string)$mixed;
	}
}