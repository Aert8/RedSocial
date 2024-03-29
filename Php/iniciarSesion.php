<?php
include("conexion.php"); //Llama el archivo de conexion
session_start(); //inicia una nueva sesion o reanuda la existente
$_SESSION['login']= false; //Variable Global que se usa en todos los archivos

//Se asigna los datos guardados del formulario a las variables
$nomUsu		=$_POST["usuario"];
$contraseña =$_POST["psw"];

//Evalua el usuario ingresado
$consulta = "SELECT * FROM `usuario` WHERE nomUsuario = '$nomUsu'";
$consulta=mysqli_query($conexion, $consulta);
$consulta=mysqli_fetch_array($consulta);

if($consulta){ //Revisa la consulta, si esta vacio el usuario no existe
	if($contraseña == $consulta['contraseña']) { //Validar la contraseña del formulario con la de la BD sean iguales
		$_SESSION['login']	 = true;
		$_SESSION['nomUsu']  = $consulta['nomUsuario'];
		$_SESSION['nombre']	 = $consulta['nombre'];
		$_SESSION['apellidos'] = $consulta['apellidos'];
		$_SESSION['edad'] 	 = $consulta['edad'];
		$_SESSION['fotoP'] 	 = $consulta['fotoperfil'];
		$_SESSION['correo']  = $consulta['correo'];
		$_SESSION['sexo'] 	 = $consulta['sexo'];
		$_SESSION['descripcion'] = $consulta['descripcion'];
		
		header('Location: ../perfil.php'); //Redirecciona a la pagina de perfil
	}
	else{
		echo "Contraseña Incorrecta ";
		echo "<p> <a href='../index.html'>Intentealo de nuevo </a>";
	}
}
else{ 
	echo "<p>El usuario no existe";
	echo "<p> <a href='../index.html'>Intentealo de nuevo</a>";
}

//Cerrar conexion
mysqli_close($conexion);

?>