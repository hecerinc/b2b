<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once 'vendor/autoload.php';
$router = new AltoRouter();
$router->setBasePath('/b2b');
global $Block;
$router->map( 'GET', '/', function() {
    require 'login.php';
});
$router->map('POST|GET', '/dashboard', function(){
	require 'dashboard.php';
});
$router->map('GET', '/index.php', function(){
	require 'dashboard.php';
});
$router->map('GET', '/patrocinadores', function(){
	require 'products.php';
});
$router->map('GET', '/escuelas', function(){
	require 'speedcheckout.php';
});
$router->map('GET', '/users', function(){
	require 'carrito.php';
});
$router->map('GET', '/addUsers', function(){
	require 'users.php';
});
$router->map('POST', '/addUsers', function(){
	require 'processUsers.php';
});
$router->map('POST', '/delUser', function(){
	require 'deleteuser.php';
});
$match = $router->match();
if( $match && is_callable( $match['target'] ) ):
	call_user_func_array( $match['target'], $match['params'] );
else :
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>404 Not Found &laquo; AECNL</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.0.0/normalize.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
	<style>
		body{
			font-family: 'Open Sans', sans-serif;
			color: #738094;
		}
		.container{
			width: 60%;
			margin: 0 auto;
			margin-top: 5%;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>404 Not Found</h1>
		<p>The resource you are looking for could not be found. <br>No mistakes, just happy accidents.</p>
	</div>
</body>
</html>
<?php endif; ?>
