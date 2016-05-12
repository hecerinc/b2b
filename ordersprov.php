<?php include 'includes.php'; $tabs[4] = true; $proveedor = true; get_header(); ?>
<?php
	/*
		Embarques:
			- Trailer
			- Torton
			- Camioneta
	*/

	require_once 'conex.php';
	$link = Conectarse();
	$query = "SELECT * FROM orders WHERE orders.status = 1";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	mysqli_close($link);
 ?>
<div class="col-lg-10 col-md-10 main-content order-main orderssup">
	<h1 class="u-fl">&Oacute;rdenes</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h40px"></div>
	<div class="pendientes table">
		<h3><strong>Pendientes</strong></h3>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>ID</th>
					<th>Status</th>
					<th>Cliente</th>
					<th>Fecha creaci&oacute;n</th>
					<th>Art&iacute;culos</th>
					<th>Monto</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $i = 0; while($row = mysqli_fetch_array($result)): $i++; extract($row); ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $id ?></td>
					<td><span class="status true"></span></td>
					<td><a href="#">Walmart</a></td>
					<td><?= $created ?></td>
					<td><?= $article_count ?></td>
					<td>$<?= number_format($subtotal,2) ?></td>
					<td>
						<form action="ordendetalle.php">
							<input type="hidden" name="orderid" value="<?= $id ?>">
							<a href="#" class="view-more btn bg-hlblue">Ver detalles</a>
						</form>
					</td>
				</tr>
			<?php endwhile; ?>
			</tbody>
		</table>

	</div>
	<div class="clear h20px"></div>
	<hr class="special">
	<div class="pendientes table">
		<div class="clear h20px"></div>
		<h3><strong>Programadas</strong></h3>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>ID</th>
					<th>Cliente</th>
					<th>Fecha creaci&oacute;n</th>
					<th>Fecha programada</th>
					<th>Art&iacute;culos</th>
					<th>Monto</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $num = rand(1000, 8000); ?>
			<?php for($i=5;$i<=4;$i++): ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $num+$i ?></td>
					<td><a href="#">HEB</a></td>
					<td>17/Ene/2016</td>
					<td>20/Ene/2016</td>
					<td>200</td>
					<td>$2,300.00</td>
					<td>
						<a href="#" class="view-more btn bg-hlblue">Ver detalles</a>
					</td>
				</tr>
			<?php endfor; ?>
			</tbody>
		</table>

	</div>
	<div class="clear h20px"></div>
	<hr class="special">
	<div class="clear h20px"></div>
	<div class="completas table">
		<h3><strong>Completas</strong></h2>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>ID</th>
					<th>Cliente</th>
					<th>Fecha creaci&oacute;n</th>
					<th>Fecha de entrega</th>
					<th>Art&iacute;culos</th>
					<th>Monto</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php for($i=11;$i<=10;$i++): ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= rand(2000,8000) ?></td>
					<td><a href="#">HEB</a></td>
					<td>17/Ene/2016</td>
					<td>21/Ene/2016</td>
					<td>200</td>
					<td>$2,300.00</td>
					<td>
						<a href="#" class="view-more btn bg-hlblue">Ver detalles</a>
					</td>
				</tr>
			<?php endfor; ?>
			</tbody>
		</table>
	</div>
</div>
<?php $Block->start('bottomScripts'); ?>
<script>
	$(function(){
		$('.view-more.btn').click(function(){
			$(this).parent().submit();
		});
	});
</script>
<?php $Block->end(); ?>
<?php get_footer(); ?>
