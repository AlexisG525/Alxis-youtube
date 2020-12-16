<?php
require "db.php";
session_start();
$email = $_POST['email'];
$pass = $_POST['password'];
$tabla= "usuario";
$admi = "admin@gmail.com";

$oper = "SELECT * FROM usuario WHERE correo= '".$email."' and contraseña = '".$pass."'";
$oper1 = "SELECT * FROM usuario WHERE correo= '".$admi."' and contraseña = '".$pass."'";
$conectar = new Conexion();
$conectar->conectar();
$conect=$conectar->getConexion();
$conectar1 = new Conexion();
$conectar1->conectar();
$conect1=$conectar1->getConexion();
$resultado=mysqli_query($conect,$oper);
$resultado1=mysqli_query($conect1,$oper1);
$nr = mysqli_num_rows($resultado);
$nr1 = mysqli_num_rows($resultado1);

if($nr1){
  header("Location: ../vistas/productoV.php"); 
}else if($nr){
    // Guardo en la sesión el email del usuario.
    $_SESSION['email'] = $email;
    // Redirecciono al usuario a la página principal del sitio.
    
    header("Location: ../vistas/producto.php"); 
  }else{
    echo 'El email o password es incorrecto, <a href="../vistas/index.php">vuelva a intenarlo</a>.<br/>';
  }

?>