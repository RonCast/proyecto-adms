<?php
	function Conectar()
	{
		//echo "holas";exit;
		$servidor = "localhost";
		$usuarioBD = "root"; //usrAdmin
		$passwordBD = "";  //Uni$2020.
		$dbname = "producto8099";

		$conexion = mysqli_connect($servidor, $usuarioBD, $passwordBD, $dbname);
		if ($conexion) 
		{
			return $conexion;
			
		} else {
			die("No se pudo establecer conexion con la base de datos...");
		}
	}
?>
