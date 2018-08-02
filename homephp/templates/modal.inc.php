<?php
	require __DIR__ ."/../connect.inc.php";
	if(isset($_POST["title"])){
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
      	echo $productID = $categoryID.$typeID;
	}
?>