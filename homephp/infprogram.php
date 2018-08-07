<?php 
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	if(isset($_POST['register'])) { //user registering
         $_POST['role']='influencer';
        require 'infregister.php';
    }
}
?>
<?php 
/* Main page with two forms: sign up and log in */
session_start(); // You're outputting HTML before the session_start(). Put your PHP code above the HTML code. answer from quora
require 'templates/top.inc.php';
?>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	

<title>Ifluencer Program</title>

<style >
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


<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('../assets/images/posters/banner3.jpg');">
	<h3 class=" cl0 txt-center" style=" font-size:6vw; text-shadow:5px 5px 10px black; ">
		INFLUENCER WANTED
	</h3>
	<h3 class=" cl0 txt-center" style=" font-size:2vw; text-shadow:5px 5px 10px black;">
		GET <span style="color:#e60044;">JEWEL CIRCLE</span> LATEST PRODUCT FOR FREE EVERY MONTH
	</h3>
</section>



<div class="container" style="padding-top:100px">
	<h2 class="txt-center" style="color:#e60044;"> FASHION INFLUENCER POLICY</h2>
	<div style="padding-top:30px">
		<table class="table table-bordered" >
		  <thead>
		    <tr>
		      <th colspan="4" scope="col"><font>1. Qualifications</font></th>
		    </tr>
		  </thead>
		  <tbody style="margin-bottom:30px">
		    <tr>
		      <td colspan="4">Your blog must have over 1,000 followers(via bloglovin or google friend).
		      	<br>You have at least 10,000 followers with one of your social networking accounts.
				<br>Your Youtube Channel have over 1,0000 subscribers.</td>
		    </tr>
		   </tbody>
		</table>

		<table class="table table-bordered" >
			<thead>
			    <tr>
			      <th colspan="4" scope="col"><font>2. Share your thoughts on our Jewelry through your social networks and encourage your follower to comment.</font></th>
			    </tr>
			</thead>
			<tbody>
			    <tr>
			      <td colspan="4">
			      	 You should take photos or video for our jewelry within 14 days after you receive the items, and publish them to your blog, facebook, instagram and youtube,etc. When you publish the photos, review and comments, please add the the link of the product page or home page we offer.
			      </td>
			    </tr>
			</tbody>
		</table>
		<table class="table table-bordered" >
				<thead>
			    <tr>
			      <th colspan="4" scope="col"><font>3. Please send us an email once you publish your photos and comments.</font></th>
			    </tr>
			</thead>
			<tbody>
			    <tr>
			      <td colspan="4">
			      	You should inform us by an email so we can track your activity and complete our deal.
			      </td>
			    </tr>
			</tbody>
		</table>
		<table class="table table-bordered" >
			<thead>
			    <tr>
			      <th colspan="4" scope="col"><font>4. Soufeel Jewelry reserves the right to use the information of your post.</font></th>
			    </tr>
			</thead>
			<tbody>
			    <tr>
			      <td colspan="4">
			      	We may collect photos of your post and related comments. At times, we may use the content. E.g, we may put it on facebook or use your photos on our website. If you do not agree, please inform us in advance.
			      </td>
			    </tr>
			</tbody>
		</table>
	</div>
	
	<div class="form-group row">
		<div class="col-lg-5 col-md-5 col-sm-5 ">
		</div>
		<div class="col-lg-5 col-md-5 col-sm-5" >
		<a href="#forminf" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="background-color:#e60044; width:80px">I Agree</a>
		</div>
	</div>
</div>


<div id="forminf" class="container">
	<h2 style="padding-top:90px; color:#e60044;">Complete Our Form</h2>
	 <hr>
	<form action="infprogram.php" method="post">
	  <div class="form-group row">
	    <label for="inputname" class="col-sm-2 col-form-label">Name</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputname" placeholder="First Name" name='firstname'>
	    </div>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" placeholder="Last Name" name='lastname'>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" id="inputemail" placeholder="Email" name='email'>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="inputcountry" class="col-sm-2 col-form-label">Country</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="inputcountry" placeholder="Country" name='country'>
	    </div>
	  </div>

	  	<fieldset class="form-group">
		   <div class="row">
		      <label class="col-form-label col-sm-2 pt-0">Gender</label>
		      	<div class="col-lg-1 col-md-5 col-sm-5 col-xs-10">
		        	<div class="form-check">
		          		<input class="form-check-input" type="radio" name='gender' id="inputgender1" value="male" checked>
		          		<label class="form-check-label" for="inputgender1">
		            			Male
		          		</label>
		        	</div>
		        </div>
		        <div class="col-lg-1 col-md-5 col-sm-5 col-xs-10 ">
		        	<div class="form-check">
			          <input class="form-check-input" type="radio" name='gender' id="inputgender2" value="female">
			          <label class="form-check-label" for="inputgender2">
			            	Female
			          </label>
		        	</div>
		      	</div>
		  	</div>
	  	</fieldset>


	  <div class="form-group row">
	    <div class="col-sm-2"><label>Main Site Type</label></div>
	    <div class="col-sm-5">
	      <div class="form-check">
	        <input class="form-check-input" type="checkbox" id="inputsocial1" name='social[]' value="Facebook">
	        <label class="form-check-label" for="inputsocial1">
	          Facebook
	        </label>
	      </div>
	      <div class="form-check">
	        <input class="form-check-input" type="checkbox" id="inputsocial2" name='social[]' value="Instagram">
	        <label class="form-check-label" for="inputsocial2">
	          Instagram
	        </label>
	      </div>
	      <div class="form-check">
	        <input class="form-check-input" type="checkbox" id="inputsocial3" name='social[]' value="Youtube">
	        <label class="form-check-label" for="inputsocial3">
	          Youtube
	        </label>
	      </div>
	    </div>
	    <div class="col-sm-5">
	      <div class="form-check">
	        <input class="form-check-input" type="checkbox" id="inputsocial4" name='social[]' value="Pinterest">
	        <label class="form-check-label" for="inputsocial4">
	          Pinterest
	        </label>
	      </div>
	      <div class="form-check">
	        <input class="form-check-input" type="checkbox" id="inputsocial5" name='social[]' value="Pinterest-Blog">
	        <label class="form-check-label" for="inputsocial5">
	          Pinterest Blog
	        </label>
	      </div>
	      <div class="form-check">
	        <input class="form-check-input" type="checkbox" id="inputsocial6" name='social[]'>
	        <label class="form-check-label" for="inputsocial6">
	          Others: Please specify in your message
	        </label>
	      </div>
	    </div>
	  </div>
	  
	  <div class="form-group row">
	    <label for="inputmain" class="col-sm-2 col-form-label">Main Site URL</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="inputmain" placeholder="Main Site URL" name='mainsite'>
	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="inputother" class="col-sm-2 col-form-label">Other Site URL</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="inputother" placeholder="Other Site URL" name='othersite'>
	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="inputfans" class="col-sm-2 col-form-label">Fans/Followers (Please fill in quantity)</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="inputfans" placeholder="Please fill in quantity" name='fans'>
	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="inputmsg" class="col-sm-2 col-form-label">Leave us a messge</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="inputmsg" placeholder="Leave us a messge" name='msg'>
	    </div>
	  </div>

	  <div class="form-group row">
		<div class="col-lg-5 col-md-5 col-sm-5 ">
		</div>
	    <div class="col-lg-2 col-md-2 col-sm-5 ">
	      <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="background-color:#e60044;" 
	      	type="submit" class="btn btn-primary" name="register">Submit</button>
	    </div>
	  </div>
	</form>
</div>
<?php
	require 'templates/modal.inc.php';
	require 'templates/bottom.inc.php';
?>