<?php
extract($_POST);
if($username == "nutrioli"){
	header("Location: dashboardprov.php");
	die();
}
else{
	header("Location: dashboard.php");
	die();
}
