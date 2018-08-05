<?php 
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in 
        require 'login.php';
    }
    
    elseif (isset($_POST['register'])) { //user registering
         $_POST['role']='customer';
        require 'register.php';  
    }
}
?>
<?php 
/* Main page with two forms: sign up and log in */
require 'templates/top.inc.php';
//https://www.youtube.com/watch?v=Pz5CbLqdGwM&ab_channel=CleverTechie
?>

 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>Resellers</title>

<style>
	font{
		color:#e60044;
	}

	label{
		font-weight:500;
	}

	hr.style14 { 
	  border: 0; 
	  height: 1px; 
	  background-image: -webkit-linear-gradient(left, #f0f0f0, #e60040, #f0f0f0);
	  background-image: -moz-linear-gradient(left, #f0f0f0, #e60040, #f0f0f0);
	  background-image: -ms-linear-gradient(left, #f0f0f0, #e60040, #f0f0f0);
	  background-image: -o-linear-gradient(left, #f0f0f0, #e60040, #f0f0f0); 
	}

	

</style>

<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('../assets/images/posters/banner4.jpg');">
	
</section>

<div id="forminf" class="container"  >
	<h2 style="padding-top:10%; color:#e60044;">Log In</h2>
	<hr>
	
	<form action="userregister.php" method="post">
	  	
		<div class="form-group row " >
	    	
	    	<div class="col-sm-5">
	      		<input type="email" class="form-control" id="inputname" name='email' placeholder="Enter your email" required>
	    	</div>
	    	
	  	</div>

	  			<div class="form-group row">
	    	
	    	<div class="col-sm-5">
	      		<input type="password" class="form-control" id="inputname" name='password' placeholder="Enter your password" required>
	    	</div>
	    	
	  	</div>

	  	<div class="col-lg-5 col-md-5 col-sm-5 ">
		</div>
	  	
	  	<div class="col-lg-2 col-md-2 col-md-5 col-xs-12">
	      <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="background-color:#e60044;" type="submit" name="login" class="btn btn-primary">Log In</button>
	    </div>

	    <p style="padding-top:50px; color:#e60044; " > Create new <a href="#signupform"> Account?</a></p>
	  
	</form>


	<h2 id="signupform" style="padding-top:100px; color:#e60044;">Sign Up</h2>
	<hr>
	<form action="userregister.php" method="post">
	  	<div class="form-group row">
	    	<label for="inputname" class="col-sm-2 col-form-label">Name</label>
	    	<div class="col-sm-5">
	      		<input type="text" class="form-control" id="inputname" name='firstname' placeholder="First Name" required>
	    	</div>
	    	<div class="col-sm-5">
	      		<input type="text" class="form-control" id="inputname" name='lastname' placeholder="Last Name" required>
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="inputemail" class="col-sm-2 col-form-label">Email</label>
	    	<div class="col-sm-10">
	      		<input type="email" class="form-control" id="inputemail" required name='email'  placeholder="Email">
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="inputpass" class="col-sm-2 col-form-label">Password</label>
	    	<div class="col-sm-10">
	      		<input type="password" class="form-control" id="inputpass" required name='password'  placeholder="Set your password">
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="inputcontact" class="col-sm-2 col-form-label">Contact Number</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" id="inputcontact" required placeholder="Contact Number" name='contact'>
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
	    	<label for="inputcountry" class="col-sm-2 col-form-label">Country</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" id="inputcountry" required placeholder="Country" name='country'>
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="inputzip" class="col-sm-2 col-form-label">Zip Code</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" id="inputzip" required placeholder="zipcode" name='zipcode'>
	    	</div>
	  	</div>
	  	<div class="field-wrap">
            <p style=" padding:0; color:black;">To become A Jewel Circle reseller, please <a href="terms.php">Click here</a></p>
        </div>

		<div class="field-wrap">
            <p style=" padding:0; color:black;">By clicking Sign Up, you agree to our <a href="terms.php">Terms Of Services</a> and Data Policy. You may receive SMS notifications from us and can opt out at any time.</p>
        </div>

	  	<div class="form-group row">
		<div class="col-lg-5 col-md-5 col-sm-5 ">
		</div>
	    <div class="col-lg-2 col-md-2 col-md-5 col-xs-12" style="padding-bottom:10%">
	      <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="background-color:#e60044;" type="submit" name="register" class="btn btn-primary">Sign Up</button>
	    </div>
	  </div>

	</form>
</div>


<?php
	require 'templates/modal.inc.php';
	require 'templates/bottom.inc.php';
?>