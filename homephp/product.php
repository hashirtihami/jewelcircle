<?php
	require 'connect.inc.php';
	require 'templates/top.inc.php';
?>

<section class="sec-product bg0 p-t-100 p-b-50">
		<div class="container">
<!-- 			<div class="p-b-32">
				<h3 class="ltext-105 cl5 txt-center respon1">
				<?php
				if(isset($_POST['product'])){
					$query = "SELECT category FROM category WHERE categoryID=".$_POST['product'];
					$query_run = mysqli_query($conn, $query);
					if(@$query_array = mysqli_fetch_array($query_run)){
						echo $query_array["category"];
					}
				}
				?>
				</h3>
			</div> -->
	<!-- <div class="bg0 m-t-23 p-b-140"> -->
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<!-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*"> -->
						<h3 class="ltext-201 cl5 txt-center respon1">
						<?php
							if(isset($_POST['product'])){
								$query = "SELECT category FROM category WHERE categoryID=".$_POST['product'];
								$query_run = mysqli_query($conn, $query);
								if(@$query_array = mysqli_fetch_array($query_run)){
									echo $query_array["category"];
								}
							}
						?>
						</h3>
					<!-- </button> -->
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

<!-- 					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div> -->
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
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Sort By
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Default
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Popularity
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Average rating
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Newness
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: Low to High
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: High to Low
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
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
									<a href="#" class="filter-link stext-106 trans-04">
										$0.00 - $50.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$50.00 - $100.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$100.00 - $150.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$150.00 - $200.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$200.00+
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Plating
							</div>

							<ul>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #D4AF37;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Gold
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #C0C0C0;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Silver
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

			<div class="row">
				<?php
				if(isset($_POST['product'])){
					$query = "SELECT productID,no,discount FROM product WHERE productID LIKE '".$_POST['product']."_'";
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