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
  <title>Lista de ventas</title>
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
    <a href="./productos.php" class="btn btn-light">Productos en venta</a>
			<br><br>
		<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Productos
        </div>
        <div class="card-body">
          <div class="table-responsive">
<?php
  /*
  * Esta es la consula para obtener todos los productos de la base de datos.
  */
  $products = $con->query("select * from producto");
  if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])):
?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th><center>Nombre</center></th>
        <th><center>Modelo</center></th>
        <th><center>Cantidad</center></th>
        <th><center>Precio Unitario</center></th>
        <th><center>Subtotal</center></th>
        <th></th>
      </tr>
    </thead>
<?php 
  /*
  * Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
  */
  $total = 0;
  foreach($_SESSION["cart"] as $c):
  $products = $con->query("select * from producto where id_producto=$c[product_id] and estado = 1");
  $r = $products->fetch_object();
?>
      	
	<tr>
  <td><center><?php echo $r->tipo;?></center></td>
  <td><center><?php echo $r->modelo; ?></center></td>
  <td><center><?php echo $c["q"]; ?></center></td>
  <td><center>$<?php echo $r->precio_salida;?></center></td>
  <td><center>$<?php echo number_format($c["q"]*$r->precio_salida); ?></center></td>

  <td style="width:260px;">
  <center>
    <?php
    $found = false;
    
      foreach ($_SESSION["cart"] as $c) {
       if($c["product_id"]==$r->id_producto){
        $found=true; break; 
      }
    }
    ?>
      <a href="php/delfromcart.php?id=<?php echo $c["product_id"];?>" class="btn btn-danger">Eliminar</a>
    </center>
  </td>
  
</tr>
<?php $total += $c["q"]*$r->precio_salida; ?>
<?php endforeach; ?>

			</table>

          </div>
        </div>
      </div>
    </div>

<div class="container-fluid">
  <div class="">
    <table class="table-bordered">
    <tr>
      <td style="width:335px;"><p><b><center>Total</center></b></p></td>
      <td style="width:294px;"><p><b><center>$<?php echo number_format($total); ?></center></b></p></td>
    </tr>
    </table>
  </div>
</div>
<br>

<form class="form-horizontal" method="post" id="processsell" action="./php/proceso.php">
  <input type="hidden" name="total" value="<?php echo $total; ?>">

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Efectivo</label>
    <div class="col-sm-5">
  
      <input type="number" name="money" required class="form-control" id="money" placeholder="Efectivo">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button class="btn btn-primary">Procesar Venta</button>
    </div>
  </div>
</form>

<?php else:?>
  <p class="alert alert-warning">La lista de venta esta vacia.</p>
<?php endif;?>
	

    </div>
  </div>
</div>

  <?php 
    include("../footer.php");
  ?>
    <script src="../js/jquery-1.10.2.js"></script>
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

    <script>
      $("#processsell").submit(function(e){
        money = $("#money").val();
        if(money<<?php echo $total;?>){
          alert("No se puede efectuar la operacion");
          e.preventDefault();
        }else{
          go = confirm("Su cambio es: $"+(money-<?php echo $total;?>));
          if(go){}
            else{e.preventDefault();}
        }
      });
    </script>
</body>
</html>