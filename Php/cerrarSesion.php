<?php
//CERRAR SESION
include("conexion.php"); //Llama el archivo de conexion
session_start(); //inicia una nueva sesion o reanuda la existente

$_SESSION=array();//Destruye las variables de la sesion

//Destruye la sesion
session_destroy();
header('Location:../index.html'); 
?>