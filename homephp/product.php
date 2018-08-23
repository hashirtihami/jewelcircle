<?php
	require 'connect.inc.php';
	require 'templates/top.inc.php';
?>
<title>Our Products</title>
<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<?php
						$query = "SELECT * FROM category";
						$query_run = mysqli_query($conn, $query);
						while(@$query_array = mysqli_fetch_array($query_run)){
							echo '<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".'.$query_array['category'].'">';
								echo $query_array['category'];
							echo '</button>'; 
						}
					?>

				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w w-full p-lr-40 p-t-27 p-lr-15-sm">	

						<div id="filters" class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										All
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="th_tw">
										Rs1000 - Rs5000
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="tw_fif">
										Rs5000 - Rs10000
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="fif_eit">
										Rs10000 - Rs15000
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="eit_two">
										Rs15000 - Rs20000
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="twoplus">
										$20000+
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col3 p-r-15 p-b-27 plating">
							<div class="mtext-102 cl2 p-b-15">
								Plating
							</div>

							<ul>
								<?php
									$query = "SELECT * FROM plating";
									$query_run = mysqli_query($conn, $query);
									while(@$query_array = mysqli_fetch_array($query_run)){
										echo '<li class="p-b-6">';
											echo '<span class="fs-15 lh-12 m-r-6" style="color: '.$query_array['platingType'].';">';
												echo '<i class="zmdi zmdi-circle"></i>';
											echo '</span>';

											echo '<a href="#" class="filter-link stext-106 trans-04" data-filter=".'.$query_array['platingType'].'">';
												echo $query_array['platingType'];
											echo '</a>';
										echo '</li>';
									}
								?>
							</ul>
						</div>

					</div>
				</div>
			</div>


			<div class="row isotope-grid">
				<?php
					$query = "SELECT productID,no,discount FROM product ORDER BY date desc";
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
							echo '<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 item-slick2 ';
							$query = "SELECT * FROM details WHERE (platingID=1 AND productID=".$productID.")";
							$run = mysqli_query($conn, $query);
							if(mysqli_num_rows($run)>0){
								echo 'Silver';
							}
							$query = "SELECT * FROM details WHERE (platingID=2 AND productID=".$productID.")";
							$run = mysqli_query($conn, $query);
							if(mysqli_num_rows($run)>0){
								echo ' Gold';
							}
							echo ' isotope-item '.$query_array['category'].'">';
							// <!-- Block2 -->
								echo '<div class="block2">';
									echo '<div class="block2-pic hov-img0">';
										echo '<img src="../assets/images/products/1.'.$productID.'-thumb.jpg" alt="IMG-PRODUCT" style="margin-top: 25%">';
										echo '<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg5 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">';
											echo 'View details';
										echo '</a>';
									echo '</div>';

									echo '<div class="block2-txt flex-w flex-t p-t-14">';
										echo '<div class="block2-txt-child1 flex-col-l ">';
											echo '<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">';
												echo '<span class="title">'.$query_array["typeName"].' '.$query_array["category"].'</span>';
											echo '</a>';
											echo '<span class="stext-105 cl3">';
												echo '<span class="fakePrice">Rs'.$fakePrice.'</span><span class="discountedPrice"> Rs'.$query_array["platingPrice"].'</span>';
											echo '</span>';
										echo '</div>';
										echo '<div class="label1" data-label1="'.$discount.'%Off"></div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						}
					}
				?>
			</div>

			<!-- Load more -->
			<!-- <div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div> -->
		</div>
	</div>

<?php
	require 'quickview-modal.php';
	require 'templates/bottom.inc.php';
?>
<script type="text/javascript">
	$(document).ready(function(){
	   $(".overlay-modal1").css({
      "overflow-y" : "scroll"
   });

})

</script>