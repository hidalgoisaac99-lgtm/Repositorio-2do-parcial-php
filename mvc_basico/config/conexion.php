<?php
class Conexion{
    public static function conectar(){
        $host = "localhost:3307";
        $bd = "web_app";
        $usuario = "root";
        $clave = "";

        $conn = new mysqli($host, $usuario, $clave, $bd);

        if($conn->connect_error){
            die("error de conexion: " . $conn->connect_error);
        }

        return $conn;
    }
}
?>