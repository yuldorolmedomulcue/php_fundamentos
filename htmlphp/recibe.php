<?php //obtener los datos GET
var_dump($_POST);

//obtener el nombre
$nombre_enviado = isset($_POST['nombre']) ? $_POST['nombre'] : '';
echo $nombre_enviado;

//obtener el clave
// $password = $_GET['clave'];
// echo $password;

//obtener valor de un select
echo "<br>";
echo $tipo_documento = $_POST['tipoDocumento'];

//obtener datos desde un textarea
echo "<br>";
echo $observacion = $_POST['observacion'];

//Obtner checkbos
echo "<br>";
echo $cocina = isset($_POST['cocina']) ? "Cocina: ".$_POST['cocina'] : '';
echo "<br>";
echo $cine = isset($_POST['cine']) ? "Cine: ". $_POST['cine'] : '';
echo "<br>";
echo $lectura = isset($_POST['lectura']) ? "Lectura: ".$_POST['lectura'] : '';

//Obtner desde un select multiple
echo "<br>";
echo $vehiculo = $_POST['vehiculo'];
print_r($vehiculo);

//Obtner desde un radio button
echo "<br>";
echo $genero = $_POST['genero'];

//obtener desde un input file, no olvidar en el html: enctype="multipart/form-data" y el form
//debe ser tipo POST
var_dump($_FILES);
?>