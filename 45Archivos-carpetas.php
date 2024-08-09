<?php  
/*
Listar archivos
Validar archivos en carpeta 
Validar si el nombre es un archivo o carpeta
Buscar coincidencias de archivo o carpeta 
Crear un directorio
Copiar un archivo entre directorios
*/

//Ejemplo 1. Listar files en un directorio, NO MAYUSCULAS
$ruta = "Carpeta5";
$resultado = scandir($ruta);
var_dump($resultado);
echo "<br>";
echo "<br>";

//Imprimir files sin puntos
foreach ($resultado as $archivo) {
    if($archivo != "." && $archivo != ".."){
        echo $archivo;
        echo "<br>";
    }
}
echo "<br>";
echo "<br>";

//Remover (.) y (..)
$archivos = array_diff($resultado, [".", ".."]);
var_dump($archivos);
echo "<br>";
echo "<br>";

//Ejemplo 2, Validar archivos en carpetas (sin los puntos)
$ruta = "Carpeta6";
$resultado = scandir($ruta);
foreach ($resultado as $archivo) {
    if (is_file($ruta . "/" .$archivo)) {
        echo $archivo;
        echo "<br>";
    }
}
echo "<br>";
echo "<br>";

//Buscar coincidencias de archivo en un patron
$resultado = glob("*.php");
var_dump($resultado);
echo "<br>";
echo "<br>";

//crear un directorio
if (!file_exists("carpeta_prueba3")) {
    mkdir("carpeta_prueba3");
}
echo "<br>";
echo "<br>";

//Copiar archivos
copy("carpeta5/text1.txt", "carpeta6/text1.txt");
echo "<br>";
echo "<br>";

//Verficar si una carpeta o archivo existe
$archivo = "archivo_test5.txt";
if (file_exists($archivo)) {
    echo "El archivo o directorio existe";
    echo "<br>";

    //validar si es un directorio
    if (is_dir($archivo)) {
        echo "Es un directorio";
        echo "<br>";
    }else{
        echo "Es un archivo";
        echo "<br>";
    }

    //Copiar archivo
    copy($archivo, "carpeta_prueba3/$archivo");

    //renombrar archivo
    rename($archivo, "archivo_test5.txt");

    //Borrar una archivo
    unlink("archivo_test5.txt");

}else {
    echo "No existe archivo o directorio";
    echo "<br>";
    // die("no hay archivos");
}
echo "<br>";   
echo "<br>";

/*-------------------------------Carpetas parte 2----------------------------------------------*/
//Abrir, leer contenido de un archivo y cerrarlo
//Modos de archivo
// r---read(lectura)
// w---write(Escritura)
// a---append(Adjuntar)


//Metodo 1
$nombre_archivo = "contenido15.txt";
//leer el contenido
$contenido = file_get_contents($nombre_archivo);
//imprimir el contenido
echo "<br>";
echo $contenido;
echo "<br>";
echo "<br>";

//Metodo 2, abrir archivo
$manejar_archivo = fopen($nombre_archivo, "r");
$tamanio_archivo = filesize($nombre_archivo);
//leer contenido
$contenido2 = fread($manejar_archivo, $tamanio_archivo);
//mostrar
echo $contenido2;
//cerrar archivo 
fclose($manejar_archivo);
echo "<br>";
echo "<br>";

//Escribir archivos o cambiar el texto de otro file
$manejar_archivo2  = fopen($nombre_archivo, "w") or die("Imposible escribir");
fwrite($manejar_archivo2, "YuldorMUlcue.web");
fclose($manejar_archivo2);
echo "<br>";
echo "<br>";

//Leer archivo de configuracion como un array
$config = parse_ini_file("ejemplo.ini");
print_r($config);
echo "<br>";
foreach ($config as $key => $value) {
    echo $key. "=>".$value;
    echo "<br>";
}
echo $config["tag2"];
echo "<br>";
?>