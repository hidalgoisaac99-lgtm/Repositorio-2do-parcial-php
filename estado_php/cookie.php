<?php
/*Este achivo crea una cookie
La cookie:
se guarda en el navegador del cliente
tiene un nombre, un valor y una fecha de expiración
no se guarda en php

*/
?>

<?php
//crear una cookie llamada usuario
setcookie("usuario", "Caleb", time() + 60); //la cookie se guardará por una hora

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cookie</title>
</head>
<body>
    <h1>Crear cookie</h1>
    <p>Se ha guardado una cookie con el nombre usuario </p>
    <a href="ver_cookie.php">Ver cookie</a>
</body>
</html>