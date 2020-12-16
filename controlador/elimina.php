<?php
session_start();
require "../modelo/db.php";
$prod = $_POST["pro"];

$conectar = new Conexion();
$conectar->conectar();
$conect=$conectar->getConexion();
$oper1= "DELETE FROM producto WHERE idproducto= '".$prod."'";
$res1= mysqli_query($conect,$oper1);

$_SESSION["as"] = $prod;

header("Location: ../vistas/productoU.php");
    



?>