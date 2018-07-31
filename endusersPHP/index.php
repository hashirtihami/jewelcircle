 <?php
	require 'templates/top.inc.php';
	require 'connect.inc.php'
?>


<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/banner-1.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/banner-2.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
				<strong>Jewellery humari</strong> 
				<br/>Naam apka
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">New <strong>Arrivals</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">
											<?php
												$query = "SELECT productID,no FROM product ORDER BY date desc LIMIT 4";
												$query_run = mysqli_query($conn, $query);
        										while(@$query_array = mysqli_fetch_array($query_run)){
													$lastItem = $query_array["no"];
													$productID = $query_array["productID"];
        											$query = "SELECT producttype.typeName, category.category FROM details JOIN producttype ON details.typeID=producttype.typeID JOIN category ON details.categoryID=category.categoryID WHERE productID=".$query_array["productID"]." LIMIT 1";
        											$result = mysqli_query($conn, $query);
        											while(@$query_array = mysqli_fetch_array($result)){
														echo '<li class="span3">';
														echo '<div class="product-box">';
														echo '<span class="sale_tag"></span>';
														echo '<p><a href="product_detail.html"><img src="../assets/images/products/1.'.$productID.'-thumb.jpg" alt="" /></a></p>';
														echo '<a href="product_detail.html" class="title">'.$query_array["typeName"].' '.$query_array["category"].'</a><br/>';
														echo '<a href="products.html" class="category">'.$query_array["category"].'</a>';
														echo '<p class="price">$17.25</p>';
														echo '</div>';
														echo '</li>';
													}
												}
											?>											
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<?php
													$query = "SELECT productID FROM product WHERE no<".$lastItem." LIMIT 4";
													$query_run = mysqli_query($conn, $query);
        											while(@$query_array = mysqli_fetch_array($query_run)){
														$lastItem = $query_array["productID"];
	        											$query = "SELECT producttype.typeName, category.category FROM details JOIN producttype ON details.typeID=producttype.typeID JOIN category ON details.categoryID=category.categoryID WHERE productID=".$query_array["productID"]." LIMIT 1";
	        											$result = mysqli_query($conn, $query);
	        											while(@$query_array = mysqli_fetch_array($result)){
															echo '<li class="span3">';
															echo '<div class="product-box">';
															echo '<span class="sale_tag"></span>';
															echo '<p><a href="product_detail.html"><img src="assets/image/products/'.$query_array["category"].$query_array["typeName"].'-thumb.jpg" alt="" /></a></p>';
															echo '<a href="product_detail.html" class="title">'.$query_array["typeName"].' '.$query_array["category"].'</a><br/>';
															echo '<a href="products.html" class="category">'.$query_array["category"].'</a>';
															echo '<p class="price">$17.25</p>';
															echo '</div>';
															echo '</li>';
														}
													}
												?>														
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/cloth/10.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$25.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/10.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Quis nostrud exerci tation</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$17.55</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/10.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Know exactly turned</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$25.30</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/10.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">You think fast</a><br/>
														<a href="products.html" class="category">World once</a>
														<p class="price">$25.60</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/10.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Know exactly</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$45.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/10.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$33.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/10.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">You think water</a><br/>
														<a href="products.html" class="category">World once</a>
														<p class="price">$45.30</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/10.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Quis nostrud exerci</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$25.20</p>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>


						<!-- SHIT ALERT ----------------------
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>



							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
		-->


<?php
	require 'templates/bottom.inc.php';
?>