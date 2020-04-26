<?php
  session_start();

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
  header('location: ../../../index.php');
  }
?>
<?php
include "php/conection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Lista de productos en venta</title>
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
          <a class="nav-link" href="productos.php">
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
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../index.php">Inventario</a>
        </li>
        <li class="breadcrumb-item active">Venta</li>
      </ol>
		<a href="./lista_venta.php" class="btn btn-warning">Ver lista de ventas</a>
			<br><br>
		<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Productos</div>
        <div class="card-body">
          <div class="table-responsive">
          	<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("select * from producto where existencia > 0 and estado = 1");
?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th><center>Nombre</center></th>
    		<th><center>Modelo</center></th>
    		<th><center>Cantidad en inventario</center></th>
    		<th><center>Precio</center></th>
    		<th><center>Cantidad de producto</center></th>
    		<th></th>
      </tr>
    </thead>
<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
while($r=$products->fetch_object()):?>
      	
	<tr>
	<form class="form-inline" method="post" action="./php/addtocart.php">
	<td><center><?php echo $r->tipo;?></center></td>
	<td><center><?php echo $r->modelo;?></center></td>
	<td style="width:150px;"><center><?php echo $r->existencia;?></center></td>
	<td><center>$<?php echo $r->precio_salida; ?></center></td>
	<td style="width:150px;"></center>
	
	<input type="hidden" class="form-control" name="product_id" value="<?php echo $r->id_producto; ?>">
  <input type="hidden" class="form-control" name="exi" value="<?php echo $r->existencia; ?>">
	<input type="number" class="form-control" name="q" value="1" min="1" >


	</td>
	<td style="width:183px;">
		<center>
		<?php
	$found = false;

	if(isset($_SESSION["cart"])){
		foreach ($_SESSION["cart"] as $c) { 
			if($c["product_id"]==$r->id_producto){ 
				$found=true; break; 
			}
		}
	}
	?>
	<?php if($found):?>
		<a href="lista_venta.php" class="btn btn-info">Agregado</a>
	<?php else:?>
		<center> <button type="submit" class="btn btn-primary">Agregar a la venta</button></center>
		<?php endif; ?>
		</center>
	</td>
	</form>
</tr>

     <?php endwhile; ?>
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