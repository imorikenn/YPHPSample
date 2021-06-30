
<?php

class Category
{
	private $key ;
	private $name ;
	private $allowed_category = array("sp"=>"スマートフォン","keitai"=>"携帯電話","wifi"=>"ポケットwifi","kids"=>"キッズ携帯","kantan"=>"簡単携帯");
	public function setCategoryKey($key){
		$keys = array_keys($this->allowed_category);
		if(in_array($key,$keys)){
			$this->key = $key;
			$this->name = $this->allowed_category[$key];
		}
	}
	public function getCategoryKey(){
	return $this->key;
	}
	public function getCategoryName(){
	return $this->name;
	}	
}
?>