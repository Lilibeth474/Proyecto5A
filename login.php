<?php
session_unset();
?>
<html>
<head>
<title> Please Log In </title>
</head>
<body>
<form method="post" action="movie1.php">
<p> Ingrese su usuario:
<input type="text" name="user"/>
</p>
<p> Ingrese su contraseña :
<input type="password" name="pass"/>
</p>
<p>
<input type="submit" name="submit" value="Ingrese"/>
</p>
</form>
</body>
</html>