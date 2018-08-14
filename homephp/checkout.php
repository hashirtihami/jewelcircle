<?php
	require 'connect.inc.php';
	require 'templates/top.inc.php';
?>

<div class="container">
	<div class="row">
		<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
			<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-25 m-r--38 m-lr-0-xl">
				<form action="placeOrder.php" method="POST">
					<h4 class="mtext-109 cl2 p-b-30">
						Enter Shipping Details
					</h4>
					<div class="form-group row">
				    	<label for="inputemail" class="col-sm-2 col-form-label">Email</label>
				    	<div class="col-sm-10">
				      		<input type="email" class="form-control" id="inputemail" required name='email'  placeholder="Email">
				    	</div>
				  	</div>
					<div class="form-group row">
				    	<label for="inputcontact" class="col-sm-2 col-form-label">Contact</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="inputcontact" required placeholder="Contact" name='contact'>
				    	</div>
				  	</div>
					<div class="form-group row">
				    	<label for="inputaddress" class="col-sm-2 col-form-label">Address</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="inputaddress" required placeholder="Full Address" name='address'>
				    	</div>
				  	</div>
				  	<div class="form-group row">
				    	<label for="inputcity" class="col-sm-2 col-form-label">City</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="inputcity" required placeholder="City" name='city'>
				    	</div>
				  	</div>
				  	<div class="form-group row">
				    	<label for="inputstate" class="col-sm-2 col-form-label">State</label>
				    	<div class="col-sm-10">
				    		<?php
				    			echo '<input type="text" class="form-control" id="inputstate" required placeholder="State" value="';
				    			if(isset($_POST['state']))
				    				echo $_POST['state'];
				    			echo '" name="state">'; 
				    		?>
				      		<!-- <input type="text" class="form-control" id="inputstate" required placeholder="State" name='state'> -->
				    	</div>
				  	</div>

				  	<div class="form-group row">
				    	<label for="inputcountry" class="col-sm-2 col-form-label">Country</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="inputcountry" required placeholder="Country" value="Pakistan" name='country' disabled>
				    	</div>
				  	</div>

				  	<div class="form-group row">
				    	<label for="inputzip" class="col-sm-2 col-form-label">Zip</label>
				    	<div class="col-sm-10">
				    		<?php
				    			echo '<input type="text" class="form-control" id="inputzip" required placeholder="Zipcode" value="';
				    			if(isset($_POST['postcode']))
				    				echo $_POST['postcode'];
				    			echo '" name="zipcode">'; 
				    		?>
				      		<!-- <input type="text" class="form-control" id="inputzip" required placeholder="zipcode" name='zipcode'> -->
				    	</div>
				  	</div>

				  	<div class="form-group row">
				    	<label for="payment" class="col-sm-2 col-form-label">Payment Method</label>
				    	<div id="payment" class="col-sm-10">
				      		<input type="radio" id="cash" required name='zipcode' value="cash"><label for="cash">Cash on delivery</label>
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