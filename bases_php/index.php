<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer proyecto PHP</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>bienvenido</h1>

    <nav>
        <a href="php/bases.php">Bases PHP</a>
    </nav>

    <?php
    $usuario = "docente";
    //echo "<p> hola $usuario</p>";
    ?>

    <p>hola <?= $usuario ?></p>

    <script src="js/script.js">
        
    </script>

</body>
</html>