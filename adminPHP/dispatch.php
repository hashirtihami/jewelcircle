<?php 
require 'connect.inc.php';
	if(isset($_POST['data'])){
		$dispatch = $_POST['data'];
		if(!empty($dispatch)){
			$query = "SELECT status FROM `order` WHERE orderID='$dispatch'";
			$query_run = mysqli_query($conn, $query);
			if(@$query_array = mysqli_fetch_array($query_run))
				$status = $query_array['status'];
			if($status == 'Pending'){
				$query = "UPDATE `order` SET status = 'Dispatched' WHERE orderID='$dispatch'";
				if(mysqli_query($conn, $query)){
				    echo mysqli_use_result($conn);
				}
			}
			else{
				$query = "UPDATE `order` SET status = 'Pending' WHERE orderID='$dispatch'";
				if(mysqli_query($conn, $query)){
				    echo mysqli_use_result($conn);
				}
			}
		}
	}
?>