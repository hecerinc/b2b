<?php include 'includes.php';$tabs[5] = true; get_header(); ?>
<div class="col-lg-10 col-md-10 main-content speed-checkout order-main">
	<h1 class="u-fl">Usuarios</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h40px"></div>
	<div class="pendientes table">
		<div class="rows">
			<form action="#" class="search-form u-fl">
				<input type="text" name="search" id="search" placeholder="Buscar">
			</form>
			<div class="u-fr action-btns clearfix">
				<a href="addUsers" class="btn bg-hlblue">Agregar <i class="fa fa-plus"></i></a>
			</div>
		</div>
		<?php
			require_once 'conex.php';
			$link = Conectarse();
			$query = "SELECT * FROM usuarios";
			$result=mysqli_query($link, $query) or die('Could not retrieve Users. Error in MySQL');
		?>
		<div class="clear h20px"></div>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Correo electr&oacute;nico</th>
					<th>Tel&eacute;fono</th>
					<th>Celular</th>
					<th>Usuario</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $i = 1; ?>
			<?php while($row=mysqli_fetch_array($result)):
			extract($row);
			?>
			<?php //for($i=1;$i<=15;$i++): ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $fname." ".$lname ?></td>
					<td><a href="mailto:<?= $email ?>"><?= $email ?></a></td>
					<td><?= $phone ?></td>
					<td><?= $mobile ?></td>
					<td><?= $username ?></td>
					<td>
						<form id="deluserform" action="delUser" method="post">
							<a href="#" class="view-more delete-btn btn bg-red">Borrar</a>
							<input type="hidden" name="delid" value="<?= $id ?>">
						</form>
					</td>
				</tr>
			<?php //endfor; ?>
			<?php $i++; endwhile; mysqli_close($link);?>
			</tbody>
		</table>
</div>
<?php $Block->start('bottomScripts'); ?>
<script>
	$(function(){
		$('.delete-btn').click(function(){
			if(!confirm("¿Esta seguro de que quiere borrar este usuario?"))
				return false;
			$('#deluserform').submit();
		});
	});
</script>
<?php $Block->end(); ?>
<?php get_footer(); ?>
