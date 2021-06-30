<?php
class product{
	private $name = "名前";
	private $price = "金額";

	public function setName($n){
		$this->name = $n;
	}
	public function setPrice($p){
		$this->price = $p;
	}
	public function getName(){
		return $this -> name;
	}
	public function getPrice(){
		return $this -> price;
	}
}
?>



