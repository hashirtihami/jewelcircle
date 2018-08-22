<?php
	require 'connect.inc.php';
	require 'templates/top.inc.php';

	// $router->add('home', '/', 'userprofile.php');
?>
	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1 rs1-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(../assets/images/posters/jc2.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 cl2 respon2">
									Jewel Circle
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
									New arrivals
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 buttonCss">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(../assets/images/posters/jc3.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-202 cl2 respon2">
									Jewel Circle
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
									Name Ring
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 buttonCss">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(../assets/images/posters/jc1.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-202 cl2 respon2">
									The mid season sale
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
									UPTO 50% OFF
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 buttonCss">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Product -->
	<section class="sec-product bg0 p-t-100 p-b-50">
		<div class="container" id="arriwal">
			<div class="p-b-32">
				<h3 class="ltext-105 cl5 txt-center respon1">
					Store Overview
				</h3>
			</div>

			<!-- Tab01 -->
			<div class="tab01"  >
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item p-b-10">
						<a class="nav-link active" data-toggle="tab" href="#new-arrivals" role="tab">New Arrivals</a>
					</li>

					<li class="nav-item p-b-10">
						<a class="nav-link" data-toggle="tab" href="#featured" role="tab">Featured</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-50">
					<!-- - -->
					<div class="tab-pane fade show active" id="new-arrivals" role="tabpanel">
						<!-- Slide2 -->
						<div class="wrap-slick2">
							<div class="slick2">
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
											echo '<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">';
											// <!-- Block2 -->
												echo '<div class="block2">';
													echo '<div class="block2-pic hov-img0">';
														echo '<img src="../assets/images/products/1.'.$productID.'-thumb.jpg" alt="IMG-PRODUCT" style="margin-top: 25%">';
														echo '<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">';
															echo 'Quick View';
														echo '</a>';
													echo '</div>';

													echo '<div class="block2-txt flex-w flex-t p-t-14">';
														echo '<div class="block2-txt-child1 flex-col-l ">';
															echo '<a href="product-detail.html" onclick="return false" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">';
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
						</div>
					</div>

					<!-- - -->
					<div class="tab-pane fade show-active" id="featured" role="tabpanel">
						<!-- Slide2 -->
						<div class="wrap-slick2">
							<div class="slick2">
								<?php
									$query = "SELECT product.productID,no,discount FROM product JOIN reviews ON product.productID=reviews.productID ORDER BY reviews.rating desc";
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
											echo '<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">';
											// <!-- Block2 -->
												echo '<div class="block2">';
													echo '<div class="block2-pic hov-img0">';
														echo '<img src="../assets/images/products/1.'.$productID.'-thumb.jpg" alt="IMG-PRODUCT" style="margin-top: 25%">';
														echo '<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">';
															echo 'Quick View';
														echo '</a>';
													echo '</div>';

													echo '<div class="block2-txt flex-w flex-t p-t-14">';
														echo '<div class="block2-txt-child1 flex-col-l ">';
															echo '<a href="product-detail.html" onclick="return false" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">';
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php
	require 'quickview-modal.php';
	require 'templates/modal.inc.php';
	require 'templates/bottom.inc.php';
?>