<?php
#include_once("model/Model.php");
session_start();

class Controller {
	public $model;
	public function __construct()
    {
 
//        $this->model = new Model();

    }

	public function invoke()
	{
		if (isset($_REQUEST['principal'])) {
			unset($_SESSION['option']);
		}

		if (isset($_REQUEST['option'])) {
			$_SESSION['option']=$_REQUEST['option'];
		}

		if (!isset($_SESSION['option']))
		{
			// web por defecto
			include 'view/main_page.php';
		}

		else
		{
			switch($_SESSION['option']) {
			case 'create_user':
				include 'controller/Controller_create_user.php';
				$controller = new controller_create_user();
				$controller->invoke();
			break;

			case 'list_user':
				include 'controller/Controller_list_user.php';
				$controller = new controller_list_user();
				$controller->invoke();
			break;

			case 'create_group':
				include 'controller/Controller_create_group.php';
				$controller = new controller_create_group();
				$controller->invoke();
			break;

			case 'list_groups':
				include 'controller/Controller_list_groups.php';
				$controller = new Controller_list_group();
				$controller->invoke();
			break;
			break;
			}
		}
	}
}

?>
