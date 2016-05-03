<?php include 'includes.php'; $tabs[5] = true; get_header(); ?>
<div class="col-lg-10 col-md-10 main-content speed-checkout order-main">
	<h1 class="u-fl">Agregar usuario</h1>
	<p class="u-fr username">H&eacute;ctor Rinc&oacute;n</p>
	<div class="clear h40px"></div>
	<form action="addUsers" class="add-user-form" method="post">
		<label for="fname">Nombre:</label>
		<input class="textinput" type="text" name="fname" id="fname">
		<label for="lname">Apellidos:</label>
		<input class="textinput" type="text" name="lname" id="lname">
		<label for="email">Correo electr&oacute;nico:</label>
		<input class="textinput" type="email" name="email" id="email">
		<label for="mobile">Celular:</label>
		<input class="textinput" type="text" name="mobile" id="mobile">
		<label for="phone">Tel&eacute;fono:</label>
		<input class="textinput" type="text" name="phone" id="phone">
		<label for="username">Usuario:</label>
		<input class="textinput" type="text" name="username" id="username">
		<label for="pass">Contraseña</label>
		<input class="textinput" type="password" name="pass" id="pass">
		<div class="clear h40px"></div>
		<input type="submit" class="submit btn bg-teal white" value="Enviar">
		<div class="clear"></div>
	</form>
</div>
<?php get_footer(); ?>
