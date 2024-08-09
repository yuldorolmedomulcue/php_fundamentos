<?php 
//Date(format, timestamp)
//Documentacion:
echo "<br>";

//Ejercicio1, imprimir fecha actual
$fecha_actual= date("d-m-y");
echo $fecha_actual;
echo "<br>";
echo "<br>";

//Ejercicio2, imprimir fecha actual
$fecha_actual = date("D-M-Y");
echo $fecha_actual;
echo "<br>";
echo "<br>";

//Ejercicio2, imprimir hora
$fecha_actual = date("yy-m-d h:i:s:a");
echo $fecha_actual;
echo "<br>";
echo "<br>";

//Ejercicio2, imprimir hora
$fecha_actual = date("Y-M-D h:i:s:a");
echo $fecha_actual;
echo "<br>";
echo "<br>";

//Ejercicio5, imprimir tiempo en milisegundos
$tiempo_milisegundos =time();
echo $tiempo_milisegundos;
echo "<br>";
echo "<br>";

//Ejercicio5, incrementar tiempo en milisegundos
$tiempo = time() + 1000;
echo "Fecha actual: ".date("y-m-d h:i:s:a", $tiempo);
echo "<br>";
echo "<br>";

//Ejercicio6, leer el timestamp o fecha completa
$fecha_completa = getdate();
var_dump($fecha_completa);
foreach ($fecha_completa as $key => $value) {
    echo "$key => $value";
    echo "<br>";
}
echo "Dia de la semana: ".$fecha_completa["weekday"];//accedemos por valores del foreach
echo "<br>";

//opcion2
echo "Dia del mes: ".getdate()["weekday"];
echo "<br>";
echo "<br>";

/*------------------------Funciones para trabajar con fechas--------------------------------*/
echo date_create("now")->format("Y-m-d H:i:s");
echo "<br>";
//Sumar un dia a la fecha
echo date_create("+1 day")->format("Y-m-d H:i:s");
echo "<br>";
//Restar un dia a la fecha
echo date_create("-2 day")->format("Y-m-d H:i:s");
echo "<br>";
echo "<br>";

/*------------------------Funciones para trabajar con fechas2--------------------------------*/
//Convertir un string a fecha
$string = "2024-08-01 11:20:00";
$convertir = strtotime($string);
echo date("d/M/yy H:i:s", $convertir);
echo "<br>";
echo "<br>";

//Obtener el tiempo por zona
//Fecha actual
echo date_default_timezone_get();

//Formatear la fecha
echo date("d/m/y h:i:s a");
echo "<br>";
//Configura le fecha por defecto
date_default_timezone_set("America/Bogota");
echo "<br>";
echo date_default_timezone_get();
echo "<br>";
//Formatear la fecha
echo date("d/m/y H:i:s a");
echo "<br>";
echo "<br>";

//Mostrar diferencia de tiempo
$fechaA = time();
// sleep(20);
$fechaB = time();
$diferencia = ($fechaB - $fechaA) / 60;
echo $diferencia;
echo "<br>";
echo "<br>";

//Obtener la diferencia de dos fechas
$fecha_incial = date_create("2024-08-01 11:32:00");
$fecha_final = date_create("2024-08-02 12:33:10");
$diferencia_fechas = date_diff($fecha_final, $fecha_incial);
echo "<br>";
print_r($diferencia_fechas);
echo "<br>";
echo "<br>";

//Crear fecha con mktime
//Lafuncion mktime() retorna el timestap Unix 
//para un fecha. la fecha timestamp contien el eche Unix 
//(January 1 1970 00:00:00 GMT) y la fecha determinada

//Crear fecha apartir de numeros enteros
$d = mktime(10,2,33,2,12,2015);
echo "Fecha creacion: ".date("Y-m-d h:i:sa", $d);

?>