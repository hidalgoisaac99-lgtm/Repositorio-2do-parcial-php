<?php

require_once __DIR__ . "/../models/usuario.php";

class UsuarioController{

//accion: listar usuario
public function listar(){
    //1) pedir los datos al modelo
    $usuarios = Usuario::obtenertodos();
    //2) devolver los datos
    return $usuarios;
}
}
?>