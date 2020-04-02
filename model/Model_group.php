<?php
include_once("model/Group.php");
 
class Model_group {
	public function create_group($groupname)
	{
		$grupo=new Group($groupname);
		echo "Before passtrhu";
		print_r($grupo);
		passthru('sudo ./add_group.sh '.$grupo->groupname ,$retorno);
		echo "retorno de passthru add_group: ".$retorno;
		return $retorno;
	}
	public function list_group()
	{
		passthru("./list_groups.sh");
		$file = new SplFileObject("groups.txt");
		// Loop until we reach the end of the file.
		while (!$file->eof()) {
			// Echo one line from the file.
			$g=$file->fgets();
			$resultat_list[$g] = new group($g);
		}
		//echo "Array generat a Model_group -> list_group()";
		//print_r($resultat_list);
		$file=null;
		return $resultat_list;
	}

	public function delete_group($groupname) {
		$grupo=new group($groupname);
		passthru("sudo ./delgroup.sh ".$grupo->groupname, $retorno);
		echo "retorno de passthru: ".$retorno;

	}
}

?>
