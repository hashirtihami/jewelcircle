<?php
	require 'connect.inc.php';
	$data = array();
	$PID = $_POST['PID'];
	// echo $PID;
	$query = "SELECT ROUND(AVG(rating)) rating FROM reviews WHERE productID='$PID'";
	$query_run = mysqli_query($conn, $query);
	if(@$query_array = mysqli_fetch_array($query_run)){
		$data['rating'] = $query_array['rating'];
	}
	$query = "SELECT * FROM reviews WHERE productID='$PID'";
	$query_run = mysqli_query($conn, $query);
	$data['numReviews'] = mysqli_num_rows($query_run);
	echo json_encode($data);
?>