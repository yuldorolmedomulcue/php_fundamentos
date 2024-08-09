<?php
// //obtener los datos GET
// var_dump($_GET);

// //obtener el nombre
// $nombre_enviado = isset($_GET['nombre']) ? $_GET['nombre'] : '';
// echo $nombre_enviado;

?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Campos Html PHP</title>
  </head>
  <body>

    <div class="conainer">
    <h1>Campos de formulario html con PHP</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="recibe.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>

                    <!-- <div class="form-group">
                        <label for="clave">Clave</label>
                        <input type="password" class="form-control" name="clave">
                    </div> -->

                    <h4>Pasatiempos</h4>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="cocina">
                        <label class="form-check-label" for="cocina">Cocina</label>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="cine">
                        <label class="form-check-label" for="cine">Cine</label>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="lectura">
                        <label class="form-check-label" for="lectura">Lectura</label>
                    </div>

                    <div class="form-group">
                        <label for="tipoDocumento">Tipo Documento</label>
                        <select class="form-control" name="tipoDocumento">
                            <option value="Cedula">Cedula</option>
                            <option value="Registro civil">Registro civil</option>
                            <option value="Pasaporte">Pasaporte</option>
                        </select>

                    <div class="form-group">
                        <label for="vehiculo">Vehiculo</label>
                        <select multiple class="form-control" name="vehiculo[]" id="vehiculo">
                            <option value="Carro">Carro</option>
                            <option value="Moto">Moto</option>
                            <option value="Bicicleta">Bicicleta</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Observacion">Observacion</label>
                        <textarea class="form-control" name="observacion" rows="3"></textarea>
                    </div>

                    <!--Subida de archivo-->
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control-file" name="foto">
                    </div>

                    <h4>Genero</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genero" value="masculino">
                            <label class="form-check-label" for="masculino">Masculino</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  name="genero" value="femenino">
                            <label for="femenino" class="form-check-label" for="femenino">Femenino</label>
                        </div>

                        <input type="hidden" value="44">
                        <button  type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>