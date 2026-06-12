<?php
//recibir datos con get

$curso = $_GET["curso"] ?? "no definido";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibir Get</title>
</head>
<body>
    <h1>DATOS RECIBIDOS CON GET</h1>
    <P>Curso seleccionado</P>
    <strong><?= $curso ?></strong>

    <br><br>
    <a href="index.php">Volver</a>
    
</body>
</html>