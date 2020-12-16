<?php
	require "../modelo/db.php";
	session_start();
	$img = $_POST["imagen"];
	$foto= $_FILES["imagen"]["name"];
	$ruta = $_FILES["imagen"]["tmp_name"];
	$destino = "../fotos/".$foto;
	copy($ruta,$destino);
	$nom = $_POST["producto"];
	$pre = $_POST["precio"];
	$des = $_POST["descripcion"];
	$conectar = new Conexion();
	$conectar->conectar();
	$conect=$conectar->getConexion();
		
	$oper = "UPDATE producto SET nomproducto= '".$nom."', imagen= '".$destino."', precio= '".$pre."', descripcion= '".$des."' WHERE idproducto = '".$_SESSION['idPr']."'";
	$res= mysqli_query($conect,$oper);
	
	echo "$oper";
	header("Location: ../vistas/productoU.php");
			
?>


