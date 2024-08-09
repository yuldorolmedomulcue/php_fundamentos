<?php

/*Defincion de array*/
$numeros = [3,4,true,6.4];
//imprimir
var_dump($numeros);
//mas legible
print_r($numeros);
//no se usa echo
echo "<br>";


//Acceder e imprimir elemento array
echo $numeros[2];
echo "<br>";

//Contar elementos de un array
echo "Catidad de elementos: ".count($numeros);
echo "<br>";
echo "<br>";

//Recorrer array con un ciclo for
for ($i=0; $i < count($numeros); $i++) { 
    echo $numeros[$i];
    echo "<br>";
}
echo "<br>";
echo "<br>";

//Acceder a un elemento de array con una constante
const ELEMENTO = 3;
echo "{$numeros[ELEMENTO]}";
echo "<br>";
echo "<br>";

//camabiar los elementos de un array
print_r($numeros);
echo $numeros[0] = 18;
echo "<br>";
print_r($numeros);

//cambiar el tipo de datos
echo "<br>";
print_r($numeros);
echo $numeros[0] = true;
echo "<br>";
echo $numeros[1] = 11.54;

var_dump($numeros);
echo "<br>";
echo "<br>";

//Cualquier tipo dato en el array | 
$jemeploArray = ['yuldor', 
                    3, 
                    33.3, 
                    true
                ];
    print_r($jemeploArray);
    echo "<br>";
    echo "<br>";


    //ciclo foreach para array con contador
    $meses = ["Enero", "Febrero", "true", "Abril", "Mayo"];
    $contador = 0;
    foreach ($meses as $valor) {
        // echo $valor;
        echo "[$contador] => $valor";
        echo "<br>";
        $contador++;
    }
    echo "<br>";
    echo "<br>";  

//ciclo foreach para array con contador usando diferentes tipos de datoas
    $meses = ["Enero", true, 13.4, "Abril", 12];
    $contador = 0;
    foreach ($meses as $valor) {
        echo "[$contador] => $valor";
        echo "<br>";
        $contador++;
    }
    echo "<br>";        
    echo "<br>";


    //Array Vacio
    $nombres1 = [];
    echo count($nombres1);
    var_dump($nombres1);
    print_r($nombres1);
    echo "<br>";        
    echo "<br>";


    //validar un array vacio
    if (empty($nombres1)) {
       echo "Array vacio";
    }
    echo "<br>";        
    echo "<br>";

    //Agregar otro array a la pocision 0
    $nombres[0]=['Carlos'];
    var_dump($nombres);
    echo "<br>";        
    echo "<br>";

    //resetear un array
    $nombres= [];
    var_dump($nombres);
    echo "<br>";        
    echo "<br>";

    //meter un array dentro de otro
    $array2 = [[]];
    var_dump($array2);
    echo "<br>";        
    echo "<br>";

    //Array mesclados
    $array3 = [];
    $array3[0] = 4;
    $array3[3] = 98;
    $array4[7] = "Yon";
    $array3[12] = 22.22;
    var_dump($array3);
    echo "<br>";
    //si no se especifica el array , se usa el ultimo array
    $array3[] = "Carlos";
    $array3[] =  "Mulcue";
    var_dump($array3);

//como camabiar el valor de un elemento dentro del array
$array3[0] = "Antes era 4, ahoes esdte texto";
var_dump($array3);

//como recorre un valor
foreach ($array3 as $valor) {
    echo $valor;
    echo "<br>";
}
echo "<br>";
echo "<br>";

/*------------------------------------Arrays Asociativos------------------------------------*/
$meses = ["Enero" => 1, "Febrero" => 2, "Marzo" => 3, "Abril" => "Feb", "Mayo" =>5];

//Recorrer o acceder a array asociativo
foreach ($meses as $key => $value) {
    echo $key." = ".$value;
    echo "<br>";
}

//Imprimir las llaves de un array asociativo
print_r(array_keys($meses));
echo "<br>";

//acceder a los valores
foreach ($meses as $valor) {
    echo $valor;
    echo "<br>";
}
echo "<br>";
echo "<br>";

//accede a un avlor en array asociativo
$agenda = [ "jose" => "jose@gmail.com", 
            "marta" => "marta@gmail.com",
            "yuldor" => "yuldor@gamil.com",
        ];
    echo $agenda["marta"];
    echo "<br>";
    var_dump($agenda);

/*-------------------------------Arrays Multidimensionales------------------------------------*/
//Array indexado de una dimension
echo "<br>";
echo "<br>";
$arrayUnaDimension =[1,2,3,4,5];
var_dump($arrayUnaDimension);
echo "<br>";
echo "<br>";

//array asociativo de una dimension
$agenda = [ "jose" => "jose@gmail.com", 
            "marta" => "marta@gmail.com",
            "yuldor" => "yuldor@gamil.com",
        ];
var_dump($agenda);
echo "<br>";
echo "<br>";

//Array multidimensional
$array4 = [
            [1,2,3,4,5],
            [43,44,33,44],
            [3,6,10,33,33]
];
var_dump($array4);
echo "<br>";
echo "<br>";

//Convierte a un diemsion. se imprime los valores por separado
foreach ($array4 as $arrayUnaDimension) {
    var_dump($arrayUnaDimension);
}

//
foreach ($array4 as $arrayUnaDimension) {
    echo " ";
    foreach ($arrayUnaDimension as $valor) {
        echo $valor.", ";
    }
    echo "]";
    echo "<br>";
}


/*-------------------------------Arrays Asociativo Multidimensional--------------------*/
$array5 = ["ListaEmail" => [ 
    "jose" => "jose@gmail.com", 
    "marta" => "marta@gmail.com",
    "yuldor" => "yuldor@gamil.com",
    ],
    "ListaTelefon" => [ 
        "jose" => "1211212", 
        "marta" => "3424322",
        "yuldor" => "4324422",
        "pedro" => "232323"
        ]
];
echo "<br>";
//recorrer array asociativo muldiemsional
foreach ($array5 as $valoresArray) {
    foreach ($valoresArray as $valor) {
        echo $valor;
        echo "<br>";
    }
}
//acceder a las llaves/valor key value pairs
echo "<br>";
//recorrer array asociativo muldiemsional
foreach ($array5 as $key => $valoresArray) {
    echo "llaves: $key";
    echo "<br>";
    
    foreach ($valoresArray as $valor) {
        echo $valor;
        echo "<br>";
    }
}
