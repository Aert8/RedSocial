<?php
	include("Php/conexion.php");
	include("Php/validarSesion.php");
?>
<!DOCTYPE html>
<html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="icon" type="image/jpeg" href="Img/logo.jpeg" sizes="32x32">
    <title> Buscar Amigos</title> 
</head>

<body>
	<header>
		
		<nav id="menu">
			<ul>
				<li>
					<section id="perfil">
						<h1> <?php echo "$_SESSION[nombre] $_SESSION[apellidos]"?> </h1>
					</section>
				</li>
				<li>
					<section id="perfil">
						<img src=  "<?php echo "$_SESSION[fotoP]"; ?>"  >
					</section>
				</li>
				<li><a href="perfil.php"> Perfil </a> </li>
				<li><a href="amigos.php"> Amigos </a> </li>
				<li><a href="fotos.php"> Fotos </a> </li>
				<li><a href="buscar.php"> Buscar Amigos </a> </li>
				<li><a href="Php/cerrarSesion.php"> Cerrar Sesion </a> </li>
				<li>
					<div id="logo">
				<img src="Img/logo.jpeg">
				<h1> PlooNet</h1>
					</div>
				</li>
			</ul>
		</nav>

	</header>
	
	<section id="tituloA">
		<h2> Buscar Nuevos Amigos</h2>
	</section>
	
	<section id="amigos">
			<?php
				//Consulta para buscar nuevos amigos, EXCLUYENDO a mis amigos y el usuario actual.
				$consulta="SELECT * FROM `usuario` 
									WHERE nomUsuario != '$nomUsu' and nomUsuario 
											not in (SELECT usuario2 FROM `amistad`
																	WHERE usuario1='$nomUsu')";
				$datos =mysqli_query($conexion, $consulta);
				while ($fila=mysqli_fetch_array($datos)){
				
			?>
		<div id="box"> 
			<a href=" <?php echo "perfilAmigo.php?usuario=".$fila['nomUsuario'] ?>" >
				<img src="<?php echo $fila['fotoperfil'] ?>" height="100">
			
			<h2> <?php echo $fila['nomUsuario'] ?>  </h2>
				</a>
			<p id="parrafo"> <?php echo $fila['nombre']." " .$fila['apellidos'] ?>
			<p id="parrafo"> <?php echo $fila['descripcion'] ?> 
			<p>
			<a href="<?php echo "php/agregarAmigo.php?usuario=".$fila['nomUsuario'] ?>" class="button">  Agregar </a>
		</div>
		
			<?php
				}
			?>
	</section>
</body>
</html>