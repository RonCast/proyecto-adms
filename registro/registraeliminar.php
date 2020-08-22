<?php
    
	$id = $_POST['id'];
	include("conexionbd.php");
	$conex = Conectar();
	if (!mysqli_select_db($conex, "producto8099")) 
	{ 
		printf("ERROR: %s", mysqli_error($conex)); 
		die("No es posible conectar con la base de datos..."); 
	}
	else
	{
		$sql = "DELETE FROM producto WHERE IdProducto = '$id';";
		$resultado = mysqli_query($conex, $sql);	
		if ($resultado) 
		{
			echo "<br><center>«Registro Eliminado».<br><br>";
		}
		else {
			echo "<br><center>«Error» al eliminar registro.<br><br>";
			printf("ERROR: %s", mysqli_error($conex)); 
		}
		mysqli_close($conex);
		echo "<center><A HREF=\"edicion.php\">Retornar</A></center>";
	}
?>
