<?php
  session_start();

  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body background="view/admin/img/inventario.png">

<div class="container">
  <br><br><br><br><br>
  <div class="starter-template">
    <br><br>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
            <legend class="center">Iniciar Sesión</legend>

            <div class="form-group">
              <label for="usuario"><b>Usuario</b></label>
              <input type="text" class="form-control" id="user" autofocus required>
            </div>

            <div class="form-group">
              <label for="usuario"><b>Contraseña</b></label>
              <input type="password" autocomplete="off" class="form-control" required id="clave" placeholder="********">
            </div>

            <div class="row" id="load" hidden="hidden">
              <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                <img src="img/load.gif" width="100%" alt="">
              </div>
              <div class="col-xs-12 center text-accent">
                <span>Validando información...</span>
              </div>
            </div>
            <div >
              <div>
                <div></div>
                <button type="button" class="btn btn-primary btn-block" name="button" id="login">Iniciar sesión</button>
              </div>
          </div>
     </div>
  </div></div>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/operaciones.js"></script>
  </body>
</html>
