<?php
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jewel Circle</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/anydore/anydore.css">
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v2">
		<!-- Header desktop -->
		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop p-l-45">
					
					<!-- Logo desktop -->		
					<a href="index.php" class="logo">
						<span class="heading"> Jewel circle</span>
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						
						<ul class="main-menu">
							<li class="active-menu">
								<a href="index.php">Home</a>
								
							</li>
							<form id="submitProduct" action="product.php" method="post">
								<input id="hiddenProduct" type="hidden" name="product">
							</form>
							<?php
								$query = "SELECT * FROM category";
								$query_run = mysqli_query($conn, $query);
								while(@$query_array = mysqli_fetch_array($query_run)){
									echo '<li><a href="#" onclick="submitProduct('.$query_array['categoryID'].')">'.$query_array['category'].'</a></li>';
								}
							?>
							
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m h-full">
						<div class="flex-c-m h-full p-r-24">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
								<i class="zmdi zmdi-search"></i>
							</div>
						</div>
							
						<div class="flex-c-m h-full p-l-18 p-r-25 bor5">
							<?php
								if(isset($_SESSION['products'])){
									$numProds = count($_SESSION['products']);
									echo '<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" id="numProdInCart" data-notify="'.$numProds.'">';
								}
								else{
									$numProds = 0;
									echo '<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" id="numProdInCart" data-notify="'.$numProds.'">';	
								}
							?>
							<!-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" id="numProdInCart" data-notify="0"> -->
								<a href="shopping-cart.php"><i class="zmdi zmdi-shopping-cart"></i></a>
							</div>
						</div>
							
						<div class="flex-c-m h-full p-lr-19">
							<!-- <a href="userregister.php"> -->
								<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-sidebar btn-group">
								<button id="logoutBtn" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-user"></i>
								</button>
								  <div class="dropdown-menu" id="dropdown">
								    <a class="dropdown-item" href="#">Action</a>
								 <!--    <a class="dropdown-item" href="#">Another action</a>
								    <a class="dropdown-item" href="#">Something else here</a>
								    <div class="dropdown-divider"></div>
								    <a class="dropdown-item" href="#">Separated link</a> -->
								  </div>
								</div>
							</a>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.php" class="logo">
						<span class="heading"> Jewel circle</span>
					</a>

			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
				<div class="flex-c-m h-full p-r-10">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
						<i class="zmdi zmdi-search"></i>
					</div>
				</div>

				<div class="flex-c-m h-full p-lr-10 bor5">
					<?php
						if(isset($_SESSION['products'])){
							$numProds = count($_SESSION['products']);
							echo '<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" id="numProdInCart" data-notify="'.$numProds.'">';
						}
						else{
							$numProds = 0;
							echo '<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" id="numProdInCart" data-notify="'.$numProds.'">';	
						}
					?>
					<!-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2"> -->
						<a href="shopping-cart.php"><i class="zmdi zmdi-shopping-cart"></i></a>
					</div>
				</div>
			</div>



			
			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
					<li>
								<a href="index.php">Home</a>
							</li>
				
							<li>
								<a href="product.html">Ring</a>
							</li>

							<li >
								<a href="shoping-cart.html">Locket</a>
							</li>

							<li>
								<a href="blog.html">Bracelet</a>
							</li>

							<li>
								<a href="about.html">Cufflinks</a>
							</li>

			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>