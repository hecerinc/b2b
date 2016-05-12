<?php
require_once 'conex.php';
if(!isset($_POST))
	return false;
var_dump($_POST);
exit();
$link = Conectarse();
$q = "SELECT id FROM orders ORDER BY id DESC LIMIT 1";
$result = mysqli_query($link, $q) or die(mysqli_error($link));
$result = mysqli_fetch_array($result);
mysqli_close($link);
var_dump($result);
$query = "INSERT INTO sales(quantity, total, finalized, product_id, order_id, created, modified) VALUES()";
