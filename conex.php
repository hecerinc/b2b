<?php
function Conectarse(){
	if (!($link=mysqli_connect('localhost','root',''))){
		  echo DB_SERVER;
		echo "The server is too busy. Try again later.";
		exit();
	}
	if (!mysqli_select_db($link,'amss')) {
		echo "Error with the server.";
		exit();
	}
	mysqli_set_charset($link,"utf8");
	return $link;
}
?>
