<?php
class Logic{
	public $data;
	public $request;
	public $session;
	public $view;
	
	function __construct(){}
	
	function execute($action){
		$this->session->start;
		$this->getSessionParameters();
		
		switch($action){
			case "form":
				break;
			case "confirm":
				$this->getPostParameters();
				$this->getDataParameters();
				break;
			case "finish":
				$this->session->close();
				break;
			default:
				break;
		
			$this->view->setBaseTemplate("work14=base -template.php");
			$this->view->render($this->data);
		}
		function getSessionParameters(){
			$vars = array_keys(get_object_vars($this->data));
			foreach($vars as $var){
				$this->data->$vars = $this->session->getParameter($var);
			}
		}
		function getPostParameters(){
			$vars = array_keys(get_object_vars($this->data));
			foreach($vars as $var){
				$this->data->$vars = $this->request->getParameter($var);
			}
		}
		function setDataToSession(){
			$vars = array_keys(get_object_vars($this->data));
			foreach($vars as $var){
				$this->session->setParameter($var,$this->data->$var);
			}
		}
		
		function setData($data){
			$this->data = $data;
		}
		function setData($request){
			$this->data = $data;
		}
		function setData($session){
			$this->data = $data;
		}
		function setData($view){
			$this->data = $view;
		}
	}
}
?>

