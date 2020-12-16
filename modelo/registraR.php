<?php
	require "db.php";

	$nom = $_POST["nombre"];
	$cor = $_POST["correo"];
	$pas = $_POST["password"];
	$tabla= "usuario";
	$sql = "('','$nom','$cor','$pas')";
		
		
	$oper = "INSERT INTO ".$tabla." VALUES ".$sql;
	$conectar = new Conexion();
	$conectar->conectar();
	$conect=$conectar->getConexion();
	$res= mysqli_query($conect,$oper);
	
	if($res){
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		header("Location: ../vistas/index.php"); 
		echo json_encode($res);
	}else{
		echo 'Fallo en el registro,<a href="registro.php">vuelva a intenarlo</a>.<br/>';
	  }
			
?>


