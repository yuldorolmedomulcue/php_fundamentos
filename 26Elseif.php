<?php 

/*
Else if nos permite evaluar varias condiciones y se cumplira una de ellas
La sencentencia elseif es ejcutada solamente si la expresion if precedente y cualquiera de las
expreciones elseif precedentes son evaluadas como FALSE actual se evaluar como TRUE
*/

echo "<br>";

//ejercicios 1
$num1=8;
$num2=10;

if($num1 > $num2){
    echo "$num1 es MAYOR que $num2";
} else if($num1 == $num2){
    echo "$num1 es IGUAL a $num2";
}else{
    echo "$num1 es MENOR que $num2";
}
echo "<br>";

//ejercicios 2
//Diferencia de elseif con if

$a = true;
$b = true;
$c = true;

if($a == true){
    echo "a: $a";
}else if($b == true){
    echo "b: $b";
}else{
    echo "c: $c";
}
echo "<br>";

//Con if normales
if ($a == true){
    echo "A: $a";
}