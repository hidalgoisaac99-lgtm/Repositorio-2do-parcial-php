<?php
session_start();
/*POST -> enviar datos al servidor: PHP recibe con $_POST
si esta bien: crea estado guardando $_SESSION["usuario"] y redirige a dashboard.php
si esta mal: redirige a login.php con mensaje de error
*/

// recibir los datos co POST
$usuario = $_POST["usuario"] ?? "";
$password = $_POST["password"] ?? "";

//Credenciales quemadas o en codigo
$usuarioValido = "admin";
$passwordValida = "123456";

//validar las credenciales
if ($usuario === $usuarioValido && $password === $passwordValida) {
    //credenciales correctas
    $_SESSION["usuario"] = $usuario; //guardar el usuario en la sesión
    header("Location: dashboard.php"); //redireccionar al dashboard
    exit;
} else {
    //credenciales incorrectas
    $mensaje = "Usuario o contraseña incorrectos";
    header("Location: login.php?mensaje=" . urlencode($mensaje)); //redireccionar al login con mensaje de error
    exit;
}

?>