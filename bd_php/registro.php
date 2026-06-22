<?php
/*registrar usuario (POST -> INSERT)
Que hace: muestra un formulario y al enviarlo, inserta en bd
REgistro= POST + INSERT en la base de datos
*/
?>

<?php
session_start();
include "conexion.php";

$msg = "";

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $usuario = $_POST["usuario"] ?? "";
    $correo = $_POST["correo"] ?? "";
    $clave = $_POST["clave"] ?? "";


   if ($usuario  ==="" || $correo ==="" || $clave ===""){
    $msg="Complete todos los campos";
   }else{
    //verificar si ya existe un ususario
    $sql_check = "SELECT id FROM usuarios WHERE usuario = '$usuario' limit 1";
    $result_check = $conn->query($sql_check);

      if($result_check && $result_check->num_rows > 0){
        $msg = "El usuario ya existe";
      }else{
        //insertar el nuevo usuario
        $sql_insert = "INSERT INTO usuarios (usuario, correo, clave) VALUES ('$usuario', '$correo', '$clave')";
        if($conn->query($sql_insert)){ 
            header("Location: login.php?msg=" . urlencode("Usuario registrado correctamente"));
            exit;
           // $msg = "Usuario registrado correctamente";
        }else{
            $msg = "Error al registrar usuario: ";
        }
      }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de usuario </h1>
    <?php if($msg!==""): ?>
        <p><?= htmlspecialchars($msg) ?></p>
    <?php endif; ?>

    <form action="registro.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required>
        <br>
        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" required>
        <br>
        <button type="submit">Registrar</button>
    </form>
    <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></p>
</body>
</html>