<?php
include("validarSesion.php");

$ubicacion ="../img/" .$nomUsu . "/perfil.jpg"; 
$archivo   =$_FILES['archivo']['tmp_name'];

if(move_uploaded_file($archivo, $ubicacion)){ 
	echo "El archivo se ha subido correctamente";
	header('Location:../fotos.php');
}
else{
	echo "<p>Ha ocurrido un error, intente nuevamente ";
	echo "<br><a href='../fotos.php'> Volver </a>";
}


?>