<?php
/*Etes archivo cierra la session
cuando cerramos la sesion el servidor borra
la informacion del usuario guardada en la sesion, pero el navegador sigue guardando el ID de la sesion
*/
?>

<?php
session_start();
session_destroy(); //cierra la sesión, borra la información del usuario en el servidor
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar sesión</title>
</head>
<body>
    <h1>Sesión cerrada</h1>
    <p>La sesión ha sido cerrada correctamente.</p>
    <a href="index.php">Volver</a>
</body>
</html>