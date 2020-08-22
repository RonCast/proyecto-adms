<?php
    
	$id  = $_POST['id'];
	$producto = $_POST['producto'];
	$preciounit = $_POST['preciounitario'];
	//echo $producto.' registrar editar';exit;
	$stock = $_POST['stock'];
	$estado  = $_POST['estado'];

	include("conexionbd.php");
	$con = Conectar();
	if (!mysqli_select_db($con, "producto8099")) 
	{ 
		printf("ERROR: %s", mysqli_error($con)); 
		die("No es posible conectar con la base de datos..."); 
	}
	else
	{
		$sql = "UPDATE producto SET Producto = '$producto', PrecioUnitario = '$preciounit' , StockMinimo = '$stock' , 
				IdEstadoProducto = '$estado' WHERE IdProducto = '$id'";
		$resultado = mysqli_query($con, $sql);	
		if ($resultado) 
		{
			echo "<br><center>«Registro modificado».<br><br>";
		}
		else {
			echo "<br><center>«Error» al registrar modificacion.<br><br>";
			printf("ERROR: %s", mysqli_error($con)); 
		}
		mysqli_close($con);
		echo "<center><A HREF=\"edicion.php\">Retornar</A></center>";
	}
?>
