<?php 
/**
 * 
 */
class BaseController extends CoreController
{
	protected $layout;
	protected $view;
	function __construct()
	{
		require_once BASE_PATH . '/loader/LayoutLoader.php';
		require_once BASE_PATH . '/loader/ViewLoader.php';
		$this->layout = new LayoutLoader();
		$this->view = new ViewLoader();
	}
}
 ?>