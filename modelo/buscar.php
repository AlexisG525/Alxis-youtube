<?php
	require "conexionR.php";
    $tabla = "producto";
	
	$oper = "SELECT * FROM".$tabla." WHERE ".$sql;
	$conectar = new Conexion();
	$conectar->conectar();
	$conect=$conectar->getConexion();
	$resultado=mysqli_query($conect,$oper);
			
?>


