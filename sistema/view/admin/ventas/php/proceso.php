<?php 
session_start();
include "conection.php";
if(!empty($_POST)){
$q1 = $con->query("insert into ventas(total_venta,fecha_venta, hora_venta) value(\"$_POST[total]\",CURDATE(),CURTIME())");
if($q1){
$cart_id = $con->insert_id;
foreach($_SESSION["cart"] as $c){
$q1 = $con->query("insert into carrito_venta(fk_producto,can_productos,fk_ventas) value($c[product_id],$c[q],$cart_id)");

$q1 =  $con->query("UPDATE producto SET existencia=(existencia-$c[q]) WHERE id_producto = $c[product_id]");
}
unset($_SESSION["cart"]);
}
}
print "<script>window.location='../productos.php';</script>";
?>