<?php
include("conexion.php"); 
include("validarSesion.php"); 

$fotoA= $_GET["id_fotos"];

$consulta = "DELETE FROM fotos WHERE id_fotos='$fotoA'";

if (mysqli_query($conexion, $consulta)){ 

$consulta = "DELETE FROM fotos WHERE  id_fotos='$fotoA'";

	if (mysqli_query($conexion, $consulta)){
		echo "foto eliminada";
		header('Location: ../fotos.php');
	}
	else{
		echo "Error ";
		echo "<p> <a href='fotos.php'>Volver </a>";
	}
}
else{ 
	echo "Error ";
	echo "<p> <a href='fotos.php'>Volver </a>";
}
?>