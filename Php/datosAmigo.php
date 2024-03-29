<?php

/* Se consulta la informacion del usuario Amigo */

	if($usuario==$usuarioA){
		header('Location: perfil.php');
	}
	
	$consulta = "SELECT * FROM `usuario` WHERE nomUsuario = '$usuarioA'";
	$consulta=mysqli_query($conexion, $consulta);
	$consulta=mysqli_fetch_array($consulta);
	
	$usu = $consulta['nomUsuario'];
	$nombreA 	= $consulta['nombre'];
	$apellidosA = $consulta['apellidos'];
	$edadA 		= $consulta['edad'];
	$fotoPA 	= $consulta['fotoperfil'];
	$descripcionA= $consulta['descripcion'];
	
?>