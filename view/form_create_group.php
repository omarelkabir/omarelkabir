<html>
<head>
<title> Crear Grupo </title>
</head>
<body>
<?php
    echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
?>
<form action="form_create_group.php" method= "POST">
	<p>Registrar grupo:</p>
	<p>Nombre: <input type="text" name="groupname"></p>
	</br>
    <p><input type='submit' value='Registrarse' name='create'></p>
    <p><input type='submit' value='Menú principal ' name='principal'></p>
 
</form>
</body>
</html>
