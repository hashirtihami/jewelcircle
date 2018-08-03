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
      	echo json_encode($data);
	}
?>