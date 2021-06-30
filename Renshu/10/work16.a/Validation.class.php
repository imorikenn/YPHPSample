<?php
class Validation{
	$id;
	$password;

	function setId($id){
		$this->id = $id;
	}
	function setPassword($password){
		$this->password = $password;
	}
	function geterrorId(){
		if(empty($this->id)){
			return true;
		}
		return false;
	}
	function geterrorPassword(){
		if(empty($this->password){
			return true;
		}
		return false;
	}
	function geterrorPassword2(){
		if(!is_numeric($this->password)){
			return true;
		}
		return false;
	}
}
?>
