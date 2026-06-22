<?php
/*Procesa el login (POST -> SELECT en la BD -> SESSION)
Que hace:
recide usuario y password por POST
consulta en la base de datos si el usuario existe y la contraseña es correcta
si esta bien: crea estado guardando $_SESSION["usuario"] y redirige a dashboard.php
si esta mal: redirige a login.php con mensaje de error
este archivo es un guardia revisa en la bd y decide si entra 
*/
?>

<?php
session_start();
include "conexion.php";

// recibir los datos co POST
$usuario = $_POST["usuario"] ?? "";
$password = $_POST["password"] ?? "";

//validar las credenciales
if($usuario === "" || $password === ""){
    $mensaje = "Complete todos los campos";
    header("Location: login.php?mensaje=" . urlencode($mensaje));
    exit;
}

$sql = "SELECT id, usuario FROM usuarios WHERE usuario = '$usuario' AND clave = '$password' limit 1";
$result = $conn->query($sql);

if ($result && $result->num_rows == 1) {
    //credenciales correctas
    $fila = $result->fetch_assoc();//permite transformar el resultado de la consulta en un array asociativo
    $_SESSION["usuario"] = $fila["usuario"]; //guardar el usuario en la sesión
    $_SESSION["id_usuario"] = $fila["id"]; //guardar el id del usuario en la sesión
    
    header("Location: dashboard.php"); //redireccionar al dashboard
    exit;
} else {
    //credenciales incorrectas
    $mensaje = "Usuario o contraseña incorrectos";
    header("Location: login.php?mensaje=" . urlencode($mensaje)); //redireccionar al login con mensaje de error
    exit;
}
?>