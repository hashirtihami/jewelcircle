<?php
	require 'connect.inc.php';
	if(isset($_POST['category'])){
		$categoryID = $_POST['category'];
		$data = array();
		$query = "SELECT category FROM category WHERE categoryID = '$categoryID'";
		$query_run = mysqli_query($conn, $query);
		if($query_array = mysqli_fetch_array($query_run)){
			$data['category'] = $query_array['category'];
		}
		echo json_encode($data);
	}
?>