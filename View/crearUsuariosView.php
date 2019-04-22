<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./Assets/css/bootstrap.min.css" >

    <!-- style sheet customizable -->
    <link rel="stylesheet" href="./Assets/css/style.css" >

    <title>Registro de usuario - Prueba Tecnica</title>
  </head>
  <body>
    
    <div class="container">
        <div class="row justify-content-md-center">
            <div id="marginTopLogin" class="col-md-4 col-sm-12 p-2 shadow p-3">
            <form action="<?php echo $helper->url("Usuarios","crear");?>" method="POST">
                <div class="form-group">
                    <label for="name">Usuario</label>
                    <input type="email" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Ingrese su usuario">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su contraseña">
                </div>
                <div class="form-group">
                    <label for="password2">Repetir Contraseña</label>
                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Ingrese nuevamente su contraseña">
                </div>
                <a href="<?php echo $helper->url("Usuarios","index");?>" class="btn btn-primary ">Regresar</a>
                <button type="submit" class="btn btn-primary ">Crear Usuario</button>
                
            </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="./Assets/js/bootstrap.min.js"></script>
  </body>
</html>