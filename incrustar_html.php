<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html con PHP</title>

    <!--Incrustar PHP a JS-->
    <script>
        <?php 
            echo "alert('Saludo Curso Moderno')";
        ?>
    </script>

</head>
<body>
    <h1>Curso Php</h1>

    <?php echo "Yuldor Mulcue"; ?>
    <?php 
        print "<h4>Titulo</h4>";
        echo '<hr>';
    ?>

    <h3>
    <?php 
        print "<h4>Titulo H4</h4>";
    ?>
    </h3>

    <!--Colores con CSs-->
    <h2 style="color:blue;" >Color Azul</h2>
    <h2  <?php echo 'style="color:blue;"'?>>Azul 2</h2>

</body>
</html>