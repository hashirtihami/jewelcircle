<?php 
	session_start();
	if(isset($_POST['PID'])&&isset($_POST['quantity'])){
		$PID = $_POST["PID"];
		$i = 0;
		foreach ($_SESSION["products"] as $key){
			if($key["productID"]===$PID||$key['cardName']===$PID){
				print_r($_SESSION["products"]);
				$key['quantity'] = $_POST['quantity'];
				unset($_SESSION["products"][$i]);
				$_SESSION["products"][$i] = $key;
				print_r($key);
				print_r($_SESSION["products"]);
			}
			$i++;
		}
	}
?>