<?php include 'includes.php'; get_header(); ?>
<div class="col-lg-10 col-md-10 main-content products-main">
	<h1 class="u-fl">Productos</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h60px"></div>
	<div class="controls clearfix">
		<div class="tags u-fl">
			<a href="#" class="tag">Nutrioli</a>
			<a href="#" class="tag">Aceite</a>
		</div>
		<div class="filters u-fr">
			<p class="u-fl"><strong>Filtrar por:</strong></p>
			<select name="category" id="category">
				<option value="">Categor&iacute;a</option>
			</select>
			<select name="brand" id="brand">
				<option value="">Marca</option>
			</select>
			<div class="clear h10px"></div>
			<div class="u-fr">
				<a href="#" class="grid order-type"><i class="fa fa-th"></i></a>
				<a href="#" class="list order-type"><i class="fa fa-list-ul"></i></a>
			</div>
		</div>
	</div>
	<div class="clear h10px"></div>
	<section class="products row">
		<?php for($i =0 ;$i<12;$i++): ?>
		<div class="col-md-3">
			<div class="product">
				<div href="#" class="img">
					<img class="img-responsive" src="img/product.jpg" alt="Title of product">
					<div class="overlay">
						<a href="#" class="btn bg-hlblue add-to-cart">
							<i class="fa fa-shopping-cart"></i>
							Agregar al carrito
						</a>
					</div>
				</div>
				<hr>
				<div class="links">
					<a href="#" class="hlblue brand">Nutrioli</a>
					<a href="#" class="name">Aceite vegetal 1L</a>
					<a href="#" class="hlblue price">$50.00</a>
				</div>
			</div>
		</div>
		<?php endfor; ?>
		<div class="clear h40px"></div>
		<div class="pag">
			<ul class="clearfix" role="pagination">
				<li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#" aria-label="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</section>
	<div class="clear h80px"></div>
</div>
<?php get_footer(); ?>
