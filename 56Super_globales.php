<?php 

/*Super global server*/
$servidor = [
    "host servidor" => $_SERVER["SERVER_NAME"],
    "Encabezado host" => $_SERVER["HTTP_HOST"],
    "Software servidor" => $_SERVER["SERVER_SOFTWARE"],
    "Encabezado host" => $_SERVER["DOCUMENT_ROOT"],
    "Pagina actual" => $_SERVER["PHP_SELF"],
    "Nombre del script" => $_SERVER["SCRIPT_NAME"],
    "Ruta absoluta" => $_SERVER["SCRIPT_FILENAME"]
];

print_r($servidor);

?>