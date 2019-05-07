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

    <title>Dashboard cliente - Prueba técnica</title>
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
      <div class="row mt-5">
        <h3>Listado de Clientes</h3>
        <table class="table table-striped mt-2">
          <thead>
            <tr>
              <th scope="col">Código</th>
              <th scope="col">Nombre</th>
              <th scope="col">Ciudad</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if($allClients){
              foreach($allClients as $client) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <tr> 
                  <?php echo "<td>".$client->cod."</td>"; ?> 
                  <?php echo "<td>".$client->name."</td>"; ?> 
                  <?php echo "<td>".$client->city."</td>"; ?> 
                    
                  <td>
                    <a href="<?php echo $helper->urlClient("Client","renderFormUpdate"); ?>&id=<?php echo $client->id; ?>"  class="btn btn-primary btn-sm">Actualizar</a>
                    <a href="<?php echo $helper->urlClient("Client","borrarCliente"); ?>&id=<?php echo $client->id; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                  </td>
                </tr>
              <?php 
            }} ?>
          </tbody>
        </table>
      </div>
      <div class="row  float-right">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Agregar Cliente
      </button>
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Registro de clientes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo $helper->urlClient("Client","crearCliente");?>" method="POST">
                  <div class="form-row">
                    <div class="col">
                      <input type="text" id="codigo" name="codigo" class="form-control" placeholder="Código">
                    </div>
                    <div class="col">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="col">
                      <input type="text" id="ciudad" name="ciudad" class="form-control" placeholder="Ciudad">
                    </div>
                  </div>
                  <div class="form-row mt-2 float-right">
                    <input type="submit" class="btn btn-primary" />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="./Assets/js/bootstrap.min.js"></script>
    <script src="./Assets/js/jsCustomize.js"></script>
  </body>
</html>