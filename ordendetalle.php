<?php include 'includes.php'; $tabs[4] = true; $proveedor = true; get_header(); ?>
<div class="col-lg-10 col-md-10 main-content order-main orderdetail">
	<h1 class="u-fl">&Oacute;rdenes</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h40px"></div>
	<h2>Orden <span class="ltext">#8234</span></h2>
	<div class="clear h30px"></div>
	<div class="row">
		<div class="information col-md-4">
			<ul>
				<li><strong>Orden #:</strong> 8234</li>
				<li><strong>Cliente:</strong> <a href="#">HEB</a></li>
				<li><strong>Art&iacute;culos:</strong> 200</li>
				<li><strong>Fecha creaci&oacute;n:</strong> 28/Ene/2016</li>
			</ul>
		</div>
		<div class="col-md-4">
			<h4><strong>Asignar transporte</strong></h4>
			<div class="clear h15px"></div>

			<select name="transportes" id="transportes" class="transportes">
				<option value="">-- Elija tipo de transportaci&oacute;n --</option>
				<option value="1">Trailer</option>
				<option value="2">Torton</option>
				<option value="3">Camioneta</option>
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
			<?php for($i=1;$i<=10;$i++): ?>
				<tr>
					<td><?= $i; ?></td>
					<td>17FA</td>
					<td>Aceite Nutrioli 1L</td>
					<td>10</td>
					<td>$17.00</td>
					<td>$170.00</td>
					<!-- <td>
						<a href="#" class="view-more btn bg-hlblue">Ver detalles</a>
					</td> -->
				</tr>
			<?php endfor; ?>
			</tbody>
		</table>
	</div>


</div>
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
