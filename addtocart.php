<?php
require_once 'conex.php';
if(!isset($_POST))
	return false;
// var_dump($_POST);
// die();
extract($_POST);
$link = Conectarse();
/*
	Order status:
		0 - Not set
		1 - Pendientes
		2 - Programada
		3 - Completa
*/
$q = "SELECT id FROM orders WHERE orders.status = 0 ORDER BY id DESC LIMIT 1";
$result = mysqli_query($link, $q) or die(mysqli_error($link));
$result = mysqli_fetch_array($result);
if($result != NULL)
	$orderid = $result['id'];
else{
	// Create new order
	$neworder = "INSERT INTO orders(arrival_date, article_count, delivered, subtotal, status, created, modified) VALUES (NOW(), 0, 0, 0, 0, NOW(), NOW())";
	$result = mysqli_query($link, $neworder) or die(mysqli_error($link));
	$orderid = mysqli_insert_id($link);
}
$query = "SELECT * FROM products WHERE products.id = $prodid";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$result = mysqli_fetch_array($result);
$total = $result['price']*$quantity;
$insert = "INSERT INTO sales(quantity, total, finalized, product_id, order_id, created, modified) VALUES($quantity, $total, 0, $prodid, $orderid, NOW(), NOW())";

// Update order if new

if( mysqli_query($link, $insert)){
	mysqli_close($link);
	echo json_encode(['msg'=>"success", 'code'=>200]);
	return true;

}
else{
	mysqli_close($link);
	echo json_encode(['msg'=> "Failed", 'code'=>909]);
	return false;
}

