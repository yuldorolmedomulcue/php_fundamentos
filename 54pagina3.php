<?php 
if (isset($_COOKIE['usuario'])) {
    echo "Usuario: ".$_COOKIE['usuario']." Esta configurado <br>";
}

//Desmontar una cookie
setcookie('usuario', $usuario, time()-3600);

//validar si hay cookies guardadas
if (count($_COOKIE)> 0) {
    echo "Hay ".count($_COOKIE)." cookie guardada";
}else{
    "no se guardo cookie";
}
?>