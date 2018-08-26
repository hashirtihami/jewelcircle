<?php
	require __DIR__ ."/../connect.inc.php";
	if(isset($_POST["title"])){
		$data = array(
		);
		$html = "";
		$title = explode(" ", $_POST["title"]);
		$type = current($title);
		$category = end($title);
		$query = "SELECT categoryID FROM category WHERE category='$category'";
		$query_run = mysqli_query($conn, $query);
		if(@$query_array = mysqli_fetch_array($query_run)){
            $categoryID = $query_array["categoryID"];
      	}
      	$query = "SELECT typeID FROM producttype WHERE typeName='$type'";
		$query_run = mysqli_query($conn, $query);
		if(@$query_array = mysqli_fetch_array($query_run)){
            $typeID = $query_array["typeID"];
      	}
      	$productID = $categoryID.$typeID;
      	$data['productID'] = $productID;
      	$query = "SELECT * FROM images WHERE productID='$productID'";
      	$query_run = mysqli_query($conn, $query);
      	while(@$query_array = mysqli_fetch_array($query_run)){
	      	$div = '<div class="item-slick3" data-thumb="'.$query_array["imageDestination"].'">
		      			<div class="wrap-pic-w pos-relative">
							<img src="'.$query_array["imageDestination"].'" alt="IMG-PRODUCT">

							<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="'.$query_array["imageDestination"].'">
								<i class="fa fa-expand"></i>
							</a>
						</div>
					</div>';
      		$html .= $div;
      	}
      	$data['html'] = $html;
      	$query = "SELECT description,size FROM product WHERE productID='$productID'";
      	$query_run = mysqli_query($conn, $query);
      	if(@$query_array = mysqli_fetch_array($query_run)){
                  $data["description"] = $query_array["description"];
      		$data["size"] = $query_array["size"];
      	}
      	$query = "SELECT * from plating";
      	$query_run = mysqli_query($conn, $query);
      	while(@$query_array = mysqli_fetch_array($query_run)){
      		$query = "SELECT plating.platingType, platingPrice.platingPrice FROM details JOIN plating ON details.platingID=plating.platingID JOIN platingprice ON details.platingPriceId=platingPrice.platingPriceId WHERE details.platingPriceID=".$productID.$query_array["platingID"];
      		$result = mysqli_query($conn, $query);
      		if(@$price = mysqli_fetch_array($result)){
      			$data["plating"][] = array($query_array["platingType"],$price["platingPrice"]);
      		}
      	}
      	$query = "SELECT * from language";
      	$query_run = mysqli_query($conn, $query);
      	while(@$query_array = mysqli_fetch_array($query_run)){
      		$query = "SELECT language.languageName, languagePrice.languagePrice FROM details JOIN language ON details.languageID=language.languageID JOIN languageprice ON details.languagePriceId=languagePrice.languagePriceId WHERE details.languagePriceId=".$productID.$query_array["languageID"];
      		$result = mysqli_query($conn, $query);
      		if(@$price = mysqli_fetch_array($result)){
      			$data["language"][] = array($query_array["languageName"],$price["languagePrice"]);
      		}
      	}
      	$query = "SELECT * from nametype";
      	$query_run = mysqli_query($conn, $query);
      	while(@$query_array = mysqli_fetch_array($query_run)){
      		$query = "SELECT nametype.nameTypeValue, nameTypePrice.nameTypePrice FROM details JOIN nametype ON details.nameTypeID=nametype.nameTypeID JOIN nametypeprice ON details.nameTypePriceId=nameTypePrice.nameTypePriceId WHERE details.nameTypepriceId=".$productID.$query_array["nameTypeID"];
      		$result = mysqli_query($conn, $query);
      		if(@$price = mysqli_fetch_array($result)){
      			$data["nametype"][] = array($query_array["nameTypeValue"],$price["nameTypePrice"]);
      		}
      	}
      	$query = "SELECT nameLength FROM product WHERE productID='$productID'";
      	$query_run = mysqli_query($conn, $query);
      	if(@$query_array = mysqli_fetch_array($query_run)){
      		$data["nameLength"] = $query_array["nameLength"];
      	}
      	echo json_encode($data);
	}
?>