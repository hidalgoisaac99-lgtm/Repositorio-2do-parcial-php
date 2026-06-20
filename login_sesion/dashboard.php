<?php
/*Protegida por sesión
esta pagina no depende de POST ni GET, depende de la sesión
si el usuario no esta logiado (no existe $_SESSION["usuario"]) lo mandamos al login.php
*/

?>

<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php?mensaje" .
     urlencode("Debes iniciar sesión para acceder al dashboard"));
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
    <h1>Bienvenido al dashboard, <?= htmlspecialchars($usuario) ?></h1>
    <p>Esta página está protegida por sesión, solo puedes verla si has iniciado sesión</p>
    <p>Si estas aqui, significa que la sesion esta activa</p>

    <a href="logout.php">Cerrar sesión</a>
</body>
</html>