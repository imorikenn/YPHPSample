<?php
class Data{
	private $name = "";
	private $age = "";
	private $hobby = "";
	
	function __construct(){}
	
	function setName($name){
		$this->name = $name;
	}
	function setAge($age){
		$this->age = $name;
	}
	function setHobby($hobby){
		$this->hobby = $hobby;
	}
	function getName(){
		return $this->name;
	}
	function getAge(){
		return $this->age;
	}
	function getHobby(){
		return $this->hobby;
	}
}
	