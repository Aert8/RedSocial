<?php
$servidor="localhost";
$usuario="root";
$contrasena="";
$BD="red-social";

//Crea Conexion
$conexion = mysqli_connect($servidor,$usuario,$contrasena,$BD);

//Valida conexion
if(!$conexion){
	echo "Error en la conexion <br>";
	die("Conexion fallida: " . mysqli_connect_error());
}
// else{
	// echo "Conexion exitosa";
// }
?>