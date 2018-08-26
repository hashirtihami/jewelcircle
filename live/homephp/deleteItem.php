<?php
	session_start();
	$PID = $_POST["PID"];
	$i = 0;
	foreach ($_SESSION["products"] as $key){
		if($key["productID"]===$PID||$key['cardName']===$PID){
			print_r($_SESSION["products"]);
			print_r($key);
			unset($_SESSION["products"][$i]);
			$_SESSION["products"] = array_values($_SESSION["products"]);
		}
		$i++;
	}
?>