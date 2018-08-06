<?php
	session_start();
	$PID = $_POST["PID"];
	foreach ($_SESSION["products"] as $key){
		$i = 0;
		if($key["productID"]===$PID){
			print_r($_SESSION["products"]);
			print_r($key);
			unset($_SESSION["products"][$i]);
			$_SESSION["products"] = array_values($_SESSION["products"]);
		}
		$i++;
	}
?>