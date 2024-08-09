<?php 
echo "<br>";

//Ejercicio 1

$num = 1; 
do{
    echo $num;
    echo "<br>";

    if($num >= 400){
        break;
    }
    $num++;
}while(true);
echo "<br>";
echo "<br>";


//Continue, se salta a la siguiente linea avanza hacia al proximo ciclo loop

$num2 =1;
while (true) {
    $resulta = $num2 % 2;

    if($resulta == 1){
        $num2++;
        continue;  /*cumple  y imprime 2*/
    }

    if($num2 > 10){
        break;
    }
    echo "pares:".$num2;
    echo "<br>";

    $num2++;
}