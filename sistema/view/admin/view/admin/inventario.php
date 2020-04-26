<?php
require_once 'dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Inventario</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php 
  include("menu.php");
  ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Inventario</a>
        </li>
        <li class="breadcrumb-item active">Productos disponibles</li>
      </ol>
       <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Productos</div>
        <div class="card-body">
          <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th scope="col"><center>Nombre </center> </th>
        <th scope="col"><center>Modelo</center> </th>
        <th scope="col"><center>Descripción</center> </th>
        <th scope="col"><center>Precio</center> </th>
        <th scope="col"><center>Cantidad en existencia</center> </th>
        <th scope="col"><center>Cantidad minima en inventario</center> </th>
      </tr>
    </thead>
<?php
  $stmt = $DB_con->prepare('SELECT * FROM producto');
  $stmt->execute();
  
  if($stmt->rowCount() > 0)
  {
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      extract($row);
      ?>
           
      <tr align="center">
        <td><?php echo $tipo ?></td>
        <td><?php echo $modelo ?></td>
        <td><?php echo $descripcion ?></td>
        <td>$<?php echo $precio_salida ?></td>
        <td><?php echo $can_existencia ?></td>
        <td><?php echo $can_minima ?></td>
      </tr>  
      <?php
    }
  }else{
    ?>
        <div class="col-xs-12">
          <div class="alert alert-warning">
              <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Datos no encontrados ...
            </div>
        </div>
    <?php
  }
?>
    </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
    
    <?php 
      include("footer.php");
    ?>
  <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
