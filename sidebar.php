<?php
	require_once 'vendor/autoload.php';
	use Carbon\Carbon;
?>
<aside class="col-lg-2 col-md-2 main-sidebar clearfix">
	<div class="logo">
		<a href="dashboardprov.php"><?= file_get_contents('logo.svg') ?></a>
	</div>
	<?php setlocale(LC_TIME, 'es-MX'); ?>
	<p class="date"><?= Carbon::now()->formatLocalized('%d de %B de %Y'); ?></p>
	<nav class="main-nav">
		<ul>
			<li>
				<a class="<?= $tabs[0]?'active':''; ?>" href="dashboard.php">
					<i class="fa fa-tachometer" aria-hidden="true"></i> Panel de control
				</a>
			</li>
			<li>
				<a class="<?= $tabs[1]?'active':''; ?>" href="speedcheckout.php">
					<i class="fa fa-rocket" aria-hidden="true"></i> Pedido express
				</a>
			</li>
			<li>
				<a class="<?= $tabs[2]?'active':''; ?>" href="products.php"><i class="fa fa-tag" aria-hidden="true"></i> Productos</a>
			</li>
			<li>
				<a class="<?= $tabs[3]?'active':''; ?>" href="orders.php"><i class="fa fa-bars" aria-hidden="true"></i> &Oacute;rdenes</a>
			</li>
			<li>
				<a class="<?= $tabs[4]?'active':''; ?>" href="#"><i class="fa fa-cog" aria-hidden="true"></i> Configuraci&oacute;n</a>
			</li>
		</ul>
	</nav>
	<hr class="special">
	<a class="carrito" href="carrito.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><br /> Carrito (12)</a>
	<hr class="special mt0">
	<div class="clear"></div>
	<a href="index.php" class="logout">
		<i class="fa fa-power-off fsn" aria-hidden="true"></i>
		Cerrar sesi&oacute;n
	</a>
	<div class="clear"></div>
</aside>
