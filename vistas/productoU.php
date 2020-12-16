<!DOCTYPE html>
<html lang="en">
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
session_start();
require "../modelo/db.php";


$oper= "SELECT*FROM producto WHERE idus = '".$_SESSION['idU']."'";
$conectar = new Conexion();
$conectar->conectar();
$conect=$conectar->getConexion();
$res= mysqli_query($conect,$oper);
echo "<a href='../controlador/cerrar.php'>Cerrar Sesion!</a>";

while ($fila =mysqli_fetch_array($res)){
    $rutaimagen= $fila["imagen"];
    $id = $fila["idproducto"];
    $_SESSION ['idPr'] = $fila["idproducto"];
    echo "<a href='producto.php'>regresar</a>";
    echo "<table class='table'>";
    echo "<tr class='warning'>";
	echo "<td>Nombre del producto</td>";
	echo "<td>Imagen</td>";
	echo "<td>Precio</td>";
	echo "<td>Descripcion</td>";						
    echo "<td>Id Producto</td>";
    echo "<td>Borrar</td>";
    echo "<td>Editar</td>";
    echo "</tr>";
    echo "<br><br>";
    echo "<tr class='warning'>";
	echo "<td>$fila[nomproducto]</td>";
	echo "<td><img src='$rutaimagen' width='50' height='50'></td>";
	echo "<td>$fila[precio]</td>";
    echo "<td>$fila[descripcion]</td>";
    echo "<form action='../controlador/elimina.php' method= 'POST'>";
    echo "<td><input style='width : 30px; heigth : 30px' type='text' value='$fila[idproducto]' name='pro'></td>";
    echo "<td><input type='submit' value='Borrar'></td>";
    echo "</form>";
    echo "<form action='editarP.php' method= 'POST'>";
    echo "<td><input type='submit' value='Editar'></td>";
    echo "</form>";
    echo "</tr>";
    echo "</table>";
}

?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>