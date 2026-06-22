<?php
/*conectar php con mysql
Que hace: Establecer conexión con la base de datos MySQL
por que existe: para no repetir el código de conexión en cada archivo que necesite acceder a la base de datos
este archivo es comomun cable que conecta php con mysql, lo incluimos en los archivos que necesiten acceder a la base de datos
*/
?>


<?php

$host = "localhost:3307";
$bd = "web_app";
$user = "root";
$pass = "";


$conn = new mysqli($host, $user, $pass, $bd);

if($conn->connect_error){
    die("Error de conexion: " . $conn->connect_error );
}
$conn->set_charset("utf8mb4");

?>