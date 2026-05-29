<?php
//codigo php aqui
//cad instruccion lleva ;

echo "hola mundo";//para imprimir texto

echo "<h1>Hola desde php</h1>";

echo "<p>esto lo gfenera el servidor</p>";

//todas las variables empiezan con $
$nombre = "isaac";
$edad = "34";
$activo = "true";

echo $nombre;
echo "<br>";//salto de linea
echo $edad;

$texto = "hola";
$numero = "10";
$decimal = "3.14";
$estado = "true";
$nulo = null;
echo "<br>";
var_dump($texto);//ver tipo de variable
echo "<br>";

//concatenacion de string
echo "hola " . $nombre;

//arrays asociativos
$persona = ["nombre" => "Isaac", "edad" => 34, "ciudad" => "Guayaquil"];//clave, valor
echo "<br>";
echo $persona["ciudad"];

?>