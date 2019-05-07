
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

    <title>Inicio de sesion - Prueba técnica</title>
  </head>
  <body>
    
    <div class="container">
      <div class="row justify-content-md-center">
        <div id="marginTopLogin" class="col-md-4 col-sm-12 p-2 shadow p-3">
          <div id="error-msg" class="alert alert-danger" style="display:none" role="alert"></div>
          <form id="login" action="<?php echo $helper->url("Login","index");?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="email" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Ingrese su usuario" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary ">Login</button> 
            <a href="<?php echo $helper->url("Usuarios","crear");?>" class="btn btn-success ">No estoy registrado</a>
          </form>
        </div>
      </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="./Assets/js/bootstrap.min.js"></script>
    <script src="./Assets/js/jsCustomize.js"></script>
  </body>
</html>