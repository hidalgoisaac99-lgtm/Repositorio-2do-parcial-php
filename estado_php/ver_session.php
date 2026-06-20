<?php
/*Este archivo lee la session
SERVIDOR -> inicia session.php -> ID
NAVEGADOR -> guarda ID -> cookie
NAVEGADOR -> envia ID al servidor -> SERVIDOR -> muestra session
*/
?>

<?php
session_start();
$usuario = $_SESSION["usuario"] ?? "no existe la sesión";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver session</title>
</head>
<body>
    <h1>Lectura de la sesión</h1>
    <p>Usuario guardado en sesión: <strong><?= $usuario ?></strong> </p>
    <a href="index.php">Volver</a>
    <a href="cerrar_session.php">Cerrar sesión </a>
</body>
</html>