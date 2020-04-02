<html>
<head>
<title>Crear Usuario</title>
</head>
<body>
<?php
    echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
?>
<form action="form_create_user.php" method= "POST">
	<p>Introduce el usuario:</p>
	<p>Nombre: <input type="text" name="username"></p>
	<p>Grupo: <input type="text" name="groupname"></p>
	<p>Carpeta: <input type="text" name="folder"></p>
	<p>Contraseña: <input type="password" name="passw"></p>
	<p>Departamento: <input type="text" name="department"></p>
	</br>
    <p><input type='submit' value='Registrarse' name='create'></p>
    <p><input type='submit' value='Menú principal ' name='principal'></p>
</form>
</body>
</html>
