<?php 
    //definiendo varibles $
    $nombre = "YuldorMulcue";

    //definicion de variables;
    $url= "www.youtube.com";
    echo "<h3>Direccion</h3>";
    echo $url;
    echo  "<br />";

    //cambiar el valor de varible
    $url ="www.facebook.com";
    echo $url;
    echo  "<br />"; //salto de linea

    //varibles tipo string y cancatenar
    $apellidos ="Mulcue Mulcue";
    $mensaje ="Mi primer String";
    echo $apellidos.": ".$mensaje;
    //print "$apellidos: $mensaje"; otra opcion
    echo "<br />";

    //variables enteros
    $estatura = 165;
    //echo 'Mi estatura es: '. $estatura;  otra opcion
    echo "Mi estatura es: $estatura";
    echo "<br />";

    //sumar dos valores
    /*$num1 =10;
    $num2 =5;
    $total = $num1+$num2;
    echo "El resultado es: $total"*/

    //tipado de varibles
    $num1 ="10";
    $num2 =5;
    $total = $num1+$num2;
    echo "El resultado es: $total";

    //Introduccion rapida a las varibles;
    function restar()
    {
        $num5 = 7;
        $num6 = 4;
        $totalResta = $num5-$num6;
        echo "Resultado de la resta es: $totalResta";
    }
    echo "<br />";
    restar();

    //no se puede redeclarar funcion
    /*function restar()
    {
        $num5 = 7;
        $num6 = 4;
        $totalResta = $num5-$num6;
        echo $totalResta;
    }

    echo "<br />";
    restar();*/

    //Se puden poner las iniciales iguale M m y Php no los aceptara.
    $nombre= "Yuldor";
    $Nombre= "Melody";
    echo "<br/>";
    echo "El nombre es: $nombre, y el segundo nombre es: $Nombre";

    //Funciones no son case sensitive
    /*function restar2()
    {
        $suma5 = 7;
        $suma6 = 5;
        $totalResta = $num5 - $num6;
        echo $totalResta;
    }
    echo "<br />";
    RESTAR2();*/


    //5 variable local SCOPE(Alcance)
    $contacto = "Yuldor Mulcue";
    
    function mostrarContacto(){
        $contacto =  "Ing Yuldor";
        echo $contacto;
    }
    echo "<br />";
    mostrarContacto();
    echo "<br />";
    echo $contacto;


    //6 variables globales
    global $mensaje;  //global solo genera un mensaje
    $mensaje = "Saludo";
    function mostrarContacto3(){
        global $mensaje; //se imprime primero este, funcion
        echo $mensaje;
    }
    echo "<br />";
    mostrarContacto3();
    echo "<br/>";
    echo $mensaje;


    //Varibales estaticas
    function contador(){
        static $num =1; //static = inrementara valores
        echo $num;
        $num = $num + 1;   
    }
    echo "<br>";
    contador();
    echo "<br>";
    contador();
    echo "<br>";
    contador();
    echo "<br>";

    //Variables superglobales
    $saludo4;
    $saludo4 = "Bienvenidos";
    echo $GLOBALS['saludo4'] . "<br>";
    //Variables superglobales predifinidas
    echo "Nombre archivo: " . $_SERVER['PHP_SELF'];
    echo "<br>";
    
    //Variables de variables
    $persona = "Yuldor Mulcue";
    $hombre = "persona";
    $genero = "hombre";
    // echo $hombre;
    // echo "<br>";
    // echo $persona;
    echo "<br>";
    echo $$hombre;
    echo "<br>";
    echo $genero;

    // //Variables o metodos para variables predefinidas
    // $division = 4 / 1;
    // $err = $error_get_last();
    // var_export($err);

    //variable setead isset
    echo "<br>";
    $telefono = 342424;
    echo $telefono;

    echo isset($telefono) ? "variable definida" : 
    "variable indefinida";