<?php 
/**
 * 
 */
class ViewLoader
{
	function load($view)
	{
		$viewPath= BASE_PATH. '/views/' . $view . '.php';
		if(!file_exists($viewPath)){
			exit("File not found $viewPath");
		}
		
		//ob_start();
		require $viewPath;
		//$content= ob_get_contents();
		//ob_end_clean();
		//ob_end_flush();
	}
}

 ?>