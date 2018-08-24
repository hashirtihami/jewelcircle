<?php
	session_start();
	$data=array();
	if(isset($_POST["productID"])&&isset($_POST["product"])&&isset($_POST["price"])&&isset($_POST["quantity"])&&isset($_POST["nameOnProduct"])){
		if(isset($_SESSION['products'])){
			$productExists = 0;
			foreach ($_SESSION["products"] as $key) {
				if($key['productID']===$_POST['productID']&&$key["nameOnProduct"]===$_POST["nameOnProduct"]){
					$productExists = 1;
					break;
				}
			}
			if(!$productExists){
				$_SESSION["products"][] = array('productID'=>$_POST["productID"],
					                             'title'=>$_POST["product"],
					                             'quantity'=>$_POST["quantity"],
					                             'price'=>$_POST["price"],
					                             'nameOnProduct'=>$_POST["nameOnProduct"],
					                             'language'=>$_POST['language'],
					                             'nametype'=>$_POST['nametype'],
					                             'plating'=>$_POST['plating'],
					                             'size'=>$_POST['size']
												);
				$data["count"] = count($_SESSION["products"]);
				$data["session"] = $_SESSION;
			}
			else{
				$data["keyPID"] = $key["productID"];
				$data["productID"] = $_POST['productID'];
				$data["error"] = "Product Already in Cart";
			}
		}
		else{
			$_SESSION["products"][] = array('productID'=>$_POST["productID"],
				                             'title'=>$_POST["product"],
				                             'quantity'=>$_POST["quantity"],
				                             'price'=>$_POST["price"],
				                             'nameOnProduct'=>$_POST["nameOnProduct"],
				                             'language'=>$_POST['language'],
				                             'nametype'=>$_POST['nametype'],
				                             'plating'=>$_POST['plating'],
				                             'size'=>$_POST['size']
											);
			$data["count"] = count($_SESSION["products"]);
			$data["session"] = $_SESSION;
		}
		echo json_encode($data);
	}
	if(isset($_POST['cardName'])&&isset($_POST["cardCost"])){
		if(isset($_SESSION['products'])){
			$productExists = 0;
			foreach ($_SESSION["products"] as $key) {
				if($key['cardName']===$_POST['cardName']){
					$productExists = 1;
					break;
				}
			}
			if(!$productExists){
				$_SESSION["products"][] = array('cardName'=>$_POST["cardName"],
					                             'cardCost'=>$_POST['cardCost']
												);
				$data["success"] = "Added to Cart";
				$data["count"] = count($_SESSION["products"]);
				$data["session"] = $_SESSION;
			}
			else{
				$data["error"] = "Product Already in Cart";
			}
		}
		else{
			$_SESSION["products"][] = array('cardName'=>$_POST["cardName"],
				                             'cardCost'=>$_POST['cardCost']
											);
			$data["success"] = "added to Cart";
			$data["count"] = count($_SESSION["products"]);
			$data["session"] = $_SESSION;
		}
		echo json_encode($data);
	}
?>