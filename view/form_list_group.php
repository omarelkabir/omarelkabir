<html>
<head></head>

<body>
	<h1>Listar Grupos</h1>

<?php
	echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
?>
<table>
	<tr><td>Grupos</td></tr>
</table>
	<?php
		foreach ($groups as $nom_group => $group){
			if (!empty($group->groupname)){
			echo '<input type="radio" name="groupname" value="'.$group->groupname.'">'.$group->groupname.'&nbsp;&nbsp;&nbsp;&nbsp;'.'<br>';
			}
		}

	?>

	<?php
	echo "<p><input type='submit' value='Menú principal ' name='principal'></p>
			<p><input type='submit' value='Delete group' name='delete'></p>
	</form>";
	?>

</body>
</html>
