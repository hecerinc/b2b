<?php

if(!empty($_POST))
	die("No post");
require_once 'conex.php';
$link = Conectarse();
$query = "INSERT INTO sales(quantity, total, finalized, product_id, order_id, created, modified) VALUES";
if(mysqli_query($link, $query)){

}
