<?php 
require_once '../dbconfig.php';
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
		$id_producto = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM producto WHERE id_producto =:id_producto');
		$stmt_edit->execute(array(':id_producto'=>$id_producto));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else{
		header("Location: index.php");
	}

include("../conexion/conexion.php");
$pdo = connect();
    
    if(isset($_POST['btn_save_updates'])){
		if(!isset($errMSG)){

			$sql="UPDATE producto SET 
			id_producto=(:id_producto),
 			tipo=(:nom), 
 			modelo=(:modelo),
 			descripcion=(:descripcion),
 			precio_salida=(:precio),
 			can_existencia=(:can_exi),
 			can_minima=(:can_min_exi) WHERE id_producto=(:id_producto)";

		 	$query = $pdo->prepare($sql);
		 	$query->bindParam(':id_producto', $_POST['id_producto'], PDO::PARAM_STR);
		 	$query->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
		 	$query->bindParam(':modelo', $_POST['modelo'], PDO::PARAM_STR);
		 	$query->bindParam(':descripcion', $_POST['descripcion'], PDO::PARAM_STR);
		 	$query->bindParam(':precio', $_POST['precio'], PDO::PARAM_STR);
		 	$query->bindParam(':can_exi', $_POST['can_exi'], PDO::PARAM_STR);
		 	$query->bindParam(':can_min_exi', $_POST['can_min_exi'], PDO::PARAM_STR);

 			if($query->execute()){
				?>
        <script>
				  alert('Actualización realizada con exito...');
				  window.location.href='actualizar_producto.php';
				</script>
      <?php
			}
			else{
				$errMSG = "Los datos no fueron actualizados !";
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
	<title>Actualizar productos</title>
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
              <a href="producto/alta_producto.php">Nuevo producto</a>
            </li>
            <li>
              <a href="actualizar_producto.php">Modificar producto</a>
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
        <li class="breadcrumb-item active">Nuevo producto</li>
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
	    
	    <input type="hidden" name="id_producto" value="<?php echo $id_producto ?>">

	<div class="form-group">
      	<label><b>Nombre:</b></label>
    	<input type="text" class="form-control" name="nom" required="true" placeholder="Nombre del producto" value="<?php echo $tipo; ?>">
  	</div>

  <div class="form-group">
      <label><b>Modelo:</b></label>
    <input type="text" class="form-control" name="modelo" required="true" placeholder="Modelo del producto" value="<?php echo $modelo; ?>">
  </div>

  <div class="form-group">
      <label><b>Descripción:</b></label>
      <textarea class="form-control" required="true" name="descripcion" placeholder="Descripción del producto" rows="5"><?php echo $descripcion ?></textarea>
  </div>

  <div class="form-group">
      <label><b>Precio:</b></label>
    <input type="number" class="form-control" name="precio" required="true" placeholder="Precio del producto" value="<?php echo $precio_salida; ?>" onKeyPress="return soloNumeros(event)">
  </div>

  <div class="form-group">
      <label><b>Cantidad en existencia:</b></label>
    <input type="number" class="form-control" name="can_exi" required="true" placeholder="Cantidad en existencia del producto" value="<?php echo $can_existencia; ?>" onKeyPress="return soloNumeros(event)">
  </div>

  <div class="form-group">
      <label><b>Cantidad minima en inventario:</b></label>
    <input type="number" class="form-control" name="can_min_exi" required="true" placeholder="Cantidad minima en inventario" value="<?php echo $can_minima; ?>" onKeyPress="return soloNumeros(event)">
  </div>

  <button type="submit" name="btn_save_updates" class="btn btn-default btn-lg btn-block">
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
    <script src="../js/sb-admin-datatables.min.js"></script>
</body>
</html>