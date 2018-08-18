<?php 
	session_start();
	$email = $_SESSION['email'];
	$firstName = $_SESSION['first_name'];
	$lastName = $_SESSION['last_name'];
	$address = $_SESSION['address'];
	$_SESSION['message'] = "Order Placed Successfully";
	header("location: success.php");
 ?>