<?php
$servidor="localhost";
$usuario="root";
$contraseña="";
$db="comentarios_db";
   $conn = mysqli_connect("localhost","root","","comentarios_db") or die(mysqli_error($conn));
   mysqli_select_db($conn,$db) or die(mysql_error($conn));

?>