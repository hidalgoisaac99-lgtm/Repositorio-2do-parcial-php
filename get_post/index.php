<?php
//get es un metodo que usa el navegador para enviar datos al servidor a traves de la URL
//cuando


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio GET y POST</title>
</head>
<body>
    <h1>ejercicio GET Y POST</h1>
    <hr>
    <h2>Ejercicio GET</h2>
    <p>haz click en el enlace</p>

    <!--ENLACES CON GET-->
    <a href="recibir_get.php?curso=desarrollo_web">desarrollo web</a>
    <a href="recibir_get.php?curso=programacion">programacion</a>
    <a href="recibir_get.php?curso=base_de_datos">Base de datos</a>

    <hr>
    <h2>EJERCICIO POST</h2>
    <!--FORMULARIO POST-->
    <form method="POST" action="recibir_post.php">
        <label>NOMBRE: </label><br>
        <input type="text" name="nombre"><br>
        <label>CORREO: </label><br>
        <input type="email" name="correo">
        <button type="submit">Enviar</button>


    </form>



    
</body>
</html>