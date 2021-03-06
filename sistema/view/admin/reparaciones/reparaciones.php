<?php
  session_start();

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
  header('location: ../../../index.php');
  }
?>
<?php 
include("../conexion/conexion.php");
$pdo = connect();

  if(isset($_POST['Guardar'])){
    if(!isset($errMSG)){

    $sql = "INSERT INTO reparacion_cell (nombre_c, telefono, modelo_cell, descripcion_falla, precio_reparacion, fecha_entrada, estado) VALUES (:nom, :tell, :model_tell, :des_falla, :precio, CURDATE(), 0)";
    $query = $pdo->prepare($sql);
    $query->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
    $query->bindParam(':tell', $_POST['tell'], PDO::PARAM_STR);
    $query->bindParam(':model_tell', $_POST['model_tell'], PDO::PARAM_STR);
    $query->bindParam(':des_falla', $_POST['des_falla'], PDO::PARAM_STR);
    $query->bindParam(':precio', $_POST['precio'], PDO::PARAM_STR);
  
      if($query->execute()){
        $successMSG = "Nuevo producto insertado correctamente...";
        }
      else{
        $errMSG = "Error al insertar el producto...";
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Reparaciones</title>
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="">Inventario</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="../index.php">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Inicio</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="../inventario.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Inventario</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-glass"></i>
            <span class="nav-link-text">Productos</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="../producto/alta_producto.php">Nuevo producto</a>
            </li>
            <li>
              <a href="../producto/actualizar_producto.php">Actualizar producto</a>
            </li>
            <li>
              <a href="../producto/eliminar_producto.php">Eliminar producto</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="../ventas/productos.php">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span class="nav-link-text">Ventas</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" >
          <a class="nav-link" href="../alerta">
            <i class="fa fa-fw fa-exclamation-triangle"></i>
            <span class="nav-link-text">Alertas</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="../reabastecimiento/reabastecimiento.php">
            <i class="fa fa-fw fa-refresh"></i>
            <span class="nav-link-text">Reabastecimiento</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponent" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cogs"></i>
            <span class="nav-link-text">Reparaciones</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponent">
            <li>
              <a href="../reparaciones/reparaciones.php">Reparaciones</a>
            </li>
            <li>
              <a href="../reparaciones/pendientes.php">Pendientes</a>
            </li>
            <li>
              <a href="../reparaciones/entregados.php">Entregados</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponen" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-tasks"></i>
            <span class="nav-link-text">Reportes</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponen">
            <li>
              <a href="../reportes/diarios.php">Diarios</a>
            </li>
            <li>
              <a href="../reportes/especificos.php">Especificos</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
       <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i> <span ><?php echo ucfirst($_SESSION['nombre_usuario']);  ?></span></a>
        </li>
      </ul>
    </div>
  </nav>
  
<div class="container-fluid">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Desea Salir Del Sistema?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../../../controller/cerrarSesion.php">Cerrar Sesión</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../index.php">Inventario</a>
        </li>
        <li class="breadcrumb-item active">Reparaciones</li>
      </ol>
    <?php
  if(isset($errMSG)){
      ?>
            <div class="alert alert-danger">
              <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
  <?php
  }
  else if(isset($successMSG)){
    ?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
  }
  ?> 

  <form method="post" enctype="multipart/form-data" class="container">
      
  <div class="form-group">
      <label><b>Nombre completo del cliente:</b></label>
    <input type="text" class="form-control" name="nom" required="true" placeholder="Nombre del cliente">
  </div>

  <div class="form-group">
      <label><b>Teléfono:</b></label>
    <input title="Ejemplo 3231229991" type="tel" class="form-control" name="tell" required="true" placeholder="Telefono" pattern="^[1|2|3|4|5|6|7|8|9|0|]\d{9}$" onKeyPress="return soloNumeros(event)">
  </div>

  <div class="form-group">
      <label><b>Modelo del telefono:</b></label>
    <input type="text" class="form-control" name="model_tell" required="true" placeholder="Modelo" >
  </div>

  <div class="form-group">
      <label><b>Descripción de la falla:</b></label>
      <textarea class="form-control" required="true" name="des_falla" placeholder="Falla" rows="5"></textarea>
  </div>

  <div class="form-group">
      <label><b>Precio:</b></label>
    <input type="number" class="form-control" name="precio" required="true" placeholder="Precio del producto" onKeyPress="return soloNumeros(event)">
  </div>

  <button type="submit" name="Guardar" class="btn btn-default btn-lg btn-block">
    <span class="glyphicon glyphicon-save"></span> Guardar
  </button>
</form>
<br>
    </div>
    </div>

  <?php 
      include("../footer.php");
    ?>
<script type="text/javascript">
    function soloNumeros(e) {
   var key = window.Event ? e.which : e.keyCode;
   return ((key >= 48 && key <= 57) ||(key==8))
 }
  </script>
  
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="../js/sb-admin.min.js"></script>
    <script>$(document).ready(function() {
        $('#dataTable').DataTable({
            responsive: true,
            language: {
                url: '../js/es-ar.json' //Ubicacion del archivo con el json del idioma.
            }
        });
    });</script>
</body>
</html>