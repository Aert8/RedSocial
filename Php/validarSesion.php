<?php
//VALIDAR SESION
/* Este archivo va a bloquear que entren directmente a la pagina de perfil, amigos y fotos. 
 * Primero tienen que iniciar sesion.
*/
include("conexion.php"); //Llama el archivo de conexion
session_start(); //inicia una nueva sesion o reanuda la existente
$login=$_SESSION['login'];

if(!$login){
	header('Location:index.html'); 
}
else{
	$nomUsu=$_SESSION['nomUsu'];	
}
?>