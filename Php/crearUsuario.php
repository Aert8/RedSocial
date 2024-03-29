<?php
include("conexion.php"); //Llama el archivo de conexion

//Se asigna los datos guardados del formulario a las variables
$nomUsu		=$_POST["usuario"];
$contraseña =$_POST["psw"];
$nombre     =$_POST["nom"];
$apellidos  =$_POST["apellidos"];
$correo		=$_POST["mail"];
$edad		=$_POST["edad"];
$sexo		=$_POST["sexo"];
$descripcion=$_POST["desc"];
$fotoP="img/$nomUsu/perfil.jpg";


// $password=password_hash($contraseña, PASSWORD_BCRYPT); // BCRYPT algoritmo de encriptacion

// Consultar si el usuario ya existe
$consulta = "SELECT nomUsuario FROM `usuario` WHERE nomUsuario = '$nomUsu'";

$consultaUsu=mysqli_query($conexion, $consulta); //Devuelve objeto con el resultado

$consultaArray=mysqli_fetch_array($consultaUsu);//Devuelve un arreglo

if(!$consultaArray){ //Revisa la consulta, si esta vacio crea el usuario
	
	$sql="INSERT INTO usuario VALUES ('$nomUsu', '$contraseña','$nombre','$apellidos','$edad', '$fotoP', '$correo','$descripcion')";
	
	if(mysqli_query($conexion, $sql)){ // Guaradar datos y verifica que se ejecute correctamente
		mkdir("../img/$nomUsu");//Se crea carpeta para las imagenes del usuario
		copy("../img/default.jpg", "../img/$nomUsu/perfil.jpg");//Se crea una copia de la imagen de perfil
		echo "Tu cuenta a sido creada";
		echo "<p> <a href='../index.html'>Iniciar Sesion </a>";
	}
	else{
		echo"Error: " .$sql. "<br>" . mysqli_error($conexion);		
	}
}	
else{
		echo"El usuario ya existe ";
		echo"<p> <a href='../index.html'>Intentetalo de nuevo </a>";
	}

//Cerrar conexion
mysqli_close($conexion);

?>