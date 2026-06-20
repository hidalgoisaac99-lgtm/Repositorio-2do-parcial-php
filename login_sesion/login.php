<?php
/*Formulario que envia por POST
El formulario envia datos con POST a validar_login.php
Aqui aun no se ha iniciado la sesión, solo se envian los datos del formulario
*/
?>

<?php
//si ya esta logiado lo vamos a mandar al dashboard
session_start();
if (isset($_SESSION["usuario"])) {
    header("Location: dashboard.php");
    exit;
}

//mensaje opcional (viene por GET desde validar_login.php u login.php)
$mensaje = $_GET["mensaje"] ?? "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login (POST + Sesión)</h1>
    <?php if ($mensaje): ?>
        <p style="color: red;"><?= htmlspecialchars($mensaje) ?></p>
    <?php endif; ?>
    <form action="validar.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Iniciar sesión</button>

        <p><em>credenciales de prueba: admin / 123456</em></p>
    </form>
    
</body>
</html>