<?php
class Data{
	public $name = "";
	public $age = "";
	public $hobby = "";
	public $id;
	public $password;
	public $is_authenticated;

	function Data(){}
	
	function setld($id){
		$this->id = $id;
	}
	function setPassword($password){
		$this->password = $password;
	}
	function getld(){
		return $this->id;
	}
	function getPassword(){
		return $this->password;
	}
}
