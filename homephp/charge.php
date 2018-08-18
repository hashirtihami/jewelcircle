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
	//	"email" => $email,
		"source" => $token
	));

	//charge customer
	$charge = \Stripe\Charge::create(array(
		"amount" => 5000,
		"currency" => "usd",
		"description" => "jewelcircle payment",
		"customer" => $customer->id
	));
	
}

	catch(\Stripe\Error\Card $e) {
	  // Since it's a decline, \Stripe\Error\Card will be caught
	  $body = $e->getJsonBody();
	  $err  = $body['error'];

	  $_SESSION['message'] = $err['message'];
	  header('location:error.php');
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

