<?php
include("conexion.php"); //Llama el archivo de conexion
include("validarSesion.php"); 

//Se asigna los datos guardados del formulario a las variables
$usuarioA	=$_GET["usuario"];

$consulta = "INSERT INTO amistad (usuario1, usuario2) VALUES ('$nomUsu', '$usuarioA')";

if (mysqli_query($conexion, $consulta)){ 
	//Agrega al nuevo amigo en ambos amigos
	 $consulta = "INSERT INTO amistad (usuario1, usuario2) VALUES ('$usuarioA','$nomUsu')";
	
	if (mysqli_query($conexion, $consulta)){
		echo "Ahora tienes un nuevo amigo";
		header('Location: ../buscar.php'); //Redirecciona a la pagina de buscar
	}
	else{
		echo "Error ";
		echo "<p> <a href='buscar.html'>Volver </a>";
	}
}
else{ 
	echo "Error ";
	echo "<p> <a href='buscar.html'>Volver </a>";
}
?>