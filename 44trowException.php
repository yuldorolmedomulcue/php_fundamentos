<?php
// Manejador de excepciones personalizado
function manejador_excepciones_personalizadas($exception) {
    echo "Excepción capturada: " . $exception->getMessage();
}  

// Establecer el manejador de excepciones personalizado
set_exception_handler("manejador_excepciones_personalizadas");

// No hay necesidad de usar try-catch
// Ejemplo 1
// throw new Exception("Error, división por 0");


//Ejemplo 2
function dividir($x, $y) : int{
    if($y <= 0){
        throw new Exception("Error, divicion por 0");
    }
    $resultado = $x/$y;
    return $resultado;
}
dividir(12,0);

?>
