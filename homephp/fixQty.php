<?php 
	session_start();
	if(isset($_POST['PID'])&&isset($_POST['quantity'])){
		$PID = $_POST["PID"];
		for($i = 0;$i<count($_SESSION['products']);$i++){
			if(isset($_SESSION['products'][$i]['productID'])){
				if($_SESSION['products'][$i]["productID"]===$PID){
					print_r($_SESSION["products"]);
					$_SESSION['products'][$i]['quantity'] = $_POST['quantity'];
					print_r($_SESSION["products"]);
				}
			}
			if(isset($_SESSION['products'][$i]['cardName'])){
					echo count($_SESSION['products']);
				if($_SESSION['products'][$i]["cardName"]===$PID){
					print_r($_SESSION["products"]);
					$_SESSION['products'][$i]['quantity'] = $_POST['quantity'];
					print_r($_SESSION["products"]);
				}
			}
		}
	}
?>