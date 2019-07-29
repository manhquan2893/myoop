<?php 
$controllerPath= dirname(__FILE__).'/controller/';
if(isset($_REQUEST['action']))
{
	$action = $_REQUEST['action'];
	switch ($action) {
		case 'Student':
			include_once($controllerPath.$action.'Controller.php');
			break;
		default:
			break;
	}
}

?>