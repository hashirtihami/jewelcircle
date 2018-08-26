<?php
	session_start();
	$_SESSION['product'] = $_POST['product'];
	if(isset($_SESSION['product'])){
		header("location: product.php");
	}
?>