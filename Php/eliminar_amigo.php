
<?php
include("conexion.php"); 
include("validarSesion.php"); 


$usuarioA=$_GET["usuario"];

$consulta = "DELETE FROM amistad  WHERE usuario1='$nomUsu' AND usuario2='$usuarioA'";

if (mysqli_query($conexion, $consulta)){ 
	
	 $consulta = "DELETE FROM amistad WHERE usuario2='$nomUsu' AND usuario1='$usuarioA'";
	
	if (mysqli_query($conexion, $consulta)){
		echo "ya no son amigos";
		header('Location: ../buscar.php'); 
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