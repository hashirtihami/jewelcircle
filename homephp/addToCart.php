<?php
	session_start();
	if(isset($_POST["productID"])&&isset($_POST["product"])&&isset($_POST["price"])&&isset($_POST["quantity"])&&isset($_POST["nameOnProduct"])){
		$_SESSION["product"] = array('productID'=>$_POST["productID"],
		                             'title'=>$_POST["product"],
		                             'quantity'=>$_POST["quantity"],
		                             'price'=>$_POST["price"],
		                             'nameOnProduct'=>$_POST["nameOnProduct"]
									);
		print_r($_SESSION["product"]);
	}
?>