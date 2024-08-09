<?php
echo "<br>";

/*Ejercicos 1, conbinmar strings usando (.)*/
$nombre = "Jose ";
$apellido = 'Montoya';

$nombreCompleto= $nombre . $apellido;
echo $nombreCompleto;
echo "<br>";

//Ejercio 2, concatrnar diferentes variables
$calificacion = 9;
$mayorEdad= true;

$infousuario = "El usuario: $nombreCompleto, tiene  una calificacion de:  $calificacion y es mayor de edad: $mayorEdad";
echo $infousuario;
echo "<br>";

//Ejercio 3, heredoc: para escribir un bloque de texto (String) y noudoc
$nombre2 = "Yuldor Mulcue";
$numero = 23;
echo <<< texto1
Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí".
$nombre2 es una persona
$numero * 2
(true) ? "Verdadero" : "Falso";
<strong>texto en negrilla</strong>
texto1;
echo "<br>";

//strlen - cantidad de caracteres
$nombres = "ff";
echo strlen($nombres);
echo "<br>";

//validar cantidad de caracteres // forma recomendad para cantidad
if (strlen($nombres)){
    echo $nombres;
    echo "<br>";
}else{
    echo "El nombre esta vacio";
    echo "<br>";
}
echo "<br>";


/*Strpos - Encontrar la posicion de un string*/
$texto = "Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por";
$textoABuscar = "sitio";
$posicion = strpos($texto, $textoABuscar);
echo $posicion;
echo "<br>";

//comparar posicion string
if($posicion === false){
    echo "No encontrado";
    echo "<br>";
}
echo "<br>";

//str_replace - remplazar stringa
$texto3 = "hjfhdjklhbak hfdgjkhgk jdfhgjkdh hjkfdhgjk dfkhg khkjdfhgjkdhfkjg hkjdfhjkdhgjkdf";
echo $texto3;
echo "<br>";
echo "texto a remplazar ". str_replace('jdfhgjkdh', 'MASIVO', $texto3);
echo "<br>";
echo "<br>";

//str_word_count -  contar palabras
$articulo = "Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por";
echo "Cantidad de palabras: ". str_word_count($articulo);
echo "<br>";
echo "<br>";

//Str_shuffle - Reordenar aleatoriamente un string
$producto = "Acetaminofen";
$ordenar_prodcuto = str_shuffle($producto);
echo $ordenar_prodcuto;
echo "<br>";
echo "<br>";

//strpost - HAllar la posicion de un string
$texto4 = "Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras";

echo "La palabra esta en la pocision: ".strpos($texto4, 'texto');
echo "<br>";
echo "<br>";

//Convertir a minusculas 
echo strtoupper($texto4);
//convertir a mayusculas
echo strtolower($texto4);
echo "<br>";
echo "<br>";


//wordwrap - Envolver la cantidad de caracteres
$texto5 = "FFFFFFFFLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años";
echo $texto5;
echo "<br>";
echo wordwrap($texto5, 20, "<br>\n");
echo "<br>";
echo "<br>";


//Trim - Eliminar espacios en blanco en el texto
$texto6 = "         Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de la       s industrias desde el año 1500";
echo trim($texto6);