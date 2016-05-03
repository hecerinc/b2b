<?php
require_once 'conex.php';

extract($_POST);

$mlink = Conectarse();
$query = "DELETE FROM usuarios WHERE usuarios.id = $delid;";
if(mysqli_query($mlink, $query)){
	require 'successdel.php';
}
else{
	die("Could not add to DB");
}
mysqli_close($mlink);
