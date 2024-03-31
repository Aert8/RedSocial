<?php
	include("conexion.php");
	include("validarSesion.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>comentarios</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilos.css"/>
</head>
<body>
    <form action="php/comentarios.php" method="POST">
    	<input type="text" name="comNombre" ><br>
    	<input type="text" name="comentario" placeholder="ingrese su comentario"><br>
    	<input type="submit" name="publicar" value="publicar">
    </form>
</body>
</html>