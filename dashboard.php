<?php
	include 'includes.php';
	$tabs[0] = true;
	get_header();
?>

<!-- Main content starts here -->
<div class="col-lg-10 col-md-10 main-content dashboard">
	<h1 class="u-fl">Dashboard</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h60px"></div>
	<div class="grid row">
		<div class="grid-sizer col-md-3 col-lg-3"></div>
		<div class="col-md-3 col-lg-3 grid-item">
			<div class="box panel spchk">
				<p class="tal">Escuela</p>
				<h3>C.P. Tom&aacute;s Albaga</h3>
				<p>Clave: 19EPR0417Q</p>
				<p>Pol&iacute;gono Edison</p>
			</div>
		</div>
		<div class="col-md-3 col-lg-3 grid-item">
			<div class="box panel clientlogo">
				<p>Patrocinador</p>
				<img src="img/axtel.png" class="img-responsive" alt="Client logo: Walmart">
			</div>
		</div>
		<div class="col-md-3 col-lg-3 grid-item">
			<div class="box panel tac events">
				<a href="#"><h2 class="h1"><i class="fa fa-calendar"></i><strong>33</strong></h2></a>
				<h4>eventos</h4>
			</div>
		</div>
		<div class="col-md-3 col-lg-3 grid-item">
			<div class="box panel ordenes">
				<h2 class="tac"><i class="fa fa-group"></i><strong>4,079</strong></h2>
				<p>padres de familia | voluntarios del servicio social</p>
			</div>
		</div>
		<div class="col-md-3 col-lg-3 grid-item">
			<div class="box panel">
				<p class="address">
					Tabachin Sn, <br>
					Protexa 66170 <br>
					Santa Catarina, N.L. <br>
					Tel&eacute;fonos: (81)83362559
					<br><br>
					Primaria P&uacute;blica <br>
					<strong>Turno:</strong> Matutino
				</p>
			</div>
		</div>
		<div class="col-md-3 col-lg-3 grid-item">
			<div class="box panel tac">
				<a href="#"><h2 class="h1"><strong>232</strong></h2></a>
				<p>alumnos</p>
			</div>
		</div>
		<div class="col-md-6 col-lg-6 grid-item grid-item--width2">
			<div class="box panel">
				<h3 class="tac">Inversi&oacute;n total</h3>
				<h2 class="h1">$2,896,000.00</h2>
			</div>
		</div>
		<div class="col-md-3 col-lg-3 grid-item">
			<div class="box panel">
				<p>Asesor</p>
				<a href="#"><h2>Ing. Rom&aacute;n Mart&iacute;nez</h2></a>
			</div>
		</div>
		<div class="col-md-3 col-lg-3 grid-item">
			<div class="box panel">
				<p>Director</p>
				<a href="#"><h2>Ing. Rom&aacute;n Mart&iacute;nez</h2></a>
			</div>
		</div>

		<div class="col-md-3 col-lg-3 grid-item">
			<div class="box panel maestros">
				<h2 class="h1"><strong>10 </strong><?= file_get_contents('img/teacher.svg') ?></h2>
				<p>maestros</p>
			</div>
		</div>
		<div class="col-md-3 col-lg-3 grid-item">
			<div class="box panel map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9935.010801760422!2d-0.1632344!3d51.4994055!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15ee630d4b4e0d42!2sHarrods!5e0!3m2!1sen!2s!4v1460505900808" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-6 col-lg-6 grid-item grid-item--width2">
			<div class="box panel">
				<p>Privada</p>
				<h2>$1,250,000.00</h2>
				<p>P&uacute;blica</p>
				<h2>$1,246,000.00</h2>
			</div>
		</div>
		<!-- <div class="col-md-3 col-lg-3 grid-item">
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
		</div> -->
	</div>
</div>

<?php $Block->start('bottomScripts'); ?>
<!-- <script src="js/packery.pkgd.min.js"></script> -->
<script src="js/masonry.js"></script>
<script>
	$(function(){
		// var grid = $('.grid').packery({
		// 	itemSelector: '.grid-item',
		// 	columnWidth: '.grid-sizer',
		// 	percentPosition: true
		// });
		// grid.find('.grid-item').each(function(i, gridItem){
		// 	var draggie = new Draggabilly(gridItem, {handle:'.handle'});
		// 	grid.packery('bindDraggabillyEvents', draggie);
		// });
		$('.grid').masonry({
		  // set itemSelector so .grid-sizer is not used in layout
		  itemSelector: '.grid-item',
		  // use element for option
		  columnWidth: '.grid-sizer',
		  percentPosition: true
		})
	});
</script>
<?php $Block->end(); ?>

<?php get_footer(); ?>
