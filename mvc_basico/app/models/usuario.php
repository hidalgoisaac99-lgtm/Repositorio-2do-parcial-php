<?php
require_once __DIR__ . "/../../config/conexion.php";

class Usuario{
    //obtener todos los usuarios
    public static function obtenertodos(){
        $conn = Conexion::conectar();

        $sql = "SELECT id, usuario, correo from usuarios";
        $resultado = $conn ->query($sql);

        $usuarios = [];

        if($resultado->num_rows > 0){
            while($fila = $resultado->fetch_assoc()){
                $usuarios[] = $fila;
            }
        }

        return $usuarios;


    }
}
?>