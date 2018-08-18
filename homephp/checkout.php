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
					    <label for="email" class="col-sm-2 col-form-label">Email</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="email" placeholder="Email" name="email">
					    </div>
				  	</div>
					<div class="form-group row">
					    <label for="firstname" class="col-sm-2 col-form-label">First Name</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="firstname" placeholder="Name" name="firstname">
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="lastname" placeholder="Name" name="lastname">
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="address" class="col-sm-2 col-form-label">Address</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="address" placeholder="Address" name="address">
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="contact" class="col-sm-2 col-form-label">Contact</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="contact" placeholder="Contact" name="contact">
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="city" class="col-sm-2 col-form-label">City</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="city" placeholder="City" name="city">
					    </div>
				  	</div>
				  	<div class="form-group row">
				    	<label for="inputzip" class="col-sm-2 col-form-label">State</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="inputstate" required placeholder="State" name='state' 
				      		<?php
				      			echo "value='".$_POST['state']."'";
				      		?>
				      		>
				    	</div>
				  	</div>
				  	<div class="form-group row">
				    	<label for="inputzip" class="col-sm-2 col-form-label">Zip Code</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="inputzip" required placeholder="Zipcode" name='zipcode' 
				      		<?php
				      			echo "value='".$_POST['postcode']."'"; 
				      		?>
				      		>
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
						echo '<form action="payment.php">';
							echo '<h4 class="mtext-109 cl2 p-b-30">';
								echo 'Use Login Info';
							echo '</h4>';

							echo '<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">';
								echo 'Checkout';
							echo '</button>';
						echo '<form>';
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