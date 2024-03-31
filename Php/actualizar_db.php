<?php

include("conexion.php");
include("validarSesion.php"); 

$edad =$_POST['edad'];
$nombre =$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$contraseña =$_POST['contraseña'];
$correo=$_POST['correo'];
$descripcion=$_POST['descripcion'];


$sql="SELECT * FROM usuario WHERE nomUsuario='$nomUsu'";

$sql = "UPDATE usuario SET contraseña='$contraseña', nombre='$nombre', apellidos='$apellidos', edad='$edad', 
correo='$correo', descripcion='$descripcion' WHERE nomUsuario='$nomUsu'";

	$consulta=mysqli_query($conexion,$sql);

    if($consulta){
        Header("Location:../perfil.php");
    }

?>