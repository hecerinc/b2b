<?php
	include 'includes.php';
	$tabs[0] = true;
	$proveedor = true;
	get_header();
?>

<!-- Main content starts here -->
<div class="col-lg-10 col-md-10 main-content dashboard">
	<h1 class="u-fl">Panel de control</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h60px"></div>
	<div class="grid row">
		<div class="grid-sizer col-md-4 col-lg-4"></div>
		<div class="col-md-8 col-lg-8 grid-item grid-item--width2">
			<div class="box panel clientlogo" style="padding:2%;">
				<img src="img/ragasa.png" class="img-responsive" alt="Supplier: Ragasa">
			</div>
		</div>
		<div class="col-md-4 col-lg-4 grid-item">
			<div class="box panel orders">
				<a href="#" class="handle"><span class="fa fa-bars"></span></a>
				<h2 class="tac">Cuentas por cobrar</h2>
				<ul>
					<li class="order">
						<h5><a href="#"><strong>Orden 810</strong></a></h5>
						<ul>
							<li>Fecha: 22/02/16</li>
							<li>Arts.: 200</li>
							<li>Cent. Dist.: GDJ209</li>
						</ul>
					</li>
					<li class="order">
						<h5><a href="#"><strong>Orden 810</strong></a></h5>
						<ul>
							<li>Fecha: 22/02/16</li>
							<li>Arts.: 200</li>
							<li>Cent. Dist.: GDJ209</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-4 col-lg-4 grid-item">
			<div class="box panel ordenes">
				<a href="#" class="handle"><i class="fa fa-bars"></i></a>
				<h3 class="tac">&Oacute;rdenes pendientes</h3>
				<h2 class="tac fw600"><strong>0</strong></h2>
			</div>
		</div>
		<div class="col-md-4  col-lg-4 grid-item">
			<div class="box panel map orders">
				<a href="#" class="handle"><i class="fa fa-bars"></i></a>
				<h3 class="tac">Embarques</h3>
				<ul>
					<li class="order">
						<h5><a href="#"><strong>Orden 810</strong></a></h5>
						<ul>
							<li>Fecha: 22/02/16</li>
							<li>Arts.: 200</li>
							<li>Cent. Dist.: GDJ209</li>
						</ul>
					</li>
					<li class="order">
						<h5><a href="#"><strong>Orden 810</strong></a></h5>
						<ul>
							<li>Fecha: 22/02/16</li>
							<li>Arts.: 200</li>
							<li>Cent. Dist.: GDJ209</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-4 col-lg-offset-0 col-lg-4 grid-item">
			<div class="box panel orders">
				<a href="#" class="handle"><span class="fa fa-bars"></span></a>
				<h3 class="tac">&Uacute;ltimas &oacute;rdenes</h3>
				<ul>
					<li class="order">
						<h5><a href="#"><strong>Orden 810</strong></a></h5>
						<ul>
							<li>Fecha: 22/02/16</li>
							<li>Arts.: 200</li>
							<li>Cent. Dist.: GDJ209</li>
						</ul>
					</li>
					<li class="order">
						<h5><a href="#"><strong>Orden 810</strong></a></h5>
						<ul>
							<li>Fecha: 22/02/16</li>
							<li>Arts.: 200</li>
							<li>Cent. Dist.: GDJ209</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php $Block->start('bottomScripts'); ?>
<script src="js/packery.pkgd.min.js"></script>
<script>
	$(function(){
		var grid = $('.grid').packery({
			itemSelector: '.grid-item',
			columnWidth: '.grid-sizer',
			percentPosition: true
		});
		grid.find('.grid-item').each(function(i, gridItem){
			var draggie = new Draggabilly(gridItem, {handle:'.handle'});
			grid.packery('bindDraggabillyEvents', draggie);
		});
	});
</script>
<?php $Block->end(); ?>

<?php get_footer(); ?>
