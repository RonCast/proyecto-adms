<?php
    include("head.php");
    include("conexionbd.php");
    $con = Conectar();
    //print_r($con);exit;
    /*
    if (!mysqli_connect($con, "producto8099")) 
    { 
        printf("ERROR: %s", mysqli_connect_error($con));       
        die("No es posible conectar con la base de datos..."); 
    }
    else
    {
        $consulta = "SELECT IdProducto,Producto,PrecioUnitario,StockMinimo,IdEstadoProducto FROM producto";
        $resultado = mysqli_query($con, $consulta);

    }
    */
    
    
    echo "<div align=\"center\"><h2>Consulta de Tabla producto</h2>";
    echo '<TABLE class="table">';

    echo "<TR>";
      echo '<TD align="center" colspan="6">';
       echo '<A HREF="agregar.php">«Nuevo»</A>';
      echo "</TD>";
     echo "<TR>";
            echo "<TD>Id. Producto</TD>";
            echo "<TD>Producto</TD>";
            echo "<TD>Precio Unitaro</TD>";
            echo "<TD>Stock Minimo</TD>";
            echo "<TD>Id Estado Prod.</TD>";
        echo "</TR>";
    $consulta = "SELECT IdProducto, Producto, PrecioUnitario, StockMinimo, IdEstadoProducto FROM producto";
    $resultado = mysqli_query($con, $consulta);
    while($registro = mysqli_fetch_array($resultado))
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
        echo "<TD>";
        echo'<a href="editar.php?id_producto='.$registro["IdProducto"].'"  class="btn btn-primary btn-lg btn-block">Editar</a>';
        echo "</TD>";
        echo "<TD>";
        echo'<a href="eliminar.php?id_producto=' . $registro["IdProducto"] .'" class="btn btn-secondary btn-lg btn-block" >Eliminar</a>';
        echo "</TD>";
        echo "</TR>";
    }
    echo "</TABLE>";
    echo "<br>";
    echo "<A HREF=\"index.php\"  >Principal</A>";
    echo "</div>";

    mysqli_close($con);
     include("foot.php");
?>
