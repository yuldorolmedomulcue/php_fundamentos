<?php  
/*Puede usarse para saltar a otra seccion en el programa*/
// $edad = 29;

// if($edad >20){
//     goto ingreso;
// }else{
//     goto error;
// }

// exit();
// ingreso:
// echo "Puede ingresar";
// echo "<br>";
// echo "<br>";

// exit();
// error:
// echo "No puede ingresar";

// echo "<br>";
//ejemplo 2. 
for ($i=0; $i < 20; $i++) { 
    if($i == 12){
        goto salto;
    }
}

exit();
salto:
echo "El valor actual es: $i";
?>