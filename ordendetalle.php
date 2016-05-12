<?php
if(empty($_GET))
	die("No get");
?>
<?php include 'includes.php'; $tabs[4] = true; $proveedor = true; get_header(); ?>
<?php
	$orderid = $_GET['orderid'];
	require_once 'conex.php';
	$link = Conectarse();
	$query = "SELECT * FROM orders WHERE orders.id = $orderid";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$result = mysqli_fetch_array($result);
?>
<div class="col-lg-10 col-md-10 main-content order-main orderdetail">
	<h1 class="u-fl">&Oacute;rdenes</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h40px"></div>
	<h2>Orden <span class="ltext">#<?= $result['id'] ?></span></h2>
	<div class="clear h30px"></div>
	<div class="row">
		<div class="information col-md-4">
			<ul>
				<li><strong>Orden #:</strong> <?= $result['id'] ?></li>
				<li><strong>Cliente:</strong> <a href="#">Walmart</a></li>
				<li><strong>Art&iacute;culos:</strong> <?= $result['article_count'] ?></li>
				<li><strong>Fecha creaci&oacute;n:</strong> <?= $result['created'] ?></li>
			</ul>
		</div>
		<div class="col-md-4">
			<h4><strong>Asignar transporte</strong></h4>
			<div class="clear h15px"></div>

			<select name="transportes" id="transportes" class="transportes">
				<option value="">-- Elija tipo de transportaci&oacute;n --</option>

				<option value="3">Trailer</option>
				<option value="1">Torton</option>
				<option value="2">Camioneta</option>
			</select>
		</div>
		<div class="col-md-4">
			<a href="#" class="btn bg-teal"><i class="fa fa-check"></i> Confirmar</a>
		</div>
	</div>
	<div class="clear"></div>
	<hr class="special">
	<div class="clear h10px"></div>
	<div class="completas table">
		<h2><strong>Art&iacute;culos</strong></h2>
		<div class="clear h30px"></div>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>SKU</th>
					<th>Nombre</th>
					<th>Cantidad</th>
					<th>Precio unitario</th>
					<th>Monto</th>
					<!-- <th></th> -->
				</tr>
			</thead>
			<tbody>
			<?php
				$query = "SELECT sales.quantity, sales.total, products.name, products.sku, products.price FROM `sales` JOIN products ON sales.product_id = products.id WHERE ";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));

			?>
			<?php $i = 0; while($row = mysqli_fetch_array($result)): $i++; extract($row); ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $sku ?></td>
					<td><?= $name ?></td>
					<td><?= $quantity ?></td>
					<td>$<?= number_format($price, 2)  ?></td>
					<td>$<?= number_format($total, 2) ?></td>
					<!-- <td>
						<a href="#" class="view-more btn bg-hlblue">Ver detalles</a>
					</td> -->
				</tr>
			<?php endwhile; ?>
			</tbody>
		</table>
	</div>


</div>
<?php mysqli_close($link); ?>
<div class="clear h20px"></div>
<?php $Block->start('bottomScripts'); ?>
<link rel="stylesheet" href="css/selectize.css">
<link rel="stylesheet" href="css/selectize.default.css">
<script src="js/selectize.min.js"></script>
<script>
	$(function(){
		$('#transportes').selectize({
			create: true,
			sortField: 'text'
		});
	});
</script>
<?php $Block->end(); ?>
<?php get_footer(); ?>
