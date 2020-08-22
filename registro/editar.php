<?php
include("head.php");
include("conexionbd.php");
    $con = Conectar();

  if(isset($_GET['id_producto'])) {
    $id = $_GET['id_producto'];
    //echo $id.' el ID';exit;
    $sq2 = "SELECT IdProducto, Producto, PrecioUnitario, StockMinimo, IdEstadoProducto FROM producto WHERE IdProducto = '$id' ";
  } else {
    $sql = "SELECT IdProducto,Producto,PrecioUnitario, StockMinimo, IdEstadoProducto FROM producto";
  }
  
  if ($resultado = mysqli_query($con, $sq2)) 
  {
    echo "<div align=\"center\"><h2>Modificar Registro</h2>";
    echo '<form method="POST" action="registraeditar.php" class="form">';
    echo '<TABLE class="table">';
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
          echo "Producto: ";
        echo "</TD>";
        echo "<TD>";
          echo '<input type="name" name="producto" value="' . $registro["Producto"] . '" autofocus/>';
        echo "</TD>";
      echo "</TR>";          
      echo "<TR>";
        echo "<TD>";
          echo "Precio Unitario: ";
        echo "</TD>";
        echo "<TD>";
          echo '<input type="name" name="preciounitario" value="' . $registro["PrecioUnitario"] . '"/>';
        echo "</TD>";
      echo "</TR>";
      echo "<TR>";
        echo "<TD>";
          echo "Stock: ";
        echo "</TD>";
        echo "<TD>";
          echo '<input type="name" name="stock" value="' . $registro["StockMinimo"] . '"/>';
        echo "</TD>";
      echo "</TR>";
      echo "<TR>";
        echo "<TD>";
          echo "Estado: ";
        echo "</TD>";
        echo "<TD>";
          echo '<input type="name" name="estado" value="' . $registro["IdEstadoProducto"] . '"/>';
        echo "</TD>";
      echo "</TR>";
      echo "<TR>";
        echo '<TD align="center" colspan="2">';
          echo '¿Esta seguro de MODIFICAR este registro?';
        echo "</TD>";
      echo "</TR>";
      echo "<TR>";
        echo '<TD align="center" colspan="2">';
          echo '<input type="submit" name="submit" value="Modificar" /> ';
          echo '<A HREF="edicion.php">Cancelar</A>';            
        echo "</TD>";
      echo "</TR>";
    }

  /*if (!mysqli_select_db($con, "producto8099")) 
  { 
    printf("ERROR: %s", mysqli_error($con)); 
    die("No es posible conectar con la base de datos..."); 
  }
  else
  {
    if(isset($_GET['id'])){
      $sql = "SELECT IdProducto, Producto, PrecioUnitario, StockMinimo, IdEstadoProducto FROM producto WHERE IdProducto = '$id' ";
      echo $sql;
    }else
    {$sql = "SELECT IdProducto,Producto,PrecioUnitario,StockMinimo, IdEstadoProducto FROM producto;";}
    
    if ($resultado = mysqli_query($con, $sql)) 
    {
      echo "<div align=\"center\"><h2>Modificar Registro</h2>";
      echo '<form method="POST" action="registraeditar.php" class="form">';
      echo '<TABLE class="table">';
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
            echo "Producto: ";
          echo "</TD>";
          echo "<TD>";
            echo '<input type="name" name="producto" value="' . $registro["Producto"] . '" autofocus/>';
          echo "</TD>";
        echo "</TR>";          
        echo "<TR>";
          echo "<TD>";
            echo "Precio Unitario: ";
          echo "</TD>";
          echo "<TD>";
            echo '<input type="name" name="preciounitario" value="' . $registro["PrecioUnitario"] . '"/>';
          echo "</TD>";
        echo "</TR>";
        echo "<TR>";
          echo "<TD>";
            echo "Stock: ";
          echo "</TD>";
          echo "<TD>";
            echo '<input type="name" name="stock" value="' . $registro["StockMinimo"] . '"/>';
          echo "</TD>";
        echo "</TR>";
        echo "<TR>";
          echo "<TD>";
            echo "Estado: ";
          echo "</TD>";
          echo "<TD>";
            echo '<input type="name" name="estado" value="' . $registro["IdEstadoProducto"] . '"/>';
          echo "</TD>";
        echo "</TR>";
        echo "<TR>";
          echo '<TD align="center" colspan="2">';
            echo '¿Esta seguro de MODIFICAR este registro?';
          echo "</TD>";
        echo "</TR>";
        echo "<TR>";
          echo '<TD align="center" colspan="2">';
            echo '<input type="submit" name="submit" value="Modificar" /> ';
            echo '<A HREF="edicion.php">Cancelar</A>';            
          echo "</TD>";
        echo "</TR>";
      }
    }*/
  }
  echo "</TABLE>";
  
  include("foot.php");
?>
