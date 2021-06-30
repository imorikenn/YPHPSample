<?php
class ErrorMessage{
	private $message = [
		"id" => "必須項目です",
		"password" => "必須項目です",
		"password2" => "数値を入力してください",
		"auth"  => "IDとパスワードが間違ってます",
	];

	function getErrorMessage($id){
		if($message["id"]){
			return true;
		}
		return false;
	}
	function getErrorMessage($password){
		if($message["password"]){
			return true;
		}
		return false;
	}
	function getErrorMessage($auth){
		if($message["auth"]){
			return true;
		}
		return false;
	}

}
?>
