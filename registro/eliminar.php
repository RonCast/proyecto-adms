<?php
  include("head.php");
  include("conexionbd.php");
  $con = Conectar();


  $id = $_GET['id_producto'];

  echo $id;
  $sql = "SELECT IdProducto, Producto, PrecioUnitario, StockMinimo, IdEstadoProducto FROM producto WHERE IdProducto = '$id' ";
  if ($resultado = mysqli_query($con, $sql)) 
  {
    echo "<div align=\"center\"><h2>Eliminar Registro</h2>";
    echo '<form method="POST" action="registraeliminar.php" >';
    echo "<TABLE border=1 align=\"center\">";

    while ($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) 
    {
      echo "<TR>";
        echo "<TD>";
          echo "Id.: ";
        echo "</TD>";
        echo "<TD>";
          echo '<input type="name" name="id" value="' . $registro["IdProducto"] . '" readonly="true"/>';
        echo "</TD>";
      echo "</TR>";
      echo "<TR>";
        echo "<TD>";
          echo "Nombres: ";
        echo "</TD>";
        echo "<TD>";
          echo '<input type="name" name="producto" value="' . $registro["Producto"] . '" readonly="true"/>';
        echo "</TD>";
      echo "</TR>";          
      echo "<TR>";
        echo "<TD>";
          echo "Password: ";
        echo "</TD>";
        echo "<TD>";
          echo '<input type="name" name="preciounitario" value="' . $registro["PrecioUnitario"] . '" readonly="true"/>';
        echo "</TD>";
      echo "</TR>";
      echo "<TR>";
        echo "<TD>";
          echo "Estado: ";
        echo "</TD>";
        echo "<TD>";
          echo '<input type="name" name="stock" value="' . $registro["StockMinimo"] . '" readonly="true"/>';
        echo "</TD>";
      echo "</TR>";
      echo "<TR>";
      echo "<TD>";
        echo "Estado: ";
      echo "</TD>";
      echo "<TD>";
        echo '<input type="name" name="estado" value="' . $registro["IdEstadoProducto"] . '" readonly="true"/>';
      echo "</TD>";
    echo "</TR>";
      echo "<TR>";
        echo '<TD align="center" colspan="2">';
          echo '¿Esta seguro de ELIMINAR este registro?';
        echo "</TD>";
      echo "</TR>";
      echo "<TR>";
        echo '<TD align="center" colspan="2">';
          echo '<input type="submit" name="submit" value="Eliminar" /> ';
          echo '<A HREF="edicion.php">Cancelar</A>';            
        echo "</TD>";
      echo "</TR>";
    }
  }


      /*

        if (!mysqli_select_db($con, "producto8099")) 
        {  
          printf("ERROR: %s", mysqli_error($con)); 
          die("No es posible conectar con la base de datos..."); 
        }
        else
        {
          $sql = "SELECT IdProducto, Producto, PrecioUnitario, StockMinimo, IdEstadoProducto FROM producto WHERE IdProducto = '$id'";
          if ($resultado = mysqli_query($con, $sql)) 
          {
            echo "<div align=\"center\"><h2>Eliminar Registro</h2>";
            echo '<form method="POST" action="registraeliminar.php" >';
            echo "<TABLE border=1 align=\"center\">";

            while ($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) 
            {
              echo "<TR>";
                echo "<TD>";
                  echo "Id.: ";
                echo "</TD>";
                echo "<TD>";
                  echo '<input type="name" name="id" value="' . $registro["IdUsuario"] . '" readonly="true"/>';
                echo "</TD>";
              echo "</TR>";
              echo "<TR>";
                echo "<TD>";
                  echo "Nombres: ";
                echo "</TD>";
                echo "<TD>";
                  echo '<input type="name" name="nombres" value="' . $registro["Nombres"] . '" readonly="true"/>';
                echo "</TD>";
              echo "</TR>";          
              echo "<TR>";
                echo "<TD>";
                  echo "Password: ";
                echo "</TD>";
                echo "<TD>";
                  echo '<input type="name" name="password" value="' . $registro["Password"] . '" readonly="true"/>';
                echo "</TD>";
              echo "</TR>";
              echo "<TR>";
                echo "<TD>";
                  echo "Estado: ";
                echo "</TD>";
                echo "<TD>";
                  echo '<input type="name" name="estado" value="' . $registro["IdEstado"] . '" readonly="true"/>';
                echo "</TD>";
              echo "</TR>";
              echo "<TR>";
                echo '<TD align="center" colspan="2">';
                  echo '¿Esta seguro de ELIMINAR este registro?';
                echo "</TD>";
              echo "</TR>";
              echo "<TR>";
                echo '<TD align="center" colspan="2">';
                  echo '<input type="submit" name="submit" value="Eliminar" /> ';
                  echo '<A HREF="edicion.php">Cancelar</A>';            
                echo "</TD>";
              echo "</TR>";
            }
          }
        }

        */

      
  echo "</TABLE>";
 // mysqli_close($con);
   include("foot.php");
  
?>
