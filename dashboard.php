<?php
	include 'includes.php';
	get_header();
?>
<!-- Sidebar -->
<?php include 'sidebar.php'; ?>
<!-- Main content starts here -->

<div class="col-lg-10 col-md-10 main-content dashboard">
	<h1 class="u-fl">Dashboard</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h60px"></div>
	<div class="grid row">
		<div class="grid-sizer col-md-4 col-lg-4"></div>
		<div class="col-md-8 col-lg-8 grid-item grid-item--width2">
			<div class="box panel clientlogo">
				<img src="img/walmart.png" class="img-responsive" alt="Client logo: Walmart">
			</div>
		</div>
		<div class="col-md-4 col-lg-4 grid-item">
			<div class="box panel spchk">
				<a href="#" class="handle"><i class="fa fa-bars"></i></a>
				<h2>Speed checkout</h2>
				<div class="clear h20px"></div>
				<a class="btn bg-hlblue" href="#">Empezar</a>
			</div>
		</div>
		<div class="col-md-4 col-lg-4 grid-item">
			<div class="box panel">
				<a href="#" class="handle"><span class="fa fa-bars"></span></a>
				<h2>&Oacute;rdenes recurrentes</h2>
				<br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque nulla quod totam magni magnam, labore, dolorum accusantium. Numquam quam veritatis autem neque aut molestiae adipisci nobis necessitatibus est blanditiis consequatur eveniet qui doloribus alias aperiam labore debitis praesentium, velit reprehenderit eum ducimus amet laboriosam. Voluptatem corrupti architecto, id totam rerum eum repudiandae ratione labore vitae, est officia odio facilis cupiditate quo nostrum earum commodi porro itaque facere nulla, suscipit. Amet aut repellat quasi, ab possimus totam facilis eveniet velit hic incidunt sequi, ipsum, officia ratione repellendus et expedita quibusdam a culpa cum aperiam natus adipisci omnis animi aspernatur eius! Est eum ex, in maiores eius quibusdam a harum! Debitis distinctio ab et at animi quaerat, ducimus eum cumque. Ipsum quis totam, minima perferendis nulla quod vel, illum in quidem aut, dignissimos eius fugiat explicabo modi cum laborum deserunt labore necessitatibus accusamus. Dolore expedita mollitia adipisci incidunt ea nobis nisi impedit sapiente voluptatibus velit quo illo amet quaerat sint vitae aperiam alias veritatis error, nemo, debitis natus suscipit similique aspernatur vero enim. Repellat, asperiores ab, eius nihil a expedita laborum corporis? Soluta inventore aliquam non, est perferendis cupiditate praesentium, ipsa illum deserunt asperiores fugit ratione, tempore, nulla necessitatibus dicta esse quae?</p>
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
			<div class="box panel map">
				<a href="#" class="handle"><i class="fa fa-bars"></i></a>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9935.010801760422!2d-0.1632344!3d51.4994055!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15ee630d4b4e0d42!2sHarrods!5e0!3m2!1sen!2s!4v1460505900808" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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
