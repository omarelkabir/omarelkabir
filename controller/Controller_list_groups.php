<?php
include_once("model/Model_group.php");

class Controller_list_group {
	public $model;
	public function __construct() {
        $this->model = new Model_group();
    }

	public function invoke(){
		if (!isset($_REQUEST['delete']))
		{
			$groups=$this->model->list_group();
			include 'view/form_list_group.php';
		}
		else
		{
			$this->model->delete_group(trim($_REQUEST['groupname']));
			$groups=$this->model->list_group();
			include 'view/form_list_group.php';
		}
	}
}
?>
 
