<?php

class Product
{
	private $name = "名前";
	private $price = "金額";

	public function __construct($a,$b){
		$this->name = $a;
		$this->price = $b;  
}
	public function setName($x){
		$this ->name = $x;
	}public function setPrice($y){
		$this ->price = $y;
	}
	public function getName(){return $this -> name;}
	public function getPrice(){return $this -> price;}

}


?>