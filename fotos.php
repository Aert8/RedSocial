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
    <title><?= "$_SESSION[nomUsu]"?> - Fotos</title> 
</head>

<body>
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v15.0" nonce="m13k5BfZ"></script>
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
		<h1> <?php echo "$_SESSION[nombre] $_SESSION[apellidos]"?> </h1><p>
		
		<form action="Php/cambiarFoto.php" method="POST" enctype="multipart/form-data" >
			<p>Cambiar foto de perfil <input name ="archivo" type="file">
			<p><input name ="subir" type="submit" value="Cambiar"class="button">
		</form>
	</section>

	<hr class="barra" color="#3f888f" width="100%">
	
	<section id="titulo">
		<h2> Fotos</h2>
	</section>
		
	<section>  

		<form action="Php/subirFoto.php" method="POST" enctype="multipart/form-data" >
			<p>Añadir Fotos <input name ="archivo" type="file">
			<p><input name ="subir" type="submit" value="Subir" class="button">
		</form>
		<div class="fotos-grid">
		<?php
				$consulta="SELECT * FROM `fotos` 
									WHERE usuario ='$nomUsu'";
				$datos =mysqli_query($conexion, $consulta);
				while ($fila=mysqli_fetch_array($datos)){
				
		?>
		<div class="box_grida"> 
			<img src= "<?php echo $fila['nom_foto']; ?>" height="200" width="250" style="margin: 4px; width: auto;"><p>
			<button><a href="php/eliminar_foto.php?id_fotos=<?php echo $fila['id_fotos'] ?>" >Eliminar</a></button><br>
					
			</div>
			
		
		<?php
				}
		?>
		</div>
	</section>
	



	<u>Fotos de <?= "$_SESSION[nombre] $_SESSION[apellidos]"?></u>
</body>
</html>