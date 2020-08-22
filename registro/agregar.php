<?php
include("head.php");
include("conexionbd.php");
    $con = Conectar();
?>
<div align="center"><h2>Nuevo</h2></div>
		<form method="POST" action="registraagregar.php" >

				<tr>
					<td>
						Producto:
					</td>
					<td>
						<input type="text" name="producto" autofocus="" />
					</td>
				</tr>
				<br>
				<tr>
					<td>
						Precio Unitario:
					</td>
					<td>
						<input type="number" name="preciounitario" />
					</td>
				</tr>
				<br>
				<tr>
					<td>
						Stock Minimo:
					</td>
					<td>
						<input type="number" name="stock_minino" />
					</td>
				</tr>
				<br>
				<tr>
					<td>
						Estado:
					</td>
					<td>
					<select name="estado">
						<option value="1"> ACTIVO </option>
						<option value="2"> INACTIVO </option>
					 	 <!--  <input type="text" name="estado" /> -->
					</td>
				</tr>
				<br>
				<tr>
					<td align="center" colspan="2">
						<input type="submit" name="submit" value="Agregar" />
						<?php echo "<A HREF=\"edicion.php\">Cancelar</A>";?>
					</td>
				</tr>
			</table>
			
		</form>

	<?php
include("foot.php");
?>