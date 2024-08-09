<?php
/*
while(condicion){
codigo
}
*/
//Ejericio imprimr numeors del 1 al 30
 $num1 = 1;
 while ($num1 <= 30) {
    echo $num1;
    echo "<br>";
    //incrementador
    $num1++;
 }
 echo "<br>"; echo "<br>";

//ejercicos 2, los numeros pares del 1 al 20
$num2 = 1;
while ($num2 <= 20){
    $resultado = $num2 % 2;
    if($resultado == 0){
        echo "Numero par: ".$num2;
        echo "<br>";
    }
    $num2++;
}
echo "<br>";
echo "<br>";

//ejercicos 3, los numeros impares del 1 al 20
$num3 = 1;
while ($num3 <= 20){
    $resultado = $num3 % 2;
    if($resultado > 0){
        echo "Numero impar: ".$num3;
        echo "<br>";
    }
    $num3++;
}

echo "<br>";
echo "<br>";
// Ejercicio: Encontrar el primer número par mayor o igual a un valor dado
$valorDado = 7; // Cambia este valor para establecer tu objetivo
$numero = 1; // Iniciamos desde el primer número entero positivo

// Utiliza un ciclo while para encontrar el primer número par
while ($numero < $valorDado || $numero % 2 != 0) {
    // Incrementar $numero para verificar el siguiente número
    $numero++;
}

// Imprimir el resultado
echo "El primer número par mayor o igual a $valorDado es: $numero";
?>
?>