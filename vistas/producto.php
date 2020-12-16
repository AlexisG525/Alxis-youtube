<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../css/estiloo.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Cual es tu producto?</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="../modelo/operaciones.php" method="POST" enctype="multipart/form-data" >
                    <input class="text email" type="text" name="producto" placeholder="Nombre del Producto" required="">
                    <input class=" a text" type="file" name="imagen" placeholder="Agergar imagen" required=""><br>
                    <input class=" a text" type="text" name="precio" placeholder="Precio del Producto $$" required=""><br>
                    <textarea class=" a text" name="descripcion" rows="5" cols="20" >Descripcion del producto</textarea>
                    <input type="submit" value="Enviar">
                </form>
                <p><a href="productoU.php"> !Ver tus productos¡</a></p>
                <p><a href="../controlador/cerrar.php"> !Cerrar Sesion¡</a></p>
            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>


</body>
</html>
