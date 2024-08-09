<?php 
if (isset($_POST['enviar'])) {
    $usuario = htmlentities($_POST['usuario']);

    //configurar la cookie
    setcookie('usuario', $usuario, time()+3600);

    header("location: 54pagina3.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies php</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="usuario" placeholder="Ingresa el usuario"> 
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>