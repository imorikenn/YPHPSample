<?php 
require "Category.class.php";
class Product
{
	protected $name;
	protected $price;
	protected $category;
	
	public function __construct($name_1,$price_1){
		$this->name = $name_1;
		$this->price = $price_1;
	}
	public function getName(){return $this -> name;}
	public function getPrice(){return $this -> price;}
	
	public function setCategory($category_key){
	$category = new Category();
	$category->setCategoryKey($category_key);
	$this->category = $category;
	}
	
	public function getCategoryKey(){
	return $this->category->getCategoryKey();
	}

	public function getCategoryName(){
	return $this->category->getCategoryName();
	}
}
?>