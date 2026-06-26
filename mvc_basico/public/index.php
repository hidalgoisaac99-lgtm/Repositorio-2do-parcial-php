<?php
//front controller
require_once __DIR__ . "/../app/controllers/usuarioController.php";

//router simple por gGET
$url = $_GET["url"] ?? "usuarios/listar";

switch($url){
    case "usuarios/listar":
    $controller = new UsuarioController();
    $usuarios = $controller->listar();

    //cargar vista
    require __DIR__ . "/../app/views/usuarios/listar.php";
    break;
    default:
    http_response_code(404);
    echo "404 - pagina no encontrada";
}

?>