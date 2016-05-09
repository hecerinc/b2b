<?php
	require_once 'vendor/autoload.php';
	use Carbon\Carbon;
?>
<aside class="col-lg-2 col-md-2 main-sidebar sidebarprov clearfix">
	<div class="logo">
		<a href="dashboard.php"><?= file_get_contents('logo.svg') ?></a>
	</div>
	<?php setlocale(LC_TIME, 'es-MX'); ?>
	<p class="date"><?= Carbon::now()->formatLocalized('%d de %B de %Y'); ?></p>
	<nav class="main-nav">
		<ul>
			<li>
				<a class="<?= $tabs[0]?'active':''; ?>" href="dashboardprov.php">
					<i class="fa fa-tachometer" aria-hidden="true"></i> Panel de control
				</a>
			</li>
			<li>
				<a class="<?= $tabs[1]?'active':''; ?>" href="clientes.php">
					<i class="fa fa-users" aria-hidden="true"></i> Clientes
				</a>
			</li>
			<li>
				<a class="<?= $tabs[2]?'active':''; ?>" href="clientes.php">
					<i class="fa fa-truck" aria-hidden="true"></i> Embarques <span class="counter ico">4</span>
				</a>
			</li>
			<li>
				<a class="<?= $tabs[3]?'active':''; ?>" href="productsprov.php"><i class="fa fa-tag" aria-hidden="true"></i> Productos</a>
			</li>
			<li>
				<a class="<?= $tabs[4]?'active':''; ?>" href="ordersprov.php"><i class="fa fa-bars" aria-hidden="true"></i> &Oacute;rdenes <span class="counter ico">4</span></a>
			</li>
			<li>
				<a class="<?= $tabs[5]?'active':''; ?>" href="#"><i class="fa fa-cog" aria-hidden="true"></i> Configuraci&oacute;n</a>
			</li>
		</ul>
	</nav>
	<div class="clear"></div>
	<a href="index.php" class="logout">
		<i class="fa fa-power-off fsn" aria-hidden="true"></i>
		Cerrar sesi&oacute;n
	</a>
	<div class="clear"></div>
</aside>
