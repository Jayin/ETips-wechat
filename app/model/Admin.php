<?php

require_once 'Model.php';

class Admin extends Model{
	/**
	 * 管理员id
	 */
	public $id;
	/**
	 * 管理员姓名
	 */
	public $name;
	/**
	 *管理员等级
	 */
	public $lv;
	/**
	 * 密码
	 */
	public $psw;

	
	public function login($name,$psw){
		$res = $this->db->query(sprintf("select * from admin where name='%s' and psw='%s'",$name,sha1($psw)));
		if($res){
			$a = new Admin();
			$a->name = $res[0]['name'];
			$a->id = $res[0]['id'];
			return $a;
		}
		return null;
	}
 
}

