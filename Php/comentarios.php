<?php
include('conexion.php');
include('validarSesion.php');

$comNombre=$_POST['nombre_comentario'];
$comentarios=$_POST['Tcomentarios'];
 
 $sql="INSERT INTO comentarios VALUES('$comNombre', '$comentarios');"
 $consulta=mysqli_query($conexion, $sql);

   if ($consulta) {
      header("location:../fotos.php");
   }
   
?>
