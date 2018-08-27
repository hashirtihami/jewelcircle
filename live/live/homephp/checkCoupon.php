<?php
	require 'connect.inc.php';
	if(isset($_POST['couponCode'])){
		$data = array();
		$query = "SELECT discount FROM coupon WHERE couponCode = '".$_POST['couponCode']."'";
		// echo $query;
		$query_run = mysqli_query($conn, $query);
		if(@$query_array = mysqli_fetch_array($query_run)){
			$_SESSION["couponCode"] = $_POST["couponCode"];
			$data["discount"] = $query_array["discount"];
		}
		// echo "hi";
		echo json_encode($data);
	}
?>