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

    <title>Actualizacion de datos - Clientes</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Prueba Técnica</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?php echo $helper->urlClient("Client","dashboardClient");?>">Clientes <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?php  echo $helper->url("Usuarios","dashboard");?>">Usuarios</a>
          <a class="nav-item nav-link" href="#">Salir</a>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row justify-content-md-center">
        <h3 id="marginTopLogin">Actualización de datos - Módulo clientes</h3>
      </div>
      <div class="row justify-content-md-center">
        <div  class="col-md-4 col-sm-12 p-2 shadow p-3 mt-3">
          <form action="<?php echo $helper->urlClient("Client","updateClient");?>" method="POST">
            <div class="form-group">
                <label for="name">Código</label>
                <input type="text" class="form-control" name="codigo" id="codigo" aria-describedby="emailHelp" placeholder="Código del cliente" value="<?php echo $clientUpdates->cod; ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del cliente"  value="<?php echo $clientUpdates->name; ?>" required required>
            </div>
            <div class="form-group">
                <label for="password2">Ciudad</label>
                <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ingrese nuevamente su contraseña"  value="<?php echo $clientUpdates->city; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary ">Actualizar Usuario</button>   
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