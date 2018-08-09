<?php
	require 'connect.inc.php';
	require 'templates/top.inc.php';
?>

<section class="sec-product bg0 p-t-100 p-b-50">
		<div class="container">
			<div class="p-b-32">
				<h3 class="ltext-105 cl5 txt-center respon1">
				<?php
				if(isset($_SESSION['product'])){
					$query = "SELECT category FROM category WHERE categoryID=".$_SESSION['product'];
					$query_run = mysqli_query($conn, $query);
					if(@$query_array = mysqli_fetch_array($query_run)){
						echo $query_array["category"];
					}
				}
				?>
				</h3>
			</div>
			<div class="row">
				<?php
				if(isset($_SESSION['product'])){
					$query = "SELECT productID,no,discount FROM product WHERE productID LIKE '".$_SESSION['product']."_'";
					$query_run = mysqli_query($conn, $query);
					while(@$query_array = mysqli_fetch_array($query_run)){
						$lastItem = $query_array["no"];
						$productID = $query_array["productID"];
						$discount = $query_array["discount"];
						$query = "SELECT producttype.typeName, category.category, platingprice.platingPrice FROM details JOIN producttype ON details.typeID=producttype.typeID JOIN category ON details.categoryID=category.categoryID JOIN platingprice WHERE (details.platingID=1 AND platingprice.platingPriceId=details.platingPriceId AND details.productID=$productID) LIMIT 1";
						if(mysqli_query($conn, $query)){
							$result = mysqli_query($conn, $query);	
						}
						else {
							$query = "SELECT producttype.typeName, category.category, platingprice.platingPrice FROM details JOIN producttype ON details.typeID=producttype.typeID JOIN category ON details.categoryID=category.categoryID JOIN platingprice WHERE (details.platingID=2 AND platingprice.platingPriceId=details.platingPriceId AND details.productID=$productID) LIMIT 1";
							$result = mysqli_query($conn, $query);
						}
						while(@$query_array = mysqli_fetch_array($result)){
							$fakePrice = $query_array["platingPrice"]+$query_array["platingPrice"]*$discount/100;
							echo '<div class="item-slick2 col-lg-3 col-sm-6 p-l-15 p-r-15 p-t-15 p-b-15">';
								echo '<div class="block2">';
									echo '<div class="block2-pic hov-img0">';
										echo '<img src="../assets/images/products/1.'.$productID.'-thumb.jpg" alt="IMG-PRODUCT" style="margin-top: 25%">';
										echo '<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">';
											echo 'Quick View';
										echo '</a>';
									echo '</div>';

									echo '<div class="block2-txt flex-w flex-t p-t-14">';
										echo '<div class="block2-txt-child1 flex-col-l ">';
											echo '<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">';
												echo '<span class="title">'.$query_array['typeName'].' '.$query_array['category'].'</span>';
											echo '</a>';
											echo '<span class="stext-105 cl3">';
											echo '<span class="fakePrice">Rs'.$fakePrice.'</span><span class="discountedPrice"> Rs'.$query_array['platingPrice'].'</span>';
											echo '</span>';
										echo '</div>';
										echo '<div class="label1" data-label1="'.$discount.'%Off"></div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						}
					}
				}
				?>
			</div>
		</div>
</section>

<?php
	require 'quickview-modal.php';
	require 'templates/bottom.inc.php';
?>