<?php

echo "<br>";
//Ejercicio 1: return
function validarUsuario($email){


    //si manda vacio impedir qeu se ejecute el siguinte codigo
    if(empty($email)){
        echo "El email esta vacio";
        return;
    }

    switch ($email) {
        case 'admin@admin.com':
            echo "Bienvenido admin";
            break;
        case 'user@user.com':
            echo "Bienvenido user";
        break;
        
        default:
            echo "No existe usuario";
            break;
    }
}
validarUsuario("admin@admin.com");
echo "<br>";
validarUsuario("user@user.com");
echo "<br>";
validarUsuario("");
?>