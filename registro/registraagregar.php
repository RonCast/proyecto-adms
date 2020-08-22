<?php
include("head.php");
include("conexionbd.php");
$con = Conectar();

		$id = NULL;
		$producto = $_POST['producto'];
		$preciounit = $_POST['preciounitario'];
		$stock = $_POST['stock_minino'];
		$estado =  $_POST['estado'];
	
	
	echo "<div align=\"center\">";
	
	echo "Id Producto => ". $id."<br/>";
	echo "Producto => ". $producto."<br/>";
	
	$sql = "SELECT IdProducto FROM producto WHERE IdProducto = '$id'";
		if ($resultado = mysqli_query($con, $sql)) 
		{
		    $cantidad_registro = mysqli_num_rows($resultado);
		    if ($cantidad_registro > 0)
		    {
		    	printf("Registro con Id [ %d ] existe en [producto].<br><br>", $id);
		    	mysqli_free_result($resultado);
		    }
		    else
		    {
					$sql = "INSERT INTO producto VALUES(null,'$producto','$preciounit','$stock','$estado')";
					$resultado = mysqli_query($con, $sql);	
					if ($resultado) 
					{
						echo "«Registrado correctamente».<br><br>";
					}
					else {
						echo "«Error» al Registrar.<br><br>";
						printf("ERROR: %s", mysqli_error($con)); 
					}
		    }
		}
		mysqli_close($con);
		echo "<A HREF=\"edicion.php\">Volver</A>";
	
	echo "</div>";
	

	/* include("conexionbd.php");
	$conex = Conectar();
	if (!mysqli_select_db($conex, "producto8099")) 
	{ 
		printf("ERROR: %s", mysqli_error($conex)); 
		die("No es posible conectar con la base de datos..."); 
	}
	else
	{
		$sql = "SELECT IdProducto FROM producto WHERE IdProducto = '$id';";
		if ($resultado = mysqli_query($conex, $sql)) 
		{
		    $cantidad_registro = mysqli_num_rows($resultado);
		    if ($cantidad_registro > 0)
		    {
		    	printf("Registro con Id [ %d ] existe en [producto].<br><br>", $id);
		    	mysqli_free_result($resultado);
		    }
		    else
		    {
					$sql = "INSERT INTO producto VALUES(null,'$producto','$preciounit','$stock','$estado')";
					$resultado = mysqli_query($conex, $sql);	
					if ($resultado) 
					{
						echo "«Registrado correctamente».<br><br>";
					}
					else {
						echo "«Error» al Registrar.<br><br>";
						printf("ERROR: %s", mysqli_error($conex)); 
					}
		    }
		}
		mysqli_close($conex);
		echo "<A HREF=\"edicion.php\">Volver</A>";
	}
	echo "</div>";
	*/
?>
