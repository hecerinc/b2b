<?php include 'includes.php'; get_header(); ?>
<div class="col-lg-10 col-md-10 main-content carrito">
	<h1 class="u-fl">Carrito</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h30px"></div>
	<a href="#" class="u-fr btn bg-red delbtn"><i class="fa fa-trash"></i> Vaciar</a>
	<div class="clear h30px"></div>
	<main class="cart">
		<ul>
			<?php for($i =0; $i<6; $i++): ?>
			<li>
				<div class="product row">
					<div class="col-md-1">
						<a class="img" href="#">
							<img src="img/nutrioli.jpg" alt="Product name">
						</a>
					</div>
					<div class="col-md-11">
						<div class="col-md-5 first">
							<a href="#" class="prodname">Nutrioli 1L</a>
							<a href="#" class="sku">17FA</a>
							<div class="clear"></div>
							<a href="#" class="brand hlblue">Ragasa</a>
						</div>
						<div class="col-md-2 second">
							<p class="title">Cantidad</p>
							<p class="value">200</p>
						</div>
						<div class="col-md-2 third">
							<p class="title">Precio unitario</p>
							<p class="value">$15.99</p>
						</div>
						<div class="col-md-2 fourth">
							<p class="title">Subtotal</p>
							<p class="value">$3,198.00</p>
						</div>
						<div class="col-md-1"></div>

					</div>
					<a href="#" class="del-btn"><i class="fa fa-times"></i></a>
				</div>
			</li>
			<?php endfor; ?>
		</ul>
	</main>
	<div class="resumen">
		<div class="content">
			<h2>Resumen</h2>
			<ul>
				<li>Subtotal: <span>$2000.00</span></li>
				<li>IVA: <span>$1000.00</span></li>
			</ul>
			<hr>
			<p class="total"><label>Total:</label> <span class="spec">$3000.00</span></p>
			<a href="#" class="btn checkout bg-teal"><strong>Checkout</strong></a>
		</div>
	</div>

</div>
<?php get_footer(); ?>
