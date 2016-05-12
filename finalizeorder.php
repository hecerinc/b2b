<?php
if(empty($_GET))
	die("No get");
extract($_GET);
require_once 'conex.php';
$link = Conectarse();

$update = "UPDATE orders SET orders.status = 1, orders.article_count = $count, orders.subtotal = $subtotal WHERE orders.id = $orderid";
if(mysqli_query($link, $update))
	$msg = "ha sido completada con éxito";
else
	$msg = "no ha podido ser completada con éxito";
// $msg = "hello world";
include 'includes.php';
get_header();
?>
<div class="col-lg-10 col-md-10 main-content carrito">
	<h1 class="tac" style="margin:0 auto; width:60%; margin-top:15%;"><i class="fa fa-check teal"></i> Su orden <?= $msg ?></h1>
</div>
<?php get_footer(); ?>
