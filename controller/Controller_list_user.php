<?php
include_once("model/Model_user.php");

class controller_list_user {
	public $model;

	public function __construct()
    {
        $this->model = new Model_user();
    }

	public function invoke()
	{
		if (!isset($_REQUEST['delete']))
		{
			// web por defecto
			$users=$this->model->list_user();
			#$users=$this->model->list_user_powershell();
			#$users2=$this->model->list_user_mysql();
			include 'view/form_list_user.php';
		}
		else
		{
			$this->model->delete_user(trim($_REQUEST['username']));
			$users=$this->model->list_user();
			include 'view/form_list_user.php';
		}
	}
}
?>
 
