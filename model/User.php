<?php

class User {
	public $username;
	public $passw;
	public $folder;
	public $groupname;
	public $department;
	 
	public function __construct($username, $groupname, $folder, $passw, $department)
    {
		$this->username = $username;
		$this->groupname = $groupname;
		$this->folder = $folder;
		$this->passw = $passw;
		$this->department = $department;
    }
}

?>
