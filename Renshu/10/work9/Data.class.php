<?php 
class Data{
	private $name = "";
	private $age = "";
	private $hobby = "";
	private $prefecture = "";
	private $movie = "";
	private $music = array();
	private $comment = "";
	
	public function __construct(){
		if(isset($_POST["name"])){
			$name = $_POST["name"];
		}
		if(isset($_POST["age"])){
			$age = $_POST["age"];
		}
		if(isset($_POST["hobby"])){
			$hobby = $_POST["hobby"];
		}
		if(isset($_POST["prefecture"])){
			$prefecture = $_POST["prefecture"];
		}
		if(isset($_POST["movie"])){
			$movie = $_POST["movie"];
		}
		if(isset($_POST["music"])){
			$music = $_POST["music"];
		}
		if(isset($_POST["comment"])){
			$comment = $_POST["comment"];
		} 
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
	function getPrefecture(){
		return $this->prefecture;
	}
	function getMovie(){
		return $this->movie;
	}
	function getMusic(){
		return $this->music;
	}
	function getComment(){
		return $this->comment;
	}
}
?>


