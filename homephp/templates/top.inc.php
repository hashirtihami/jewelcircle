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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
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
							<li>
								<a href="product.php">Products</a>
							</li>
							<li>
								<a href="index.php#arriwal">What's New?</a>
							</li>							
							
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m h-full">
<!-- 						<div class="flex-c-m h-full p-r-24">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
								<i class="zmdi zmdi-search"></i>
							</div>
						</div> -->
							
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
					<div class="icon-header-item hov-cl1 trans-04 p-lr-11 js-show-sidebar btn-group">
									<button id="logoutBtn" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-user"></i>
									</button>
				<?php
					if(isset($_SESSION['logged_in'])){
						if($_SESSION['logged_in']){

							echo'
									  <div class="dropdown-menu" id="dropdown">
				
									    <div class="btn-group">
										  <button onclick="window.location.href=\'userprofile.php\'" type="button" class="btn btn-outline-warning" title="Account info">
										  	<i class="fas fa-info-circle"></i>
										  </button>
										  <button onclick="window.location.href=\'accountEdit.php\'" type="button" class="btn btn-outline-warning" title="Edit Account">
										  	<i class="fas fa-edit"></i>
										  </button>
										  <button onclick="window.location.href=\'logout.php\'" type="button" class="btn btn-outline-warning" title="Logout">
										  	<i class="fas fa-sign-out-alt"></i>
										  </button>
										</div>';
						}
					else
						echo ' <div class="dropdown-menu" id="dropdown">
								<a class="dropdown-item" href="userregister.php">Log In</a>
								</div>
								';
					}
					else
						echo ' <div class="dropdown-menu" id="dropdown">
								<a class="dropdown-item" href="userregister.php">Log In</a>
								</div>
								';
/*
								  	<?php
								  	if(isset($_SESSION['logged_in'])){
								  		if($_SESSION['logged_in']){
									    	echo '<a class="dropdown-item" href="userprofile.php">Account</a>';
									    	echo '<a class="dropdown-item" href="logout.php">Logout</a>';
								  		}
								  		else
								    		echo '<a class="dropdown-item" href="userregister.php">Login</a>';
								  	}
							  		else
								    	echo '<a class="dropdown-item" href="userregister.php">Login</a>';
								  	?>
*/ 				
				?>
								  </div>
								</div>
							<!-- </a> -->
						</div>
					<!-- </div> -->
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
	<!-- 			<div class="flex-c-m h-full p-r-10">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
						<i class="zmdi zmdi-search"></i>
					</div>
				</div> -->

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
			<ul class="main-menu-m bg-dark">
					<li>
						<a href="index.php">Home</a>
					</li>
		
					<li>
						<a href="product.php">Products</a>
					</li>
				  	<?php
				  	if(isset($_SESSION['logged_in'])){
				  		if($_SESSION['logged_in']){
					    	echo '<li><a href="userprofile.php">Account</a></li>';
					    	echo '<li><a href="logout.php">Logout</a></li>';
				  		}
				  		else
				    		echo '<li><a href="userregister.php">Login</a></li>';
					}
			  		else
				    	echo '<li><a href="userregister.php">Login</a></li>';
				  	?>				
					<!-- <li>
						<a href="userprofile.php">Account</a>
					</li>
		
					<li>
						<a href="product.php">Logout</a>
					</li> -->					
			</ul>
		</div>

		<!-- Modal Search -->
<!-- 		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
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
		</div> -->
	</header>