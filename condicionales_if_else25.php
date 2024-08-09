<?php  
    //ejercicio 1 if y else
    $edad = 18;

    // if($edad >= 18){
    //     echo "Pude ingresar es mayor a: "."".$edad;
    // }else {
    //     echo "Eres menor de edad no pudes ingresar";
    // }

    //ejericico 3
    echo "<br>";
    $identificacion = false; //booleano 
    if($edad >= 18  || $identificacion){  // && hace que deban cumplir de izquierda de derecha para ingresar dos true
        echo "Pude ingresar es mayor a: "."".$edad;
    }else {
        echo "Eres menor de edad no pudes ingresar";
    }

    //ejericico 4
    echo "<br>";
    $nombreCompleto = "Yuldor M"; //string 
    if(!is_null($nombreCompleto)){  //para negar =  !is_null
        echo "nombre no esta vacio";
    }else {
        echo "nombre esta vacio";
    }

    //ejericico 5
    echo "<br>";
    $nombreCompleto1 = ""; //string 
    if($nombreCompleto1 != ""){  //no es !=
        echo "nombre no esta vacio";
    }else {
        echo "nombre esta vacio";
    }

    //ejericico 6
    echo "<br>";
    $nombreCompleto2 = ""; //string 
    if(!empty($nombreCompleto2)){  //sino esta vacio !empty , es la mejor forma para evaluar los valores vacios
        echo "nombre no esta vacio";
    }else {
        echo "nombre esta vacio";
    }
  
    //ejericico 7 - Sintaxis sin llaves
    echo "<br>";
    $nombreCompleto3 = ""; //string 
    if(!empty($nombreCompleto3)) //sino esta vacio !empty , es la mejor forma para evaluar los valores vacios
        echo "nombre no esta vacio";  //sin llaves solo debe tener una linea
    else 
        echo "nombre esta vacio";

    //ejericico 7 - Validar tipos de dato
    echo "<br>";
    $edad1 = 25; 
    if($edad1 === "24"){  //solo si es igual a 24 | == solo estoy evaluando el valor | === evaluo ya el tipo de dato
        echo "INGRESA"; //no ingresa ya que es un entero y string
    }else{
        echo "NO INGRESA";
    } 
?>

<!--Cerramos con ?> y ahora iniciamos con HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesclar PHP con HTML</title>
</head>
<body>

<!--OPCION 1 DE USAR PHP EN HTML-->
    <?php if($edad1 == "24") { ?>
        <h2>INGRESA</h2>
    <?php } else { ?>
        <h2>NO INGRESA</h2>
    <?php } ?>
    
<!--OPCION 2 DE USAR PHP EN HTML {} a : -->
<?php if($edad1 == "24") : ?>
        <h2>INGRESA</h2>
    <?php  else : ?>
        <h2>NO INGRESA</h2>
    <?php endif ?>


</body>
</html>