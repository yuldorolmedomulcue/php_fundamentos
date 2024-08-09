<?php
    define('CUOTA', 200000);
    $valorCuota = CUOTA;
    echo "el valor de la cuota: $valorCuota";
    echo "<br>";
    echo "el valor de la cuota: CUOTA";
    echo "<br>";
    echo "El valor de la cuota:" .CUOTA. "<br>";

    //no podemos rredifinir constantes 
    // define('CUOTA', 500000);
    // echo "<br>";
    // echo "el valor de la cuota: ".CUOTA. "<br>" //Constant CUOTA already defined
    
    echo "<br>";
    //acceder con el metodo constant
    echo constant('CUOTA');

    //no podemos usar isset
    // define('VERSION', '');
    // echo isset(VERSION);


    //buenas practicas con CONSTANTES
    //MAYUSCULAS
    define ('NOMBRE', 'Yuldor Mulcue');

    //No usar nombres de CONSTANTES como:
    define('_NOMBRE_', 'Yuldor Mulcue');

    //no usar nombres de CONSTANTES con guion bajo
    define('_1NOMBRE_', 'Yuldor Mulcue');

    echo "<br>";
    //Magic CONSTANT
    echo __lINE__."<br>"; //en que linea estoy
    echo __DIR__; //ruta completa


?>