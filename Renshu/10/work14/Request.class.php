<?php
class Request {
	private $spot;
	
	function __construct(){
		if(!empty($POST)){
				$this->post = $_POST;
			}else{
				$this->post = array();
			}
		}
	}
	function getParameter($key){
		if(isset($this->post[$key])){
			return $_SESSION[$key];
		}
	}
	








