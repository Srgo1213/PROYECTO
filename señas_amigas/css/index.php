<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "registro";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if(!$enlace) {
        echo "Error en la conexion en el servidor";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Registro</title>
</head>

<body>
    <header>
        <nav>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link active" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="nosotros.html">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="galeria.html">Galería</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contacto.html">Registro</a>
                </li>
              </ul>
        </nav>
    </header>
<!----------------------------------------------->
    <form action="register.php" method="post">
<section class="form-register">
    <h4>FORMUARIO PARA REGISTRO DE LOS CURSOS</h4>
    <input class="controls" type="text" name="Nombre" id="Nombre" placeholder="Ingrese su nombre">
    <input class="controls" type="text" name="Apellido" id="Apellido" placeholder="Ingrese su apellido">
    <input class="controls" type="email" name="Correo" id="Correo" placeholder="Ingrese su correo">
    <input class="controls" type="text" name="Ciudad" id="Ciudad" placeholder="Ingrese su ciudad">
    <input class="controls" type="text" name="C.P" id="C.P" placeholder="Ingrese su codigo postal">
    <p>Estoy de acuerdo <a href="http://">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" value="Registrar">
</section>

</body>
</html>