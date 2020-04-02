<?php
include_once("model/Model_group.php");

class controller_create_group {
	public $model;
	public function __construct()
    {
        $this->model = new model_group();
    }
 
	public function invoke()
	{
		if (!isset($_REQUEST['create']))
		{
			// web por defecto
			include 'view/form_create_group.php';
		}
		else
		{
			print_r($_REQUEST);
			$this->model->create_group($_REQUEST['groupname']);
			include 'view/form_create_group.php';
		}
	}
}
?>
