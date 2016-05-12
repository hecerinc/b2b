<?php include 'includes.php'; $tabs[1] = true; $proveedor = true; get_header(); ?>
<?php
	require_once 'conex.php';
	$link = Conectarse();
	$query = "SELECT * FROM clients;";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
<div class="col-lg-10 col-md-10 main-content products-main clientes">
	<h1 class="u-fl">Clientes</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h60px"></div>

	<div class="clear h10px"></div>
	<div class="products row">
		<?php while($row = mysqli_fetch_array($result)): extract($row); ?>
		<div class="col-md-3">
			<div class="product">
				<div href="#" class="img">
					<img class="img-responsive" src="<?= $logo_url ?>" alt="<?= $name ?>">
					<div class="overlay">
						<a href="#" class="btn bg-hlblue add-to-cart">
							<i class="fa fa-info"></i>
							Ver detalles
						</a>
					</div>
				</div>
				<hr>
				<div class="links">
					<a href="#" class="hlblue brand"><?= $name ?></a>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
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
<?php mysqli_close($link); ?>
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
