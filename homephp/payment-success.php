<?php 
	require 'connect.inc.php';
	session_start();
	date_default_timezone_set(date_default_timezone_get());
	$date = date('m/d/Y h:i:s a', time());
	$email = $_SESSION['email'];
	$firstName = $_SESSION['first_name'];
	$lastName = $_SESSION['last_name'];
	$products = $_SESSION['products'];
	$totalAmount = $_SESSION['total'];
	$query = "SELECT customerID FROM customer WHERE email='$email'";
	$query_run = mysqli_query($conn, $query);
	if($query_array = mysqli_fetch_array($query_run))
		$customerID = $query_array['customerID'];
	else
		$customerID = rand(-500,0);
	$query = "INSERT INTO order (orderDate, totalAmount, customerID) VALUES ('$date', '$totalAmount', '$customerID')";
	$query_run = mysqli_query($conn, $query);
	foreach ($products as $key) {
		$plating = $key['plating'];
		$language = $key['language'];
		$nametype = $key['nametype'];
		$query = "SELECT platingID FROM plating WHERE platingType='$plating";
		$query_run = mysqli_query($conn, $query);
		if($query_array = mysqli_fetch_array($query_run))
			$platingID = $query_array['platingID'];
		$query = "SELECT languageID FROM language WHERE languageName='$language";
		$query_run = mysqli_query($conn, $query);
		if($query_array = mysqli_fetch_array($query_run))
			$languageID = $query_array['languageID'];
		$query = "SELECT nameTypeID FROM nametype WHERE nameTypeValue='$nametype";
		$query_run = mysqli_query($conn, $query);
		if($query_array = mysqli_fetch_array($query_run))
			$nameTypeID = $query_array['nameTypeID'];
		$detailsID = $key['productID'].$languageID.$platingID.$nameTypeID;
		$query = "INSERT INTO order_product (orderID, productID, detailsID) VALUES ((SELECT TOP 1 orderID FROM order ORDER BY ID DESC), ".$key['productID'].", '$detailsID'";
		$query_run = mysqli_query($conn, $query);
	}
	$_SESSION['message'] = "Order Placed Successfully";
	header("location: success.php");
 ?>