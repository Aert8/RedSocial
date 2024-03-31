<?php
	include("Php/conexion.php");
	include("Php/validarSesion.php");
?>
<!DOCTYPE html>
<html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilo.css"/>
	<link rel="icon" type="image/jpg" href="Img/<?= "$_SESSION[nomUsu]"?>/perfil.jpg" sizes="32x32">
    <title><?= "$_SESSION[nomUsu]"?> - Amigos</title> 
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
	
	
	<section id="perfil2">
		<img src=  "<?php echo "$_SESSION[fotoP]"; ?>"  >
		<h1> <?php echo "$_SESSION[nombre] $_SESSION[apellidos]"?> </h1>
		<p>  <?php echo "$_SESSION[descripcion]"?>
	</section>

	<hr class="barra" color="#3f888f" width="100%">
	
	<section id="titulo">
		<h2> Amigos</h2>
	</section>
	
	<section id="amigos">  
		<?php
				$consulta="SELECT * FROM `usuario` 
									WHERE nomUsuario in (SELECT usuario2 FROM `amistad`
																		WHERE usuario1='$nomUsu')";
				$datos =mysqli_query($conexion, $consulta);
				while ($fila=mysqli_fetch_array($datos)){
				
			?>
		<div id="box"> 
			<a href=" <?php echo "perfilAmigo.php?usuario=".$fila['nomUsuario'] ?>" >
				<img src= "<?php echo $fila['fotoperfil']; ?>" height="100">
			<h2> <?php echo $fila['nomUsuario'] ?>  </h2>
				</a>
			<p id="parrafo"> <?php echo $fila['nombre']." " .$fila['apellidos'] ?>
			<p id="parrafo"> <?php echo $fila['descripcion'] ?><br>
			<button><a href=" <?php echo "php/eliminar_amigo.php?usuario=".$fila['nomUsuario'] ?>">Eliminar</a></button>

		</div>
		
			<?php
				}
			?>
	</section>
	
</body>
</html>