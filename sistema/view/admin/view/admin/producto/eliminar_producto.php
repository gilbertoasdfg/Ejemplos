<?php
require_once '../dbconfig.php';

if(isset($_GET['delete_id'])){
    $stmt_delete = $DB_con->prepare('DELETE FROM producto where id_producto=:id');
    $stmt_delete->bindParam(':id',$_GET['delete_id']);
    $stmt_delete->execute();
    ?>
        <script>
			alert('Producto eliminado correctamente');
			window.location.href='eliminar_producto.php';
		</script>
    <?php
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
  <title>Productos</title>
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
              <a href="alta_producto.php">Nuevo producto</a>
            </li>
            <li>
              <a href="actualizar_producto.php">Actualizar producto</a>
            </li>
            <li>
              <a href="eliminar_producto.php">Eliminar producto</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span class="nav-link-text">Ventas</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" >
          <a class="nav-link" href="">
            <i class="fa fa-fw fa-exclamation-triangle"></i>
            <span class="nav-link-text">Alertas</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="">
            <i class="fa fa-fw fa-refresh"></i>
            <span class="nav-link-text">Reabastecimiento</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="">
            <i class="fa fa-fw fa-cogs"></i>
            <span class="nav-link-text">Reparaciones</span>
          </a>
        </li> 
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="">
            <i class="fa fa-fw fa-tasks"></i>
            <span class="nav-link-text">Reportes</span>
          </a>
        </li>  
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../index.php">Inventario</a>
        </li>
        <li class="breadcrumb-item active">Eliminar producto</li>
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
        <th scope="col"><center>Eliminar</center> </th>
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
        <td><a class="btn btn-danger" href="?delete_id=<?php echo $row['id_producto']; ?>" title="click for delete" onclick="return confirm('Desactivar, esta seguro ?')"><span class="glyphicon glyphicon-remove-circle"></span> Eliminar</a></td>
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
    include("../footer.php");
  ?>

  	<script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="../js/sb-admin.min.js"></script>
    <script src="../js/sb-admin-datatables.min.js"></script>
</body>
</html>