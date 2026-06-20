<?php
session_start();
//verificar si el usuario esta logueado
if (isset($_SESSION["usuario"])) {
    header("Location: dashboard.php");
    exit;
}
//si no esta logiado lo mandamos al login
header("Location: login.php");
?>

 