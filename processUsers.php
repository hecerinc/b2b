<?php

require_once 'conex.php';

extract($_POST);

$mlink = Conectarse();
$pass = md5($pass);
$query = "INSERT INTO usuarios(fname, lname, email, mobile, phone, username, password) VALUES('$fname', '$lname', '$email', '$mobile', '$phone', '$username', '$pass');";
if(mysqli_query($mlink, $query)){
	require 'success.php';
}
else{
	die("Could not add to DB");
}
mysqli_close($mlink);
