<?php
/*Function nombre_function(parametrs){
instruciones;
return valor;
}*/
declare(strict_types=1);

echo "<br>";
//Ejercicio 1, definiendo funciones
function suma_numeros(){
    $num1 =2;
    $num2 =3;
    echo $num1 + $num2;
}
//llamar funcion
suma_numeros();
echo "<br>";
echo "<br>";

//Ejercicio 2, impimir numeros impares
function numeros_impares($tope){
    for ($i=0; $i < $tope; $i++) { 
        if($i % 2 > 0){
            echo "numero: $i";
            echo "<br>";
        }
    }
}
//llamar funcion 
numeros_impares(30);
echo "<br>";
echo "<br>";

//ejemplo 3
function suma($num1, $num2){
    return ($num1 + $num2);
}
echo suma(12,10);
echo "<br>";
echo "<br>";

//ejemplo 4, pasando paramentros a funciones
function imprimir_impares(int $limite,$saltando_numeros){
    for ($i=0; $i < $limite; $i++) { 
        if($i == $saltando_numeros){
            continue;
        }
        if($i % 2 !=0){
            echo "Numero impar: $i";
            echo "<br>";
        }
    }
}
imprimir_impares(30, 7); //se salta el 7 | $limite,$saltando_numeros
echo "<br>";
echo "<br>";

//retornar valores de funcion
function multiplicar($x, $y) : int{
    $valor = $x * $y;
    return $valor;  //retorna entero
}
echo "Resultado: ".multiplicar(2,3);
echo "<br>";
echo "<br>";

//Ejemplo, retornar array
function array_impares($limite) : array{
    $retorna_array = [];
    for ($i=0; $i < $limite; $i++) { 
        if($i % 2 !=0){
           $retorna_array[] = $i;
        }
    } 
    return $retorna_array;
}
$num_imapares = array_impares(20);
print_r($num_imapares);
echo "<br>";
echo "<br>";

//ejemplo 4, parametros por defecto y opcionales
function imprimir_impares3(int $limite, $saltando_numero = -1){
    for ($i=0; $i < $limite; $i++) { 
        if($i == $saltando_numero){
            continue;
        }
        if($i % 2 !=0){
            echo "Numero impar: $i";
            echo "<br>";
        }
    }
}
echo "<br>";
imprimir_impares3(10,3);

/*-------------------------------funciones dinamicas--------------------------------------*/
//se llaman desde una variable| : int = retorna un entero
function sumar3($x, $y) : int {
    return $x + $y;
}
function resta3($x, $y) : int {
    return $x - $y;
}
$funcion_operacion = "resta3";
echo "<br>";
echo $funcion_operacion(3,5);
echo "<br>";
echo "<br>";

/*-------------------------------funciones Anonimas--------------------------------------*/
$nombre = "Yuldor Mulcue";
$imprimir_nombre = function() use($nombre){
    echo $nombre;
};
echo "<br>";
$imprimir_nombre();
echo "<br>";
echo "<br>";

//pasando arguemntos como referencias
$total4 = 0;
function suma4($x, $y, & $total4= null){
    $total4 = $x + $y;
}
echo "<br>";
echo $total4;
echo "<br>";
suma4(2,4, $total4);
echo "<br>";
echo $total4;
echo "<br>";
echo "<br>";

/*-----------------------Ejercicios--------------------------------------------------*/
// Ejercicio 1: Calcular el promedio
function calcularPromedio($numeros) {
    $suma = array_sum($numeros);
    $cantidad = count($numeros);
    if ($cantidad == 0) {
        return 0; // Evitar división por cero
    }
    return $suma / $cantidad;
}

// Ejercicio 2: Encontrar el número máximo
function encontrarMaximo($numeros) {
    if (empty($numeros)) {
        return null; // Manejar el caso de array vacío
    }
    $maximo = $numeros[0];
    foreach ($numeros as $numero) {
        if ($numero > $maximo) {
            $maximo = $numero;
        }
    }
    return $maximo;
}

// Ejercicio 3: Contar palabras en una cadena
function contarPalabras($texto) {
    $palabras = str_word_count($texto, 1);
    return count($palabras);
}

// Ejercicio 4: Calcular el factorial de un número
function calcularFactorial($numero) {
    if ($numero < 0) {
        return null; // Factorial no definido para números negativos
    }
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

//Impresiones
// Ejercicio 1: Calcular el promedio
$numeros = [1, 2, 3, 4, 5];
$promedio = calcularPromedio($numeros);
echo "El promedio es: $promedio<br>";

// Ejercicio 2: Encontrar el número máximo
$maximo = encontrarMaximo($numeros);
echo "El número máximo es: $maximo<br>";

// Ejercicio 3: Contar palabras en una cadena
$texto = "Hola mundo, esto es una prueba";
$cantidad_palabras = contarPalabras($texto);
echo "La cantidad de palabras es: $cantidad_palabras<br>";

// Ejercicio 4: Calcular el factorial de un número
$numero = 5;
$factorial = calcularFactorial($numero);
echo "El factorial de $numero es: $factorial<br>";
?>





