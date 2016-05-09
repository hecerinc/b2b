<?php include 'includes.php'; $tabs[1] = true; $proveedor = true; get_header(); ?>
<div class="col-lg-10 col-md-10 main-content products-main clientes">
	<h1 class="u-fl">Clientes</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h60px"></div>

	<div class="clear h10px"></div>
	<div class="products row">
		<div class="col-md-3">
			<div class="product">
				<div href="#" class="img">
					<img class="img-responsive" src="img/heblogo.png" alt="Title of product">
					<div class="overlay">
						<a href="#" class="btn bg-hlblue add-to-cart">
							<i class="fa fa-info"></i>
							Ver detalles
						</a>
					</div>
				</div>
				<hr>
				<div class="links">
					<a href="#" class="hlblue brand">H-E-B</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="product">
				<div href="#" class="img">
					<img class="img-responsive" src="img/walmart.png" alt="Title of product">
					<div class="overlay">
						<a href="#" class="btn bg-hlblue add-to-cart">
							<i class="fa fa-info"></i>
							Ver detalles
						</a>
					</div>
				</div>
				<hr>
				<div class="links">
					<a href="#" class="hlblue brand">Walmart</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="product carrefour">
				<div href="#" class="img">
					<img class="img-responsive" src="img/carrefour.png" alt="Title of product">
					<div class="overlay">
						<a href="#" class="btn bg-hlblue add-to-cart">
							<i class="fa fa-info"></i>
							Ver detalles
						</a>
					</div>
				</div>
				<hr>
				<div class="links">
					<a href="#" class="hlblue brand">Carrefour</a>
				</div>
			</div>
		</div>
		<div class="clear h40px"></div>
		<div class="pag hidden">
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
	</div>
	<div class="clear h80px"></div>
</div>
<?php $Block->start('bottomScripts'); ?>
<script>
	$(function(){
		$('.product a').click(function(e){
			e.preventDefault();
		});
		$('.tag').click(function(e){
			e.preventDefault();
			$(this).remove();
		});
	});
</script>
<?php $Block->end(); ?>
<?php get_footer(); ?>
