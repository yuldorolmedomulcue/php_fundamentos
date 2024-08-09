<?php 
echo "<br>";

/*Ejercicio 1 Dia de la semana
1- Domingo
2- Lunes
3- Martes
4- Miercoles
5- Jueves
6- Viernes
7- Sabado
*/

// Ejercicio: Calcular el día de la semana
$numeroDia = 3; // 1 representa Lunes, 2 Martes, ... 7 Domingo
$nombreDia = "";

// Utiliza un switch para asignar el nombre del día correspondiente al número

switch ($numeroDia) {

    case 1:

        $nombreDia = "Lunes";

        break;

    case 2:

        $nombreDia = "Martes";

        break;

    case 3:

        $nombreDia = "Miércoles";

        break;

    case 4:

        $nombreDia = "Jueves";

        break;

    case 5:

        $nombreDia = "Viernes";

        break;

    case 6:

        $nombreDia = "Sábado";

        break;

    case 7:

        $nombreDia = "Domingo";

        break;

    default:

        $nombreDia = "Día inválido";

        break;

}
// Imprime el nombre del día de la semana
echo "El día correspondiente al número $numeroDia es: $nombreDia";
echo "<br>";

//Ejercicios 2 Numero par o impar
//utilizar el modulo%

$numIngresado = 13;
$resutado = $numIngresado % 2;
switch ($resutado) {
    case 1:
        echo "Es impar";
        break;
    case 0:
        echo "Es par";
    break;
    
    default:
        # code...
        break;
}

?>