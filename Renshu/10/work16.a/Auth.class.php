<?php
class Auth{
	private $id = "yamada";
	private $password = "1111";
	
	function __construct(){}
	
	function authenticate($id,$password){
		$result = $this->getAuthInfo();
		if($result["id"]  === $id && $result["password"] === $password){
			return true;
		}
		return false;
	}
	function getAuthInfo(){
		return array("id" => $this->id,"password" => $this->password);
	}
}








