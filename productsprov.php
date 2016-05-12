<?php include 'includes.php'; $tabs[3] = true; $proveedor = true; get_header(); ?>
<?php
	require_once 'conex.php';
	$link = Conectarse();
	$query = "SELECT products.id, products.name AS prodname, products.sku, products.picture_url, products.price, suppliers.name AS provname FROM `products` JOIN suppliers ON products.supplier_id = suppliers.id WHERE products.supplier_id = 1;";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	mysqli_close($link);
?>
<div class="col-lg-10 col-lg-offset-2 search-product">
	<div class="controls clearfix">
		<form action="#" class="search-form u-fl">
			<i class="fa fa-search u-fl"></i>
			<input type="text" name="q" id="query" placeholder="Buscar producto">
		</form>
		<a href="#" class="add-product u-fr"><i class="fa fa-plus"></i></a>
	</div>
</div>
<div class="col-lg-10 col-md-10 main-content products-main productsprov">
	<h1 class="u-fl">Productos</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h40px"></div>
	<div class="clear h20px"></div>
	<section class="products row">
		<?php while($row = mysqli_fetch_array($result)): extract($row); ?>
		<div class="col-md-3">
			<div class="product">
				<div href="#" class="img">
					<img class="img-responsive" src="<?= $picture_url ?>" alt="<?= $prodname ?>">
					<div class="overlay">
						<a href="#" class="btn bg-hlblue add-to-cart">
							<i class="fa fa-info"></i>
							Ver detalles
						</a>
					</div>
				</div>
				<hr>
				<div class="links">
					<a href="#" class="hlblue brand"><?= $provname ?></a>
					<a href="#" class="name"><?= $prodname ?></a>
					<a href="#" class="hlblue price">$<?= number_format($price, 2) ?></a>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
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
