<?php include 'includes.php'; get_header(); ?>
<?php
	require_once 'conex.php';
	$link = Conectarse();
	$query = "SELECT sales.order_id, sales.quantity, sales.total, sales.finalized, products.name, products.sku, products.picture_url, products.price, suppliers.name AS supname FROM sales JOIN products ON sales.product_id = products.id JOIN suppliers ON suppliers.id = products.supplier_id WHERE sales.order_id = (SELECT id FROM orders WHERE orders.status = 0 ORDER BY orders.id DESC LIMIT 1)";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));

?>
<div class="col-lg-10 col-md-10 main-content carrito">
	<h1 class="u-fl">Carrito</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h30px"></div>
	<a href="#" class="u-fr btn bg-red delbtn"><i class="fa fa-trash"></i> Vaciar</a>
	<div class="clear h30px"></div>
	<main class="cart">
		<ul>
			<?php $sum = 0; $orderid = 0; $count = 0; ?>
			<?php while($row = mysqli_fetch_array($result)): extract($row); $count++; ?>
				<?php $sum += $total; $orderid = $order_id; ?>
			<li>
				<div class="product row">
					<div class="col-md-1">
						<a class="img" href="#">
							<img src="<?= $picture_url ?>" alt="<?= $name ?>">
						</a>
					</div>
					<div class="col-md-11">
						<div class="col-md-5 first">
							<a href="#" class="prodname"><?= $name ?></a>
							<a href="#" class="sku"><?= $sku ?></a>
							<div class="clear"></div>
							<a href="#" class="brand hlblue"><?= $supname ?></a>
						</div>
						<div class="col-md-2 second">
							<p class="title">Cantidad</p>
							<p class="value"><?= $quantity ?></p>
						</div>
						<div class="col-md-2 third">
							<p class="title">Precio unitario</p>
							<p class="value">$<?= number_format($price, 2) ?></p>
						</div>
						<div class="col-md-2 fourth">
							<p class="title">Subtotal</p>
							<p class="value">$<?= number_format($total, 2) ?></p>
						</div>
						<div class="col-md-1"></div>

					</div>
					<a href="#" class="del-btn"><i class="fa fa-times"></i></a>
				</div>
			</li>
			<?php endwhile; ?>
		</ul>
	</main>
	<div class="resumen">
		<div class="content">
			<h2>Resumen</h2>
			<ul>
				<li>Subtotal: <span>$<?= number_format($sum, 2) ?></span></li>
				<li>IVA: <span>$<?= number_format($sum*.16, 2) ?></span></li>
			</ul>
			<hr>
			<?php $subtotal = $sum*1.16; ?>
			<p class="total"><label>Total:</label> <span class="spec">$<?= number_format($sum*1.16, 2) ?></span></p>
			<form action="finalizeorder.php">
				<input type="hidden" name="orderid" value="<?= $orderid ?>">
				<input type="hidden" name="count" value="<?= $count ?>">
				<input type="hidden" name="subtotal" value="<?= $subtotal ?>">
				<a href="#" class="btn checkout bg-teal"><strong>Checkout</strong></a>
			</form>
		</div>
	</div>

</div>
<?php $Block->start('bottomScripts'); ?>
<script>
	$(function(){
		$('.btn.checkout').click(function(){
			$(this).parent().submit();
		});
	});
</script>
<?php $Block->end(); ?>
<?php mysqli_close($link); ?>
<?php get_footer(); ?>
