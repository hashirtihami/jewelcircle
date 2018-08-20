<?php
require_once('vendor/autoload.php');
session_start();

  

\Stripe\Stripe::setApiKey('sk_test_8GpMYeW7Nk1C6w3cN8sbfITS');
try {
	// SANITIZING POST ARRAY  - IMP SHIT
	$_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

	//$email = $_SESSION['email'];
	$token = $_POST['stripeToken'];
	// creating customer in stripe only -  no db shit
	$customer = \Stripe\Customer::create(array(
		"email" => $_SESSION['email'],
		"source" => $token
	));

	//charge customer
	$charge = \Stripe\Charge::create(array(
		"amount" => $_SESSION['total'],
		"currency" => "usd",
		"description" => "jewelcircle payment",
		"customer" => $customer->id
	));
	
	require 'connect.inc.php';
	date_default_timezone_set(date_default_timezone_get());
	$date = date('Y/m/d h:i:s a', time());
	$email = $_SESSION['email'];
	$firstName = $_SESSION['first_name'];
	$lastName = $_SESSION['last_name'];
	if(isset($_SESSION['products'])){
		$products = $_SESSION['products'];
		$totalAmount = $_SESSION['total'];
		$query = "SELECT customerID FROM customer WHERE email='".$email."'";
		$query_run = mysqli_query($conn, $query);
		if($query_array = mysqli_fetch_array($query_run))
			$customerID = $query_array['customerID'];
		$query = "INSERT INTO `order` (orderDate, totalAmount, customerID) VALUES ('".$date."', '".$totalAmount."', '".$customerID."')";
		echo $query;
		$query_run = mysqli_query($conn, $query);
		foreach ($products as $key) {
			$plating = $key['plating'];
			$language = $key['language'];
			$nametype = $key['nametype'];
			$query = "SELECT platingID FROM plating WHERE platingType='".$plating."'";
			$query_run = mysqli_query($conn, $query);
			if($query_array = mysqli_fetch_array($query_run))
				$platingID = $query_array['platingID'];
			$query = "SELECT languageID FROM language WHERE languageName='".$language."'";
			$query_run = mysqli_query($conn, $query);
			if($query_array = mysqli_fetch_array($query_run))
				$languageID = $query_array['languageID'];
			$query = "SELECT nameTypeID FROM nametype WHERE nameTypeValue='".$nametype."'";
			$query_run = mysqli_query($conn, $query);
			if($query_array = mysqli_fetch_array($query_run))
				$nameTypeID = $query_array['nameTypeID'];
			$detailsID = $key['productID'].$languageID.$platingID.$nameTypeID;
			$query = "INSERT INTO order_product (orderID, productID, detailID, nameOnProduct) VALUES ((SELECT orderID FROM `order` ORDER BY orderID DESC LIMIT 1), '".$key['productID']."', '".$detailsID."', '".$key['nameOnProduct']."')";
			$query_run = mysqli_query($conn, $query);
		}
	unset($_SESSION['products']);
	unset($_SESSION['total']);
	$_SESSION['message'] = "Order Placed Successfully";
	header("location: success.php");
	}
	else{
		$_SESSION['message'] = "Cart is empty";
		header("location: error.php");
	}
}

	catch(\Stripe\Error\Card $e) {
	  // Since it's a decline, \Stripe\Error\Card will be caught
	  $body = $e->getJsonBody();
	  $err  = $body['error'];

	  $_SESSION['message'] = $err['message'];
	  header('location:error.php');
	}


	  /*
	  print('Status is:' . $e->getHttpStatus() . "\n");
	  print('Type is:' . $err['type'] . "\n");
	  print('Code is:' . $err['code'] . "\n");
	  // param is '' in this case
	  print('Param is:' . $err['param'] . "\n");
	  print('Message is:' . $err['message'] . "\n");

	}
	catch (\Stripe\Error\RateLimit $e) {
		  // Too many requests made to the API too quickly
	} 
	catch (\Stripe\Error\InvalidRequest $e) {
		  // Invalid parameters were supplied to Stripe's API
	} 
	catch (\Stripe\Error\Authentication $e) {
		  // Authentication with Stripe's API failed
		  // (maybe you changed API keys recently)
	} 
	catch (\Stripe\Error\ApiConnection $e) {
		  // Network communication with Stripe failed
	} 
	catch (\Stripe\Error\Base $e) {
		  // Display a very generic error to the user, and maybe send
		  // yourself an email
	} 
	catch (Exception $e) {
		  // Something else happened, completely unrelated to Stripe
	}
	*/
//redirecting to success
//header ('Location: paysuccess.php?tid='.$charge->id.'&product='.$charge->description);

// print_r($charge);
//echo $token;

?>