<?php
	require 'connect.inc.php';
	require 'templates/top.inc.php';
?>

<div class="container">
	<div class="row">
		<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
			<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-25 m-r--38 m-lr-0-xl">
				<form action="payment.php" method="POST">
					<h4 class="mtext-109 cl2 p-b-30">
						Enter Shipping Details
					</h4>
					<div class="form-group row">
					    <label for="name" class="col-sm-2 col-form-label">First Name</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="name" placeholder="Name">
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="name" class="col-sm-2 col-form-label">Last Name</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="name" placeholder="Name">
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="address" class="col-sm-2 col-form-label">Address</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="address" placeholder="Address">
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="contact" class="col-sm-2 col-form-label">Contact</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="contact" placeholder="Contact">
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="city" class="col-sm-2 col-form-label">City</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="city" placeholder="City">
					    </div>
				  	</div>
				  	<div class="form-group row">
				    	<label for="inputzip" class="col-sm-2 col-form-label">Zip Code</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="inputzip" required placeholder="Zipcode" name='zipcode'>
				    	</div>
				  	</div>
					<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
						Checkout
					</button>
				</form>
			</div>
		</div>
		<?php
			if(isset($_SESSION['logged_in'])){
				if($_SESSION['logged_in']){
					echo '<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">';
						echo '<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">';
							echo '<h4 class="mtext-109 cl2 p-b-30">';
								echo 'Use Login Info';
							echo '</h4>';

							echo '<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">';
								echo 'Checkout';
							echo '</button>';
						echo '</div>';
					echo '</div>';
				}
			}
		?>
	</div>
</div>

<?php 
	require 'templates/bottom.inc.php'
?>