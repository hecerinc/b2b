<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Plataforma B2B</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.0.0/normalize.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
	<style>
		body{
			font-family: 'Open Sans', sans-serif;
		}
		/* #1ABACE */
		.logo{
			width: 80px;
			margin: 0 auto;
			display: block;
			margin-bottom: 60px;
		}
		.logo svg{
			width: 80px;
		}
		.logo path{
			fill: #1ABACE;
		}
		*{
			box-sizing: border-box;
		}
		input[type="text"], input[type="password"]{
			display: block;
			width: 100%;
			border:0 none;
			margin-bottom:35px;
			border-bottom:1px solid #ddd;
			padding-bottom: 5px;
			padding-left:40px;
			padding-right: 10px;
			color: #656262;
		}
		input[type="text"]:focus, input[type="password"]{
			outline:none;
		}
		#username{
			background-image:url(user.svg);
			background-repeat: no-repeat;
			background-size: 25px 25px;

		}
		#pass{
			background-image: url(lock.svg);
			background-repeat: no-repeat;
			background-size: 25px 25px;
		}
		.submit{
			width: 100%;
			color: #fff;
			border:0 none;
			border-radius:40px;
			background-color: #1ABACE;
			padding:12px 10px;
			margin-top: 20px;
		}
		.container{
			width: 300px;
			margin: 0 auto;
			margin-top: 12%;
		}
	</style>
</head>
<body>
	<div class="container">
		<a href="#" class="logo"><?= file_get_contents('logo.svg') ?></a>
		<form action="controller.php" class="login" method="post">
			<input autofocus placeholder="Usuario" type="text" name="username" id="username">
			<input placeholder="Contraseña" type="password" name="pass" id="pass">
			<input type="submit" value="Iniciar sesi&oacute;n" class="submit">
		</form>
	</div>
</body>
</html>
