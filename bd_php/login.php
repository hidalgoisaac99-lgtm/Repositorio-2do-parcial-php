<?php
/*Formulario de acceso POST -> login.php -> verificar credenciales -> iniciar sesión -> dashboard.php
Que hace: muestra el formulario y envia por POST a validar.php
Que no hace: no verifica credenciales, no inicia sesión, no redirige a dashboard.php
aqui usa POST porque envimos datos (usuario y password) y no queremos que se vean en la URL, ademas es mas seguro que GET para enviar datos sensibles como contraseñas
*/
?>

<?php
session_start();
//si ya esta logiado lo vamos a mandar al dashboard
if (isset($_SESSION["usuario"])) {
    header("Location: dashboard.php");
    exit;
}

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
    <h1>Login</h1>
    <?php if ($mensaje!==""): ?>
        <p style="color: red;"><strong><?= htmlspecialchars($mensaje) ?></strong></p>
    <?php endif; ?>
    <form action="validar.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Iniciar sesión</button>

        <!-- <input type="submit" value="Iniciar sesión"> -->
    </form>
    <p><a href="registro.php">Registrarse</a></p>
</body>
</html>