<?php
session_start();
include "conexion.php";

$msg = "";

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $usuario = $_POST["usuario"] ?? "";
    $correo = $_POST["correo"] ?? "";
    $clave = $_POST["clave"] ?? "";
}

if ($usuario  ==="" || $correo ==="" || $clave ===""){
    $msg="Complete todos los campos";
}else{
    //verificar si ya existe un ususario
    $sql_check = ""
}
?>