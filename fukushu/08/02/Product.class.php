<?php
class product{
	private $name = "名前";
	private $price = "金額";

	public function __construct($name,$price){
		$this->name = $name;
		$this->price = $price;
	}

	public function getName(){
		return $this -> name;
	}
	public function getPrice(){
	return $this -> price;
	}
}



