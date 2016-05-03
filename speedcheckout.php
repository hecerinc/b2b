<?php include 'includes.php'; $tabs[1] = true; get_header(); ?>
<div class="col-lg-10 col-md-10 main-content speed-checkout order-main">
	<h1 class="u-fl">Escuelas</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h60px"></div>
	<div class="pendientes table">
		<div class="rows">
			<form action="#" class="search-form u-fl">
				<input type="text" name="search" id="search" placeholder="Buscar">
			</form>
			<div class="u-fr action-btns clearfix">
				<a href="#" class="u-fl"><i class="fa fa-cog"></i></a>
				<a href="#" class="u-fl"><i class="fa fa-refresh"></i></a>
			</div>
		</div>
		<div class="clear h20px"></div>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Direcci&oacute;n</th>
					<th>Patrocinador</th>
					<th>Alumnos</th>
					<th>Maestros</th>
					<th>P | S</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php for($i=1;$i<=15;$i++): ?>
				<tr>
					<td><?= $i; ?></td>
					<td>Justo Sierra</td>
					<td>Lorem ipsum dolor sit amet.</td>
					<td>Axtel</td>
					<td>293</td>
					<td>10</td>
					<td>S</td>
					<td>
						<a href="#" class="view-more btn bg-hlblue">Ver detalles</a>
					</td>
				</tr>
			<?php endfor; ?>
			</tbody>
		</table>

	</div>
	<div class="clear h40px"></div>
</div>
<?php $Block->start('bottomScripts'); ?>
<script>
	var intable = 0;
	var products = [
		{
			id: 1,
			sku: '17FA',
			proveedor: 'Ragasa',
			name: 'Nutrioli aceite vegetal 1L',
			price: 50.00
		},
		{
			id: 2,
			sku: 'F852',
			proveedor: 'Ragasa',
			name: 'Oli aceite vegetal',
			price:30.00
		},
		{
			id: 3,
			sku: 'AB10',
			proveedor: 'GRUMA',
			name: 'Tortillas maíz 1kg',
			price: 10.00
		}
	];
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
			// e.preventDefault();
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
