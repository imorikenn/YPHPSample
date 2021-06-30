<?php
	class View{
		public $content;
		
		function __(){}
		
		function setBaseTemplate($filename){
			$this->base_template_filename = $filename;
		}
		
		function brender($data){
			ob_start();
			ob_implicit_flush(0);
			require_once($this->base_template_filename);
			$content = ob_get_clean();
			$this->content = $content;
		}
		function show(){
			echo $this->content;
		}
	}
?>



