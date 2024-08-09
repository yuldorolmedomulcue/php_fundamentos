<?php
// Validar envío POST
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (filter_has_var(INPUT_POST, "info")) {
//         echo "Información enviada";
//     } else {
//         echo "No se envió información";
//     }
// }

//validar email
// if (filter_has_var(INPUT_POST, "info")) {
//         if (filter_input(INPUT_POST, "info", FILTER_VALIDATE_EMAIL)) {
//         echo "Es un email valido";
//     } else {
//         echo "No es un email valido";
//     }
// }else{
//     echo "No se envio la informacion";
//}

//validar email
if (filter_has_var(INPUT_POST, "info")) {
    $email = $_POST['info'];
    //eliminar caracteres invalidos, lo limpia
    $email_limpio = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email_limpio;
} else {
    echo "No es un email valido";
}
echo "<br>";

//Diferentes tipos de validacion
//FILTER_VALIDATE_BOOLEAN
//FILTER_VALIDATE_EMAIL
//FILTER_VALIDATE_FLOAT
//FILTER_VALIDATE_INT
//FILTER_VALIDATE_IP
//FILTER_VALIDATE_REGEXP
//FILTER_VALIDATE_URL
//FILTER_VALIDATE_DOMAIN

//EJERCICIO VALIDANDO UN ENTERO;
echo "<br>";
$numero = 56;
if(filter_var($numero, FILTER_VALIDATE_INT)){
    echo "$numero es un numero entero";
}else{
    echo "No es un numero entero";
}
echo "<br>";

//saneando un numero entero 
$numeros2 = "5ff33f3##";
var_dump(filter_var($numeros2, FILTER_SANITIZE_NUMBER_INT));
echo "<br>";

//Ejercicio prevenir ejecucion de scripts
// $nombre = '<script>alert("hola")</script>';
// // echo $nombre;
// echo filter_var($nombre, FILTER_SANITIZE_SPECIAL_CHARS); //eliman codigos js
// echo "<br>";

//Filter input array
$filtros = array(
    "info" => FILTER_VALIDATE_EMAIL,
    "info2" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 50
        )
    )
);
print_r(filter_input_array(INPUT_POST, $filtros));

?>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="info">
    <input type="number" name="info2">
    <button type="submit">Enviar</button>
</form>
