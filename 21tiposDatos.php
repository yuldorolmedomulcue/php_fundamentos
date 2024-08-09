<?php  
/*
Integeraa o enteros son numeros
No contienen decimales
Pueden ser Positivos o negativos
Puede contener numeros octales (base 8), hexadecimales
(base 16) y binarios (base 2)
*/

    echo '<br>';
    echo '--------------ENTEROS----------------';
    echo '<br>';

    $puntaje = 120;
    echo $puntaje;

    echo '<br>';
    //hexadecimal
    $numHexa = 0x6FFF6;
    echo $numHexa;
    
    echo '<br>';
    //convertir string a entero
    $puntaje = 20;
    $total = '120' + $puntaje; //suma y da 140
    echo $total;

    echo '<br>';
    //numeros negativos 
    $puntajeTotal = 8-20; //enteros pueden ser num negarivos too
    echo $puntajeTotal;
    
    echo '<br>';
    //Obtener tama;o de un entero (Determinado por el sistema)
    echo  PHP_INT_SIZE;

    echo '<br>';
    //Obtener el minimo numero entero (Determinado por el sistema)
    echo  PHP_INT_MIN;

    echo '<br>';
    //Obtener maximo de un numero entero (Determinado por el sistema)
    echo  PHP_INT_MAX;

    echo '<br>';
    echo '<br>';
    echo '--------------DECIMALES----------------';
    echo '<br>';
    //Definir decimales
    /*
    Decimales son numeros reales
    Se ecriben con punto (.)
    Se pueden redondear con round()
    Puden ser negativos
    */
    $pagoTotal = 12.33;
    echo '<br>';
    echo $pagoTotal;

    $saldoPendiente = -65.200;
    echo '<br>';
    echo $saldoPendiente;

    //redondear decimales 
    $puntaje = 48.49;
    echo '<br>';
    echo round($puntaje);

    //comparar decimales con presicion de 0.1
    $precio = 1.87;
    $estimado = 1.97;
    echo '<br>';
    echo (abs($precio - $estimado) < 0.1) ? 'PAGA' : 'No paga';  // si?  de lo contrario :

    echo '<br>';
    echo '--------------BOOLEANOS----------------';
    echo '<br>';
    //Definir Booleanos
    /*
    Verdadero o falso: true or false
    No son case sensative
    Cuando se imprime echo true=1 y false=0
    Para los valores enteros 0 es false y 
    cualquier otro valor diferente de 0 es true 
    Son usados en condicion para validar cosas
    */
    $puedeAcceder=true;
    $validado=false;
    echo ($puedeAcceder) ? 'Vedadero' : 'Falso';  //si o de lo 
    echo '<br>';
    echo ($validado) ? 'VERDADERO' : 'Falso';  //si o de lo contrario

    //Imprimiendo variables booleanos
    echo '<br>';
    echo 'Verdadero: '.  $puedeAcceder. "<br>";
    echo '<br>';
    echo 'Falso: '. $validado. '<br>';

    //Como usar un string como booleano 
    $estaLogueado = true;
    $inicioSesion = 'Yuldor Mulcue';
    echo ($estaLogueado && $inicioSesion) ?'Usuario logueado' : 'No se puedo loguear';

    //Como usar un entero como booleano 
    echo '<br>';
    $estaLogueado = true;
    $inicioSesion = 0;
    echo ($estaLogueado && $inicioSesion) ?'Usuario logueado' : 'No se puedo loguear';
    echo '<br>';
    echo '<br>';

    echo '--------------VAR STRINGS----------------';
    /*
    Definie strings
    Los strings se definen en doble o comillas simples
    Las comillas dobles puden interpolar, las varibles simples no
    Aunque  no hay limite en general para una varible strings, este si esta definido por el sistema
    Se deben escapar los caracters de comillas dobles y otros caracteres
    Se puden realizar tareas de manipulacion sobr elos strings con otros metodos
    */
    echo "<br>";
    $nombre = 'Yuldor M';
    $apellidos = "Montolla";
    echo "$nombre y $apellidos";
    echo "<br>";
    //combinando Strings
    $nombre2 = $nombre . " - ". $apellidos;
    echo $nombre2;

    //Escapar carcateres con contra barra o backslash \\
    echo "<br>";
    $nombre3 = "Ejemplo de caracter \"especial\" ";
    echo $nombre3;

    //Introduccion a los metodos para operaciones con strings, obtener la longitud de un strings
    //strlent  = obtner la longitud de string
    echo "<br>";
    $nombre4 = "Carlos P";
    echo "canidad de caracteres son: " ." ".  strlen($nombre4); //conmcatenar ."".
    echo "<br>";
    echo "<br>";

    echo '--------------NULL----------------';
    echo "<br>";
    /*
    Null no es case sensative NULL/null 
    Es usualmente usado para inicializar una varibale con u valor vacio 
    Usa metodos como unset y is_null
    */
    echo "<br>";
    $documento = null;
    echo $documento; 
    echo ($documento) ? "contiene valor" : "sin valor";

    // Metodo is_null
    echo "<br>";
    $documento = "0"; //contiene valor ya que es 0
    echo (!is_null($documento)) ? "contiene valor" : "sin valor"; //sino !is_null

    //como borrar la varible del programa y memoria con unset()
    echo "<br>";
    unset($documento);
    // echo (!is_null($documento)) ? "contiene valor" : "sin valor"; // ya no existe ya que fue desmontado por unset

    
?>