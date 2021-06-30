<?php require_once "Product.class.php";?>
<?php 
class KantanProduct extends  Product
{
	private $carrier ;
	private $maker ;

	public function __construct($name,$price,$carrier,$maker){
		$this->name = $name;
		$this->price = $price; 
		$this->carrier = $carrier;
		$this->maker = $maker;
		$this->setCategory("kantan");
	}	
	public function getCarrier(){return $this -> carrier;}
	public function getMaker(){return $this -> maker;}
}
?>