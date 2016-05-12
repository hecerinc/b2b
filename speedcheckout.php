<?php include 'includes.php'; $tabs[1] = true; get_header(); ?>
<?php
	require_once 'conex.php';
	$link = Conectarse();
	$query = "SELECT products.id, products.name AS prodname, products.sku, products.picture_url, products.price, suppliers.name AS provname FROM `products` JOIN suppliers ON products.supplier_id = suppliers.id";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
<div class="col-lg-10 col-md-10 main-content speed-checkout">
	<h1 class="u-fl">Speed checkout</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h40px"></div>
	<a href="#" class="u-fr btn bg-hlblue empty-table"><i class="fa fa-trash-o"></i> Vaciar</a>
	<div class="clear"></div>
	<form action="#" class="capture">
		<input type="text" placeholder="# SKU &oacute; nombre" name="prodsearch" id="prodsearch">
		<input type="text" placeholder="Cant." name="cant" id="cant">
	</form>
	<div class="clear h100px"></div>
	<table class="arts">
		<thead>
			<tr>
				<th>#</th>
				<th>SKU</th>
				<th>Proveedor</th>
				<th>Nombre</th>
				<th>Cantidad</th>
				<th>Precio</th>
				<th></th>
			</tr>
		</thead>
		<tbody>

		</tbody>
	</table>
	<div class="clear h80px"></div>
	<a href="carrito.php" class="finalize btn bg-teal"><i class="fa fa-check"></i> Finalizar</a>
	<div class="clear h80px"></div>
</div>
<?php mysqli_close($link); ?>
<?php $Block->start('bottomScripts'); ?>
<script>
	var intable = 0;
	var products = [
	<?php while($row = mysqli_fetch_array($result)): extract($row); ?>
		{
			id: <?= $id ?>,
			sku: '<?= $sku ?>',
			proveedor: '<?= $provname ?>',
			name: '<?= $prodname ?>',
			price: <?= number_format($price, 2) ?>
		},
	<?php endwhile; ?>
	];
	var cart = [];
	function generateRow(product, quant){
		intable++;
		var td = "</td><td>";
		var html = "<tr><td>"+intable+td+product.sku+td+product.proveedor+td+product.name+td+quant+td+product.price;
		html += "</td>";
		html += '<td class="actions"><a href="#" class="delete"><i class="fa fa-times"></i></a></td></tr>';
		$('.arts tbody').append(html);
		$('.delete').click(function(e){
			e.preventDefault();
			$(this).parent().parent().remove();
		});
		cart.push({'prodid': product.id, 'quant': quant});

	}
	$(function(){
		$('#cant').keypress(function(e){
			if(e.which == 13){
				var sku = $('#prodsearch').val();
				var quant = $('#cant').val();
				$('#cant, #prodsearch').val('');
				$("#prodsearch").focus();
				for (var i = 0; i < products.length; i++) {
					if(products[i].sku.toLowerCase() == sku.toLowerCase()){
						generateRow(products[i], quant);
						break;
					}
				}
			}
		});

		$('.empty-table').click(function(){
			$('.arts tbody').empty();
		});
		$('.finalize').click(function(e){
			e.preventDefault();
			if($('.arts tbody').children().length == 0){
				alert("No hay artículos. Agregue artículos e intente otra vez.")
				return false;
			}
			return true;
		});
	});
</script>
<?php $Block->end(); ?>
<?php get_footer(); ?>
