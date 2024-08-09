<?php
/*
inicializacion de un ciclo for o para for
(inicializacion, condicion, incremento){
codifo de se jecuta
}
*/

//EJercicio 1 (imprimir numeros del 1 al 200)
for($num1 = 1; $num1 <= 200; $num1++){
    echo $num1;
    echo "<br>";
}

//Ejercicio 2 numeros impares hasta el
echo "<br>";
for ($i=1; $i <= 20 ; $i++) { 
    $resultado = $i % 2;
    if($resultado > 0){
        echo "Es impar: $i ";
        echo "<br>";
    }
}

//ejercicio 3: Tablas de multiplicar (Ciclos anidados)
echo "<br>";
echo "<br>";
for ($num3=1; $num3 <= 5 ; $num3++) { 
    for ($num4 = 1; $num4 <=10 ; $num4++) { 
        echo "$num3 X $num4 = ". $num3 * $num4;
        echo "<br>";
    }
}

?>