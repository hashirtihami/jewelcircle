<?php
	require 'connect.inc.php';
	session_start();
	if(!isset($_SESSION['logged_in'])){
		if(!$_SESSION['logged_in']){
			$_SESSION['message'] = "<a href='userregister.php'>Register or log in</a> to place an order";
			header("location: error.php");
		}
	}
    $email = $_SESSION['email'];
    $query = "SELECT * FROM customer WHERE email='".$email."'";
    $query_run = mysqli_query($conn, $query);
    if(@$query_array=mysqli_fetch_array($query_run)){
      $address = $query_array['address'];
      $country = $query_array['country'];
      $city = $query_array['city'];
      $zipcode = $query_array['zipcode'];
  	}
	require 'templates/top.inc.php';
?>

<div class="container">
	<div class="row" style="margin-top: 10px;">
		<div class="col-sm-5 col-lg-5 col-xl-5 m-lr-auto m-b-50">
			<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-25 m-r--38 m-lr-0-xl">
				<form action="payment.php">
					<h4 class="mtext-109 cl2 p-b-30">
						Use account address
					</h4>

					<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
						Checkout
					</button>
				<form>
			</div>
		</div>
		<div class="col-sm-7 col-lg-7 col-xl-7 m-lr-auto m-b-50">
			<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
				<form action="payment.php">
					<h4 class="mtext-109 cl2 p-b-30">
						New shipping address
					</h4>

					<div class="form-group" style="display: none">
		                <div class="input-group">
		                  <input id="email" type="hidden" class="form-control" placeholder="Email"
		                 <?php echo 'value="'.$email.'"';?>
		                 >                 
		                </div>
		              </div>

					<div class="form-group">
		                <div class="input-group">
		                  <div class="input-group-addon" title="Address">
		                    <i class="fas fa-map-marker"></i>
		                  </div>
		                  <input id="address" type="text" class="form-control" placeholder="Address (editable)"
		                 <?php echo 'value="'.$address.'"';?>
		                 >                 
		                </div>
		              </div>
		              
		              <div class="form-group">
		                <div class="input-group">
		                  <div class="input-group-addon" title="City">
		                    <i class="fas fa-map-marker"></i>
		                  </div>
		                  <input id="city" type="text" class="form-control" placeholder="City (editable)"
		                  <?php echo 'value="'.$city.'"';?>
		                  >
		                                   
		                </div>
		              </div>
		              <div class="form-group">
		                <div class="input-group">
		                  <div class="input-group-addon" title="Country">
		                    <i class="fas fa-map-marker"></i>
		                  </div>
		                  <input id="country" type="text" class="form-control" placeholder="Country (editable)"
		                  <?php echo 'value="'.$country.'"';?>
		                  >
		                                   
		                </div>
		              </div>
		              
		             
		              <div class="form-group">
		                <div class="input-group">
		                  <div class="input-group-addon" title="Zipcode">
		                    <i class="fas fa-map-marker"></i>
		                  </div>
		                  <input id="zipcode" type="text" class="form-control" placeholder="Zipcode (editable)"
		                  <?php echo 'value="'.$zipcode.'"';?>
		                  >
		                                    
		                </div>
		              </div>

					<button id="newAddr" type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
						Checkout
					</button>
				<form>
			</div>
		</div>
	</div>
</div>

<?php 
	require 'templates/bottom.inc.php'
?>