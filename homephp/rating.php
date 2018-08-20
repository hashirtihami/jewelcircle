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
	echo json_encode($data);
?>