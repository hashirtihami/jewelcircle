<?php 
	require 'connect.inc.php';

	if(isset($_POST["email"])){
		$email = $_POST['email'];
		$address = $_POST['address'];
		$country = $_POST['country'];
		$city = $_POST['city'];
		$zipcode = $_POST['zipcode'];
		$contact = $_POST['contact'];

		$query = "UPDATE customer 
				SET address = '".$address."', country='".$country."', city='".$city."', zipcode='".$zipcode."', contact='".$contact."'
				WHERE email='".$email."'";

		$query_run = mysqli_query($conn, $query);

	}
?>