<?php 

//try catch
/*
try{
error de bloque
}catch(){
salta aca si ahy error
}
*/

echo "<br>";
//ejemplo 1 dividir
function dividir($x, $y) : int{
    if($y <= 0){
        throw new Exception("Error, divicio po 0");
    }
    $resultado = $x/$y;
    return $resultado;
}

try {
    echo dividir(10, 0);
} catch ( Exception $e) {
    echo "Captura una excepcion: ".$e->getMessage();
    echo "<br>";
}
?>