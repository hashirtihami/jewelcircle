<?php
require_once('vendor/autoload.php');
session_start();

\Stripe\Stripe::setApiKey('sk_test_8GpMYeW7Nk1C6w3cN8sbfITS');

// SANITIZING POST ARRAY  - IMP SHIT
$_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$email = $_SESSION['email'];
$token = $_POST['stripeToken'];
// creating customer in stripe only -  no db shit
$customer = \Stripe\Customer::create(array(
	"email" => $email,
	"source" => $token
));

//charge customer
$charge = \Stripe\Charge::create(array(
	"amount" => $total,
	"currency" => "usd",
	"description" => "jewelcircle payment",
	"customer" => $customer->id
));

// print_r($charge);
//echo $token;

?>

