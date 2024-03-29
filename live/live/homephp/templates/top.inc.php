<?php
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="Shortcut Icon" type="image/x-icon" href="../assets/images/logos/favicon2.ico">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="fonts/anydore/anydore.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="top.css">
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v2">
		<!-- Header desktop -->
		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop p-l-45">
					
					<!-- Logo desktop -->		
					<a href="index" class="logo">
						<span class="heading"> Jewel circle</span>
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						
						<ul class="main-menu">
							<li class="active-menu">
								<a href="index">Home</a>
								
							</li>
							<li>
								<a href="product" id="prods">Products</a>
							</li>
							<li>
								<a href="giftcards" id="wutnew">Giftcards</a>
							</li>							
							<li>
								<a href="index#arriwal" id="wutnew">What's New?</a>
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
								<a href="shopping-cart"><i class="zmdi zmdi-shopping-cart"></i></a>
							</div>
						</div>
							
						<div class="flex-c-m h-full p-lr-19">
							<!-- <a href="userregister"> -->
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
										  <button onclick="window.location.href=\'userprofile\'" type="button" class="btn btn-outline-warning" title="Account info">
										  	<i class="fas fa-info-circle"></i>
										  </button>
										  <button onclick="window.location.href=\'accountEdit\'" type="button" class="btn btn-outline-warning" title="Edit Account">
										  	<i class="fas fa-edit"></i>
										  </button>
										  <button onclick="window.location.href=\'logout\'" type="button" class="btn btn-outline-warning" title="Logout">
										  	<i class="fas fa-sign-out-alt"></i>
										  </button>
										</div>';
						}
					else
						echo ' <div class="dropdown-menu" id="loginAnchor">
								<a class="dropdown-item" href="userregister">Login</a>
								</div>
								';
					}
					else
						echo ' <div class="dropdown-menu" id="loginAnchor">
								<a class="dropdown-item" href="userregister">Login</a>
								</div>
								';
				?>

					  </div>
					</div>
						
				</nav>
			</div>	
		</div>
		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index" class="logo">
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
							echo '<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" id="numProdInCartmob" data-notify="'.$numProds.'">';
						}
						else{
							$numProds = 0;
							echo '<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" id="numProdInCartmob" data-notify="'.$numProds.'">';	
						}
					?>
					<!-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2"> -->
						<a href="shopping-cart"><i class="zmdi zmdi-shopping-cart"></i></a>
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
						<a href="index">Home</a>
					</li>
		
					<li>
						<a href="product">Products</a>
					</li>
					<li>
						<a href="giftcards" id="wutnew">Giftcards</a>
					</li>							
					<li>
						<a href="index#arriwal" id="wutnew">What's New?</a>
					</li>						
				  	<?php
				  	if(isset($_SESSION['logged_in'])){
				  		if($_SESSION['logged_in']){
					    	echo '<li><a href="userprofile">Account</a></li>';
					    	echo '<li><a href="logout">Logout</a></li>';
				  		}
				  		else
				    		echo '<li><a href="userregister">Login</a></li>';
					}
			  		else
				    	echo '<li><a href="userregister">Login</a></li>';
				  	?>			
			</ul>
		</div>
	</header>
<script type="text/javascript">
	var animateButton = function(e) {

  e.preventDefault;
  //reset animation
  e.target.classList.remove('animate');
  
  e.target.classList.add('animate');
  setTimeout(function(){
    e.target.classList.remove('animate');
  },700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
  bubblyButtons[i].addEventListener('click', animateButton, false);
}

</script>