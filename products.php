<?php include 'includes.php'; $tabs[2] = true; get_header(); ?>
<?php
	require_once 'conex.php';
	$link = Conectarse();
	$query = "SELECT products.id AS prodid, products.name AS prodname, products.sku, products.picture_url, products.price, suppliers.name AS provname FROM `products` JOIN suppliers ON products.supplier_id = suppliers.id";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
<div class="col-lg-10 col-md-10 main-content products-main">
	<h1 class="u-fl">Productos</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h60px"></div>
	<div class="controls clearfix hidden">
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
	<section class="products row grid">
		<!-- <div class="col-md-3 grid-sizer"></div> -->
		<?php while($row = mysqli_fetch_array($result)): extract($row); ?>
		<div class="col-md-3 grid-item">
			<div class="product">
				<div href="#" class="img">
					<img class="img-responsive" src="<?= $picture_url ?>" alt="<?= $prodname ?>">
					<div class="overlay">
						<a href="#" class="btn bg-hlblue add-to-cart" rel="<?= $prodid ?>">
							<i class="fa fa-shopping-cart"></i>
							Agregar al carrito
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
	</section>
	<div class="clear h80px"></div>
</div>
<?php mysqli_close($link); ?>
<?php $Block->start('bottomScripts'); ?>
<link rel="stylesheet" href="css/sweetalert.css">
<script src="js/sweetalert.min.js"></script>
<script>

	$(function(){
		// var grid = $('.grid').packery({
		// 	itemSelector: '.grid-item',
		// 	columnWidth: '.grid-sizer',
		// 	percentPosition: true
		// });

		$('.product a').click(function(e){
			e.preventDefault();
		});
		$('.tag').click(function(e){
			e.preventDefault();
			$(this).remove();
		});
		$('.add-to-cart').click(function(){
			var prodid = $(this).attr('rel');
			swal({
					title: "Cantidad",
					type: "input",
					showCancelButton: true,
					closeOnConfirm: true,
					inputPlaceholder: "200"
				},
				function(inputValue){
					if (inputValue === false) return false;

					if (inputValue === "") {
						swal.showInputError("Valor inválido");
						return false;
					}
					addToCart(prodid, inputValue);
				}
			);
		});
	});
	function addToCart(id, quant){
		$.post(window.location.origin+"/b2b/addtocart.php", {prodid: id, quantity: quant}, function(response){
			console.log(response);
			var res = $.parseJSON(response);
			console.log(res);
			// Success
			if(res.code == 200){
				updateCount();
			}
			else{
				swal("Oops...", "Something went wrong!", "error");
			}
		});
	}
	function updateCount(){
		console.log("hello world");
	}
</script>
<?php $Block->end(); ?>
<?php get_footer(); ?>
