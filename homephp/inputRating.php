<?php
	require 'connect.inc.php';
	session_start();
	if(isset($_SESSION['logged_in'])){
		if($_SESSION['logged_in']){
			$email = $_SESSION['email'];
			$PID = $_POST['PID'];
			$rating = $_POST['rating'];
			$data = array();
			$query = "SELECT * FROM reviews WHERE (email='$email' && productID='$PID')";
			$query_run = mysqli_query($conn, $query);
			if(mysqli_num_rows($query_run)>0){
				$query = "UPDATE reviews set rating = $rating WHERE (email='$email' AND productID='$PID')";
				$query_run = mysqli_query($conn, $query);
			}
			else{
				$query = "INSERT INTO reviews (rating, productID, email) VALUES ('$rating','$PID','$email')";
				$query_run = mysqli_query($conn, $query);
			}
		}
		else{
			$data['message'] = "You need to login or register";
			echo json_encode($data);
		}
	}
	else{
		$data['message'] = "You need to login or register";
		echo json_encode($data);
	}
?>