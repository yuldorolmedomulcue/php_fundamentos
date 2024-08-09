<?php
    //expresiones y operadores
    //ejemplo de una expresion
    $nombre = 'Yuldor';
    $salario = 2000000;
    // $total = suma (10,20);

    //el = es un operador de asigancion
    //se usan para realizar opercaiones sobre varibles
    $apellidos = 'Mulcue';
    // $x++;
    $suma = 30+2;

    //Diferentes tipo de operadores
    //Arimeticos
    $sueldo = 1300000;
    $subsidioTransporte = 170000;
    $salud = 30000;
    $pension = 90000;
    $ingresos = $sueldo + $subsidioTransporte;
    $egresos = $salud + $pension;
    $total = $ingresos - $egresos;
    echo "El total del sueldo es: $total";
    echo "<br>";


    //Calcular el area de un rectandulo
    $base =10;
    $altura =14;
    $area = $base*$altura;
    echo "el area del rectangulo es: $area";
    echo "<br>";

    //division
    $num1 =8;
    $num2 =14;
    $division = $num1/$num2;
    echo "la division es: $division";

    //porcentaje
    echo "<br>";
    $sumaNotas =42;
    $cantidadMaterias =5;
    $promedio = $sumaNotas / $cantidadMaterias;
    echo "El promedio de notas es: $promedio";

    //Mo'dulo 
    echo "<br>";
    $a = 50%2;
    echo"El valoer del modulo es: $a";

    //Exponenciacio'n
    echo "<br>";
    $c = 4;
    $d = 3;
    $resExpo = $c ** $d;
    echo $resExpo;

    //Opeeradores condicionales
    echo "<br>";
    $puedeingresar = (true) ? 'Entra' : 'No entra';
    echo $puedeingresar;
 
    //Operadores logicos  and O && y or %% ||
    echo "<br>";
    $permiso = true;
    $autentificado= true;
    echo ($permiso or $autentificado) ? 'Bienvenido admin' : 'Bienvenido inivtao'; // :SINO

    //mayor o igual
    echo "<br>";
    $total = 49;
    $pasaMateria =50;
    $validarPasa = ($total >= $pasaMateria) ? true : false;
    echo ($validarPasa) ? "pAsa" : 'no pasa la materia';


    //asignacion
    echo "<br>";
    $nombre = 'Yuldor';
    $salario = 2212;
    //operador +=
    $contador = 1;
    // $contador = $contador + 1;
    $contador += $contador;
    echo $contador;

    echo "<br>";
    //operador +=
    $contador = 1;
    // $contador = $contador + 1;
    $contador -= $contador;
    echo $contador;

    echo "<br>";
    //operador +=
    $contador = 1;
    // $contador = $contador + 1;
    $contador *= $contador; // 1*1 es igual a 1
    echo $contador;

    echo "<br>";
    //operador +=
    $contador = 30;
    // $contador = $contador + 1;
    $contador /= 2; // 30/2=15
    echo $contador;

    //modulo y residio
    echo "<br>";
    //operador +=
    $contador = 51;
    // $contador = $contador + 1;
    $contador %= 2; // residuo de 51=1
    echo $contador;

    //.= concatenando a la variable 
    echo '<br>';
    $nombreCompleto = 'Yuldor';
    $nombreCompleto .= ' Melody';
    $nombreCompleto .= ' Karen';
    echo $nombreCompleto;

    //operadores de incremento
    echo '<br>';
    $conta = 20;
    $conta += 1; //incremente
    echo $conta;

    //Post de incremento
    echo '<br>';
    echo $conta ++; //incremente
    echo '<br>';
    echo $conta;

    //Pre incremento
    echo '<br>'; //22
    echo ++$conta; //incremente
    echo '<br>'; //23
    echo $conta;

    //operadores de decremento
    echo '<br>';
    $conta =20;
    $conta -= 1; // = a -19
    echo $conta;

    //Post decremento
    echo '<br>';
    echo $conta--; //se muentra variable que es 19
    echo '<br>';
    echo $conta; //se decrementa y pasa a 18
    
    //Pre decremento
    echo '<br>'; 
    echo --$conta; //decrememnta a 17
    echo '<br>'; //17
    echo $conta;

    //Operador de ejecucion, comillas invertidas
    echo '<br>';
    // echo `dir * .php`;  //`dir * .php`  muestra toda la ruta, info de archivos etc
    

    //Presedencia de operadores
    $val = 20;
    echo $val++;  //21
    $contad = $val++;
    echo '<br>';
    echo $contad;
    echo '<br>';
    echo $val; //22

   echo '<br>';
   //ejemplo dos
   $valor1 =   3*4+2;
   echo $valor1;

   echo '<br>';
   //ejemplo tres
   $resultado1 = true && false; //&& se incia el lado derecho primero
   $resultado2 = true and false; //= se incia el igual primero y lo del lado que es true
   echo ($resultado1) ? 'Verdad' : 'Falso';
   echo '<br>';
   echo ($resultado2) ? 'Verdad' : 'Falso';
?>