<?php
/*este INICIA una sesión
el navegador no guarda el nombre de la sesión, sino un ID de sesión
*/
?>
<?php
session_start(); //inicia la sesión, se debe llamar antes de cualquier salida al navegador  

//guardar datos en la sesión
$_SESSION["usuario"] = "Isabel";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear session</title>
</head>
<body>
    <h1>SESSION INICIADA</h1>
    <p>Se ha guardadom el usuario en la sesión </p>
    <a href="ver_session.php">Ver sesión</a>
</body>
</html>