<?php
	require 'connect.inc.php';
	if(isset($_POST['couponCode'])){
		$cCode = $_POST['couponCode'];
		echo $cCode;
		if(!empty($cCode)){
			$query = "DELETE FROM coupon WHERE couponCode='$cCode'";
			if(mysqli_query($conn, $query)){
			    echo mysqli_use_result($conn);
			}
		}
	}
?>