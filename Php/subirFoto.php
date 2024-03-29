<?php
	include("conexion.php");
	include("validarSesion.php");

	//Extrae el valor del último Id de la tabla fotos
	$consulta="SELECT id_fotos FROM fotos ORDER BY id_fotos DESC LIMIT 1";
	$consulta = mysqli_query($conexion, $consulta);
	$consultaArray=mysqli_fetch_array($consulta);

	$idfoto=$consultaArray['id_fotos'];
	++$idfoto; //Aumenta +1 al último valor del Id

	$ubicacion ="img/$nomUsu/$idfoto.jpg";
	$archivo   =$_FILES['archivo']['tmp_name'];

	if(move_uploaded_file($archivo, "../$ubicacion")){
		echo "El archivo se ha subido correctamente";
		$consulta="INSERT INTO fotos VALUES ('$id_fotos', '$nomUsu','$ubicacion')";
		
		if (mysqli_query($conexion, $consulta)){
			echo "Tu imagen se guardo correctamente";
			header('Location:../fotos.php');
		} 
		else{
			echo "<p>Error " . $consulta. "<br>" .mysqli_error($conexion);
			echo "<br><a href='../fotos.php'> Volver </a>";
		}
	}
	
	else{
		echo "<p>Ha ocurrido un error, intente nuevamente";
			echo "<br><a href='../fotos.php'> Volver </a>";
		}
?>