<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php" . urlencode("Acceso no autorizado, por favor inicie sesión"));
    exit;
}

$usuario = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Bienvenido, <?= htmlspecialchars($usuario); ?></p>

    <p>Esta página solo es accesible si has iniciado sesión correctamente.</p>

    <a href="usuarios.php">Lista de usuarios</a>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>