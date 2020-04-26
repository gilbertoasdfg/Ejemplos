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
    <title>Registro usuario</title>
  <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body background="view/admin/img/inventario.png">
  <div class="container">

  <div class="starter-template">
    <br>
    <br>
    <br>
    <br><br><br>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">

          <form id="formulario_registro">
              <legend class="center"><b style="color: #FFFFFF">Registro</b></legend>
              
              <div class="form-group">
                <label><b>Nombre del administrador del sistema</b></label>
                <input type="text" class="form-control" name="name" autofocus placeholder="Ingresa tu nombre">
              </div>

              <div class="form-group">
                <label><b>Usuario</b></label>
                <input type="text" class="form-control" name="matricula" placeholder="">
              </div>
              
              <div class="form-group">
                <label><b>Contraseña</b></label>
                <input type="password" autocomplete="off" class="form-control" name="clave" placeholder="****">
              </div>
              
              <div class="form-group">
                <label><b>Confirmar contraseña</b></label>
                <input type="password" autocomplete="off" class="form-control" name="clave2" placeholder="****">
              </div>

              <div class="row" id="load" hidden="hidden">
                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                  <img src="img/load.gif" width="100%" alt="">
                </div>
                <div class="col-xs-12 center text-accent">
                  <span>Validando información...</span>
                </div>
              </div>

              <div class="">
                <div class="col-xs-8 col-xs-offset-2">
                  <div class="spacing-2"></div>
                  <button type="button" class="btn btn-primary btn-block" name="button" id="registro">Registrate</button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
    </div>
      

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/operaciones.js"></script>
  </body>
</html>
