<?php 
include("head.php");
	include("conexionbd.php");
	$con = Conectar();
	if (!mysqli_select_db($con, "producto8099")) 
	{ 
		printf("ERROR: %s", mysqli_error($con)); 
		die("No es posible conectar con la base de datos..."); 
	}
	else
	{
		$sql = "SELECT IdProducto,Producto,PrecioUnitario,StockMinimo,IdEstadoProducto FROM producto;";
		$resultado = mysqli_query($con, $sql);
		echo "<div align=\"center\"><h2>Listado de Productos</h2>";
		echo '<TABLE class="table">';
	    echo "<TR>";
		    echo "<TD>Id.</TD>";
		    echo "<TD>Nombres</TD>";
		    echo "<TD>Password</TD>";
			echo "<TD>estado</TD>";
			echo "<TD>estado</TD>";
	    echo "</TR>";
		//while ($registro = mysqli_fetch_array($resultado, MYSQL_ASSOC))  // Debian 8x
        while ($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) 			
		{
		    echo "<TR>";
		    echo "<td>";
		        echo $registro['IdProducto'];
		    echo "</td>";
		    echo "<td>";
		    	echo $registro["Producto"];
		    echo "</td>";
		    echo "<td>";
		    	echo $registro["PrecioUnitario"];
		    echo "</td>";
		    echo "<td>";
		    	echo $registro["StockMinimo"];
			echo "</td>";
			echo "<td>";
		    	echo $registro["IdEstadoProducto"];
		    echo "</td>";
		    echo "</TR>";
		}
		echo "</TABLE>";
		echo "<A HREF=\"index.php\">Volver</A>";
		echo "</div>";
	}
	
	include("foot.php");
?>
