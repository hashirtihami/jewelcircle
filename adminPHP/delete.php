<?php
	require 'connect.inc.php';
	if(isset($_POST['data'])){
		$delete = $_POST['data'];
		echo $delete;
		if(!empty($delete)){
			$query = "DELETE FROM coupon WHERE couponCode='$delete'";
			if(mysqli_query($conn, $query)){
			    echo mysqli_use_result($conn);
			}
			$query = "DELETE FROM shipping WHERE country='$delete'";
			if(mysqli_query($conn, $query)){
			    echo mysqli_use_result($conn);
			}
			$query = "DELETE FROM giftcard WHERE cardName='$delete'";
			if(mysqli_query($conn, $query)){
			    echo mysqli_use_result($conn);
			}
			$query = "DELETE FROM `order` WHERE orderID='$delete';
					DELETE FROM `order_product` WHERE orderID='$delete'";
			if(mysqli_multi_query($conn,$query)){
				echo mysqli_use_result($conn);
			}
		}
	}
	if(isset($_POST["category"])&&isset($_POST["type"])){
		$category = $_POST["category"];
		$type = $_POST["type"];
		echo $category;
		echo $type;
		$query = "SELECT categoryID FROM category WHERE category='$category'";
		$query_run = mysqli_query($conn, $query);
        while(@$query_array = mysqli_fetch_array($query_run)){
        	$categoryID = $query_array["categoryID"];
        }
		$query = "SELECT typeID FROM producttype WHERE typeName='$type'";
		$query_run = mysqli_query($conn, $query);
        while(@$query_array = mysqli_fetch_array($query_run)){
        	$typeID = $query_array["typeID"];
        }
		$query = "DELETE FROM product WHERE productID = CONCAT('$categoryID','$typeID')";
		if(mysqli_query($conn, $query)){
		    echo mysqli_use_result($conn);
		}
		$query = "DELETE FROM details WHERE productID = CONCAT('$categoryID','$typeID')";
		if(mysqli_query($conn, $query)){
		    echo mysqli_use_result($conn);
		}
		$query = "SELECT platingID FROM plating";
        $run = mysqli_query($conn, $query);
        while(@$query_array = mysqli_fetch_array($run)){
        	$query = "DELETE FROM platingprice WHERE platingPriceId = CONCAT(CONCAT('$categoryID','$typeID'), ".$query_array["platingID"].")";
        	if(mysqli_query($conn, $query)){
		    	echo mysqli_use_result($conn);
			}
        }
        $query = "SELECT languageID FROM language";
        $run = mysqli_query($conn, $query);
        while(@$query_array = mysqli_fetch_array($run)){
        	$query = "DELETE FROM languagePrice WHERE languagePriceId = CONCAT(CONCAT('$categoryID','$typeID') , ".$query_array["languageID"].")";
        	if(mysqli_query($conn, $query)){
		    	echo mysqli_use_result($conn);
			}
        }
        $query = "SELECT nameTypeID FROM nametype";
        $run = mysqli_query($conn, $query);
        while(@$query_array = mysqli_fetch_array($run)){
        	$query = "DELETE FROM nameTypePrice WHERE nameTypePriceId = CONCAT(CONCAT('$categoryID','$typeID'), ".$query_array["nameTypeID"].")";
        	if(mysqli_query($conn, $query)){
		    	echo mysqli_use_result($conn);
			}
        }
	}
?>