<?php
	var_dump($_POST);
	if(isset($_POST['couponCode'])){
		echo 'hi';
		$code = $_POST['couponCode'];
		echo $code;
		exit;
	}
	if(isset($_POST['submit'])){
		$couponCode = $_POST['couponCode'];
		$desc = $_POST['description'];
		$discount = $_POST['discount'];
		$expDate = $_POST['expiryDate'];
		if(!empty($couponCode)&&!empty($desc)&&!empty($discount)&&!empty($expDate)){
			$query = "INSERT INTO coupon (couponCode, description, discount, expiryDate) VALUES ('$couponCode','$desc', '$discount', '$expDate')";
			if(mysqli_query($conn, $query)){
			    echo mysqli_use_result($conn);
			}
		}
		echo "<meta http-equiv='refresh' content='0'>";
	}
?>

<?php
  require 'templates/top.inc.php';
  require 'couponsTable.php';
  require 'popup.php';
  require 'templates/bottom.inc.php';
  require 'connect.inc.php';
?>

<style type="text/css">
	.hideShow {
	  display: none;
	}
	.chotaSize   {
	  font-weight: 100 !important;
	  padding: 4px;
	}
	#newButton  {
	  margin: 5px 0px !important;
	}
</style>

<script src="../viewForm.js"></script>

