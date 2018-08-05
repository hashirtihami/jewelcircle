<?php
	session_start();
	$data=array();
	if(isset($_POST["productID"])&&isset($_POST["product"])&&isset($_POST["price"])&&isset($_POST["quantity"])&&isset($_POST["nameOnProduct"])){
		if(isset($_SESSION['products'])){
			$productExists = 0;
			foreach ($_SESSION["products"] as $key) {
				if($key['productID']===$_POST['productID']){
					$productExists = 1;
					break;
				}
			}
			if(!$productExists){
				$_SESSION["products"][] = array('productID'=>$_POST["productID"],
								                             'title'=>$_POST["product"],
								                             'quantity'=>$_POST["quantity"],
								                             'price'=>$_POST["price"],
								                             'nameOnProduct'=>$_POST["nameOnProduct"]
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
								                             'nameOnProduct'=>$_POST["nameOnProduct"]
															);
			$data["count"] = count($_SESSION["products"]);
			$data["session"] = $_SESSION;
		}
		echo json_encode($data);
	}
?>