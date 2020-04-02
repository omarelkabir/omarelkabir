<?php
 
include_once("model/User.php");

class Model_user {
	public function create_user($username, $groupname, $folder, $passw, $department)
	{
		$usuario=new User($username, $groupname, $folder, $passw, $department);
		echo "Before passtrhu";
		print_r($usuario);
		passthru('sudo ./add_user.sh '.$usuario->username.' '.$usuario->groupname.' '.$usuario->folder.' '.$usuario->passw.' '.$usuario->department , $retorno);
		echo "retorno de passthru add_user: ".$retorno;
		return $retorno;
	}
	public function list_user()
	{
		passthru("./list_users.sh");
		$file = new SplFileObject("users.txt");
		while (!$file->eof()) {
			$u=$file->fgets();
			$u1=explode("@", $u);
			$passw='';
			$resultat_list[$u1[0]] = new User($u1[0], $u1[1], $u1[2], $passw, " ");
		}
		//echo "Array generat a Model_user -> list_user()";
		//print_r($resultat_list);
		$file=null;
		return $resultat_list;
	}



	public function delete_user($username)
	{
		$usuario=new user($username, '', '', '');
		passthru("sudo ./deluser.sh ".$usuario->username, $retorno);
		echo "retorno de passthru: ".$retorno;
	}
}

?>
