<?php
// Manejador de excepciones personalizado
function manejador_excepciones_personalizadas($exception) {
    echo "Excepción capturada: " . $exception->getMessage();
}  

// Establecer el manejador de excepciones personalizado
set_exception_handler("manejador_excepciones_personalizadas");

//Ejemplo 1
echo "<br>";
try {
    // throw new Exception("Excepcion provocada");
} finally {
    echo "Esta linea se ejecuta siempre";
}

?>
