<?php
include("validarSesion.php");

$ubicacion ="../img/" .$nomUsu . "/perfil.jpg"; //Direccion de foto
$archivo   =$_FILES['archivo']['tmp_name']; //Guardar el archivo con su ubicacion temporal

if(move_uploaded_file($archivo, $ubicacion)){ //Cambiar de ubicacion temporal a la carpeta del usuario
	echo "El archivo se ha subido correctamente";
	header('Location:../fotos.php');
}
else{
	echo "<p>Ha ocurrido un error, intente nuevamente ";
	echo "<br><a href='../fotos.php'> Volver </a>";
}


?>