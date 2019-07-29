<?php
	define('BASE_PATH',__DIR__);
	define('BASE_URL','oop.local');
	require_once BASE_PATH.'/models/BaseModel.php';



	$config = require_once BASE_PATH . '/config/config.php';
	$module = empty($_GET['module']) ? $config['default_module'] : $_GET['module'];
	$action = empty($_GET['action']) ? $config['default_action'] : $_GET['action'];

	echo "<link rel='stylesheet' href=' ". '/asset/css/home.css'."'".'>' ;

	require_once BASE_PATH . '/controllers/CoreController.php';
	require_once BASE_PATH . '/controllers/BaseController.php';
	$controller=ucfirst($module).'Controller';
	$controllerPath=BASE_PATH . '/controllers/'.ucfirst($module).'Controller.php';
	if(!file_exists($controllerPath)){
		exit('File not found');
	}
	require_once $controllerPath;

	


	if(!class_exists($controller)){
		exit('class not found'.$controller);
	}
	$object= new $controller;
	if (!method_exists($object, $action)) {
		exit("method not found $action");
	}
	$object->$action();

?>
