<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
require "../modelo/db.php";

$oper= "SELECT*FROM producto";
$conectar = new Conexion();
$conectar->conectar();
$conect=$conectar->getConexion();
$res= mysqli_query($conect,$oper);

while ($fila =mysqli_fetch_array($res)){
    $rutaimagen= $fila["imagen"];
    
    echo "<table class='table'>";
    echo "<thead class='thead-dark'>";
    echo "<tr>";
    echo "<th scope='col'>Producto</th>";
    echo "<th scope='col'>Imagen</th>";
    echo "<th scope='col'>Precio</th>";
    echo "<th scope='col'>Descripcion</th>";
    echo "<th scope='col'>Estatus</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo " <tr>";
    echo "<th scope='row'>$fila[nomproducto]</th>";
    echo "<td><img src='$rutaimagen' width='50' height='50'></td>";
    echo "<td>$fila[precio]</td>";
    echo "<td>$fila[descripcion]</td>";
    echo "<td>$fila[estatus]</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
    //echo "<img src='$rutaimagen' width='50' height='50'>";
   
}

?>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>       
</body>
</html>