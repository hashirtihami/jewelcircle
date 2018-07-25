<?php
	require 'connect.inc.php';
	if(isset($_POST['data'])){
		$delete = $_POST['data'];
		echo $delete;
		if(!empty($delete)){
			$query = "DELETE FROM coupon WHERE couponCode='$delete' COLLATE SQL_Latin1_General_CP1_CS_AS";
			if(mysqli_query($conn, $query)){
			    echo mysqli_use_result($conn);
			}
			$query = "DELETE FROM shipping WHERE country='$delete'";
			if(mysqli_query($conn, $query)){
			    echo mysqli_use_result($conn);
			}
		}
	}
?>