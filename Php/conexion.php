<?php
$servidor="localhost";
$usuario="alekey"; //Base de datos de Dominio de Dan
$contrasena="lobito05??"; //Base de datos del Dominio de Dan
$BD="red-social";

//Crea Conexion
$conexion = mysqli_connect($servidor,$usuario,$contrasena,$BD);

//Valida conexion
if(!$conexion){
	echo "Error en la conexion <br>";
	die("Conexion fallida: " . mysqli_connect_error());
}
else{
	echo "Conexion exitosa";
}
?>