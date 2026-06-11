<?php
//codigo php aqui
//cad instruccion lleva ;

echo "hola mundo";//para imprimir texto

echo "<h1>Hola desde php</h1>";

echo "<p>esto lo genera el servidor</p>";

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
var_dump($decimal);
echo "<br>";

//concatenacion de string
#en php se concatena con punto (.)
echo "hola " . $nombre;

//operadores aritmeticos
$suma = 6 + 8;
$resta = 6 - 8;
$multiplicacion = 6 * 8;
$division = 6 / 8;

//operadores relcionales (comparativos)
/*
$a > $b
$a < $b
$a != $b
$a == $b -> igual valor
$a === $b -> igual valor y tipo
a = 1 numero entero
b = "1" esto es texto 
*/

//estructuras condicionales
$edad = 34;
if($edad >= 18){
   echo "Mayor de edad";
} else {
    echo "Menor de edad";
}
echo "<br>";

$nota = 8;
if($nota >= 9){
    echo "excelente";
} elseif($nota >= 7){
    echo "aprobado";
}else{
    echo "reprobado";
}
echo "<br>";

//estructuras repetitivas
$i = 1;
while($i <= 5){
    echo $i . "<br>";
    $i++;
}

for ($i = 1; $i <= 5; $i++){
    echo "Numero: $i <br>";
}

#arreglos indexados
$colores = ["rojo", "verde", "azul"];
echo $colores[1];
echo "<br>";
//recorrer arrays
foreach($colores as $color){
    echo $color . "<br>";
}

//arrays asociativos
$persona = ["nombre" => "Isaac", "edad" => 34, "ciudad" => "Guayaquil"];//clave, valor
echo "<br>";
echo $persona["ciudad"];

?>