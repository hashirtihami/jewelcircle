<?php 
	require 'connect.inc.php';
	if(isset($_POST['data'])){
		$data = array();
		$orderID = $_POST['data'];
		$query = "SELECT CONCAT(first_name,' ', last_name) name, address, city, zipcode FROM customer WHERE customerID=(SELECT customerID FROM `order` WHERE orderID = '$orderID')";
		$query_run = mysqli_query($conn, $query);
		if(@$query_array = mysqli_fetch_array($query_run)){
			$data['name'] = $query_array['name'];
			$data['address'] = $query_array['address'];
			$data['city'] = $query_array['city'];
			$data['zipcode'] = $query_array['zipcode'];
		}
		$query = "SELECT orderDate FROM `order` WHERE orderID='$orderID'";
		$query_run = mysqli_query($conn, $query);
		if(@$query_array = mysqli_fetch_array($query_run)){
			$data['date'] = $query_array['orderDate'];
		}
		$query = "SELECT orderID, category, typeName, languageName, platingType, nameTypeValue, (languagePrice + platingPrice + nameTypePrice) totalAmount, quantity, nameOnProduct FROM order_product, details JOIN category ON category.categoryID=details.categoryID JOIN producttype ON producttype.typeID=details.typeID JOIN language ON language.languageID=details.languageID JOIN plating ON plating.platingID=details.platingID JOIN nameType ON nameType.nameTypeID=details.nameTypeID JOIN languageprice ON languageprice.languagePriceId=details.languagePriceId JOIN platingprice ON platingprice.platingPriceId=details.platingPriceId JOIN nametypeprice ON nametypeprice.nameTypePriceId=details.nameTypePriceId WHERE (orderID = '20' AND order_product.detailsID = details.detailsID)";
		$query_run = mysqli_query($conn, $query);
		$i=	0;
		while(@$query_array = mysqli_fetch_array($query_run)){
			$data['product'][$i]['category'] = $query_array['category'];
			$data['product'][$i]['type'] = $query_array['typeName'];
			$data['product'][$i]['language'] = $query_array['languageName'];
			$data['product'][$i]['plating'] = $query_array['platingType'];
			$data['product'][$i]['nameType'] = $query_array['nameTypeValue'];
			$data['product'][$i]['totalAmount'] = $query_array['totalAmount'];
			$data['product'][$i]['quantity'] = $query_array['quantity'];
			$data['product'][$i]['nameOnProduct'] = $query_array['nameOnProduct'];
			$i++;
		}
		echo json_encode($data);
	}
?>