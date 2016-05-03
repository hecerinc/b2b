<?php
require_once 'vendor/autoload.php';
use Carbon\Carbon;
?>
<aside class="col-lg-2 col-md-2 main-sidebar clearfix">
	<div class="logo">
		<a href="#"><?= file_get_contents('logo.svg') ?></a>
	</div>
	<?php setlocale(LC_TIME, 'es-MX'); ?>
	<p class="date"><?= Carbon::now()->formatLocalized('%d de %B de %Y'); ?></p>
	<nav class="main-nav">
		<ul>
			<li>
				<a class="<?= $tabs[0]?'active':''; ?>" href="dashboard">
					<i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
				</a>
			</li>
			<li>
				<a class="<?= $tabs[1]?'active':''; ?>" href="escuelas">
					<i class="fa fa-institution" aria-hidden="true"></i> Escuelas
				</a>
			</li>
			<li>
				<a class="<?= $tabs[2]?'active':''; ?>" href="patrocinadores"><i class="fa fa-circle-o-notch" aria-hidden="true"></i> Patrocinadores</a>
			</li>
			<li>
				<a class="<?= $tabs[3]?'active':''; ?>" href="nosotros"><i class="fa fa-group" aria-hidden="true"></i> Nosotros</a>
			</li>
			<li>
				<a class="<?= $tabs[4]?'active':''; ?>" href="recursos"><i class="fa fa-files-o" aria-hidden="true"></i> Recursos</a>
			</li>
			<li>
				<a class="<?= $tabs[5]?'active':''; ?>" href="users"><i class="fa fa-cog" aria-hidden="true"></i> Usuarios</a>
			</li>
		</ul>
	</nav>
	<div class="clear"></div>
	<a href="/b2b/" class="logout">
		<i class="fa fa-power-off fsn" aria-hidden="true"></i>
		Cerrar sesi&oacute;n
	</a>
	<div class="clear"></div>
</aside>
