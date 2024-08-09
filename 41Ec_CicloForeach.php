<?php 
/*
E ciclo foreach solo trabaja con arrays, se usa para recorrer cada
registro con su llave->valor, key->value
-sintaxis
foreach($array as $valor){
codigo.....
} 
*/
echo "<br>";
//Ejercicio1 accediendo a los valores
$colores = array("Blanco", "Rojo", "Azul");
foreach ($colores as $value) {
    echo "$value <br>";
}

echo "<br>";
//Ejercicio2 accediendo a las llaves y los valores
$persona = array("yeye" => "1111", "lolo" => "2222", "Azulin" => "3333");
foreach ($persona as $key => $value) {
    echo "$key => $value". "<br>";
}



?>