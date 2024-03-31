<?php 
    include("conexion.php");
    include("validarSesion.php");
    



	$sql="SELECT * FROM usuario WHERE nomUsuario='$nomUsu'";
	$consulta=mysqli_query($conexion,$sql);
	$fila=mysqli_fetch_array($consulta);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/estilos.css"/>
        <title>Actualizar</title>
       
    </head>
    <body>
		<div class=box>
			<form action="actualizar_db.php" method="POST">
			
				<input type="hidden" name="nomUsu" value="<?php echo $fila['nomUsuario']  ?>">
			<div class="box">
				<label>Nombre:</label>	
				<input type="text" name= "nombre" placeholder="Nuevo Nombre" value="<?php echo $fila['nombre']  ?>">
			</div>

			<div class="box">
				<label>apellido:</label>	
				<input type="text" name= "apellidos" placeholder="apellido" value="<?php echo $fila['apellidos']  ?>">
			</div>

			<div class="box">
				<label>Edad:</label>	
				<input type="number" name= "edad" placeholder="edad actual" value="<?php echo $fila['edad']  ?>"><br>
			</div>

			<div class="box">
				<label>Descripción:</label><br>	
				<input type="text" name= "descripcion" placeholder="actualiza tu descripcion" value="<?php echo $fila['descripcion']  ?>">
			</div>	
				<div class="box">
				<label>Contraseña:</label>	
				<input type="password" name= "contraseña" placeholder="nueva contraseña" value="<?php echo $fila['contraseña']  ?>">
			</div>

            <div class="box">
				<label>correo:</label>	
				<input type="text" name= "correo" placeholder="Nuevo correo" value="<?php echo $fila['correo']  ?>">
			</div>

			<div id="box_button">
				<input type="submit" class="button" value="Actualizar"><br>
				<a href="../perfil.php" class="button">Volver</a>
			</div>
			</form>
			
		</div>
    </body>
</html>