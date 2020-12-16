<?php
	require "db.php";
	session_start();
	$img = $_POST["imagen"];
	$foto= $_FILES["imagen"]["name"];
	$ruta = $_FILES["imagen"]["tmp_name"];
	$destino = "../fotos/".$foto;
	copy($ruta,$destino);
	$nom = $_POST["producto"];
	$pre = $_POST["precio"];
	$des = $_POST["descripcion"];
	$tabla= "producto";
	$conectar = new Conexion();
	$conectar->conectar();
	$conect=$conectar->getConexion();
	$val=mysqli_query($conect,"SELECT * FROM usuario WHERE correo = '".$_SESSION['email']."'");
	$fin=mysqli_fetch_array($val);
	$idU = $fin ["idusuario"];
	$sql = "('','$idU','$nom','$destino','$pre','$des')";
		
		
	$_SESSION['idU'] = $idU;
	header("Location: ../vistas/productoU.php");
			
?>


