<html>
<head>
<title> Pagina principal </title>
</head>
<body>
<?php
    echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
?>
 <input type="radio" name="option" value="create_user">Create new User<br>
 <input type="radio" name="option" value="list_user">See all the users<br>
 <input type="radio" name="option" value="create_group">Create new group<br>
 <input type="radio" name="option" value="list_groups">See all the groups<br><br>
  <input type="submit" name='submit'>
</form>
</body>
</html>
 
