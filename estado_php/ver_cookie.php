<?php
/* este archivo lee la cookie creada en cookie.php
SERVIDOR -> crea cookie.php -> NAVEGADOR -> ver_cookie.php -> SERVIDOR
NAVEGADOR -> envia cookie al servidor -> SERVIDOR -> muestra cookie
el navegador envia la cookie automaticamente
PHP la recibe con $_COOKIE

*/
?>

<?php
    $usuario = $_COOKIE["usuario"]?? "no existe la cookie";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver cookie</title>
</head>
<body> 
    <h1>Lectura del cookie</h1>
    <p>Usuario guardado en cookie: <strong><?= $usuario ?></strong> </p>

    <a href="index.php">Volver</a>
</body>
</html>