<?php
include_once("model/Model_user.php");

class controller_create_user {
    public $model;
    public function __construct()
	{
    	$this->model = new model_user();
	}

    public function invoke()
    {
   	 if (!isset($_REQUEST['create']))
   	 {
   		 // web por defecto
   		 include 'view/form_create_user.php';
   	 }
   	 else
   	 {
   		 print_r($_REQUEST);
   		 $this->model->create_user($_REQUEST['username'],$_REQUEST['passw'],$_REQUEST['groupname'],$_REQUEST['folder'],$_REQUEST['department']);
   		 include 'view/form_create_user.php';
   	 }
    }
}
?>

 
