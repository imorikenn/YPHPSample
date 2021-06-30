<?php 
class Display{
	protected $data=[];
	protected function __construct($data){
		$this->data=$this->data+$data;
	}

	public function show(){
		$this->showHeader();
		$this->showData();
		$this->showFooter();
	}

	protected function showHeader(){}
	protected function showData(){}
	protected function showFooter(){}
}
?>







