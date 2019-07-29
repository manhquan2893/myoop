<?php 
class LayoutLoader{
	protected $layout='default';
	function set($layout){
		$this->layout=$layout;
	}
	function load($data=[]){
		extract($data);
		$layoutPath= BASE_PATH . '/layouts/'.$this->layout.'.php';
		if(!file_exists($layoutPath)){
			exit('File not found!');
		}
		require $layoutPath;
	}
}

 ?>