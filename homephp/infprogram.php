 <?php
	require 'connect.inc.php';
	require 'templates/top.inc.php';
?>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>Resellers</title>

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
		
		<h3 class=" cl0 txt-center" style=" font-size:2vw; text-shadow:5px 5px 10px black;	" > GET <span style="color:#e60044;">JEWEL CIRCLE</span> LATEST PRODUCT FOR FREE EVERY MONTH </h3>
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
		<div class="col-lg-5 col-md-5 col-sm-5 style="  >
		<a href="#forminf" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="background-color:#e60044; width:80px">I Agree</a>
		</div>
	</div>
</div>





<div id="forminf" class="container">
	<h2 style="padding-top:90px; color:#e60044;">Complete Our Form</h2>
	 <hr>
	
	<form>
	  <div class="form-group row">
	    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputEmail3" placeholder="First Name">
	    </div>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" placeholder="Last Name">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" id="inputPassword3" placeholder="Last Name">
	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="country" class="col-sm-2 col-form-label">Country</label>
	    <div class="col-sm-10">
	     <select id="country" name="country" class="form-control">
            <option value="pakistan">Pakistan</option>
            <option value="australia">Australia</option>
            <option value="austria">Austria</option>
            <option value="bangla">Bangladesh</option>
            <option value="belgium">Belgium</option>
            <option value="bhutan">Bhutan</option>
            <option value="botswana">Botswana</option>
            <option value="brunei">Brunei</option>
            <option value="bulgaria">Bulgaria</option>
            <option value="combodia">Combodia</option>
            <option value="canada">Canada</option>
            <option value="canaryIsland">Canary Island</option>
            <option value="channelIslands">Channel Islands</option>
            <option value="china">China</option>
            <option value="cyprus">Cyprus</option>
            <option value="czechRepublic">Czech Republic</option>
            <option value="denmark">Denmark</option>
            <option value="egypt">Egypt</option>
            <option value="ethiopia">Ethiopia</option>
            <option value="finland">Finland</option>
            <option value="france">France</option>
            <option value="germany">Germany</option>
            <option value="greece">Greece</option>
            <option value="hongKong">Hong Kong</option>
            <option value="hungary">Hungary</option>
            <option value="india">India</option>
            <option value="indonesia">Indonesia</option>
            <option value="iran">Iran</option>
            <option value="ireland">Ireland</option>
            <option value="italy">Italy</option>
            <option value="japan">Japan</option>
            <option value="jordan">Jordan</option>
            <option value="kenya">Kenya</option>
            <option value="korea">Korea</option>
            <option value="laos">Laos</option>
            <option value="lebonon">Lebonon</option>
            <option value="lesotho">Lesotho</option>
            <option value="luxembourg">Luxembourg</option>
            <option value="macau">Macau</option>
            <option value="maderia">Maderia</option>
            <option value="azores">Azores</option>
            <option value="malwai">Malwai</option>
            <option value="malaysia">Malaysia</option>
            <option value="maldives">Maldives</option>
            <option value="mauritius">Mauritius</option>
            <option value="mozambique">Mozambique</option>
            <option value="myanmar">Myanmar</option>
            <option value="namibia">Namibia</option>
            <option value="nepal">Nepal</option>
            <option value="netherlands">Netherlands</option>
            <option value="newZealand">New Zealand</option>
            <option value="northernCyprus">Northern Cyprus</option>
            <option value="northernIreland">Northern Ireland</option>
            <option value="norway">Norway</option>
            <option value="philippines">Philippines</option>
            <option value="poland">Poland</option>
            <option value="portugal">Portugal</option>
            <option value="romania">Romania</option>
            <option value="saudia">Saudia Arabia</option>
            <option value="scotland">Scotland</option>
            <option value="singapore">Singapore</option>
            <option value="slovakia">Slovakia</option>
            <option value="southAfrica">South Africa</option>
            <option value="spain">Spain</option>
            <option value="sriLanka">Sri Lanka</option>
            <option value="swaziland">Swaziland</option>
            <option value="sweden">Sweden</option>
            <option value="switzerland">Switzerland</option>
            <option value="syria">Syria</option>
            <option value="taiwan">Taiwan</option>
            <option value="us">United States of America</option>
            <option value="uk">United Kingdom</option>
            <option value="others">Others</option>
          </select>
	    </div>
	  </div>
	  	<fieldset class="form-group">
		   <div class="row">
		      <label class="col-form-label col-sm-2 pt-0">Gender</label>
		      	<div class="col-lg-1 col-md-5 col-sm-5 col-xs-10">
		        	<div class="form-check">
		          		<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
		          		<label class="form-check-label" for="gridRadios1">
		            			Male
		          		</label>
		        	</div>
		        </div>
		        <div class="col-lg-1 col-md-5 col-sm-5 col-xs-10 ">
		        	<div class="form-check">
			          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
			          <label class="form-check-label" for="gridRadios2">
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
	        <input class="form-check-input" type="checkbox" id="gridCheck1">
	        <label class="form-check-label" for="gridCheck1">
	          Facebook
	        </label>
	      </div>
	      <div class="form-check">
	        <input class="form-check-input" type="checkbox" id="gridCheck1">
	        <label class="form-check-label" for="gridCheck1">
	          Instagram
	        </label>
	      </div>
	      <div class="form-check">
	        <input class="form-check-input" type="checkbox" id="gridCheck1">
	        <label class="form-check-label" for="gridCheck1">
	          Youtube
	        </label>
	      </div>
	    </div>
	    <div class="col-sm-5">
	      <div class="form-check">
	        <input class="form-check-input" type="checkbox" id="gridCheck1">
	        <label class="form-check-label" for="gridCheck1">
	          Pinterest
	        </label>
	      </div>
	      <div class="form-check">
	        <input class="form-check-input" type="checkbox" id="gridCheck1">
	        <label class="form-check-label" for="gridCheck1">
	          Pinterest Blog
	        </label>
	      </div>
	      <div class="form-check">
	        <input class="form-check-input" type="checkbox" id="gridCheck1">
	        <label class="form-check-label" for="gridCheck1">
	          Others: Please specify
	        </label>
	      </div>
	    </div>
	  </div>
	  

	  <div class="form-group row">
	    <label for="inputPassword3" class="col-sm-2 col-form-label">Main Site URL</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" id="inputPassword3" placeholder="Main Site URL">
	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="inputPassword3" class="col-sm-2 col-form-label">Other Site URL</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" id="inputPassword3" placeholder="Other Site URL">
	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="inputPassword3" class="col-sm-2 col-form-label">Fans/Followers (Please fill in quantity)</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" id="inputPassword3" placeholder="Please fill in quantity">
	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="inputPassword3" class="col-sm-2 col-form-label">Leave us a messge</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" id="inputPassword3" placeholder="Leave us a messge">
	    </div>
	  </div>


	  <div class="form-group row">

		<div class="col-lg-5 col-md-5 col-sm-5 ">
		</div>
	    <div class="col-lg-2 col-md-2 col-md-5 col-xs-12">
	      <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="background-color:#e60044;" type="submit" class="btn btn-primary">Submit</button>
	    </div>
	  </div>

	</form>
</div>


<?php
	require 'templates/modal.inc.php';
	require 'templates/bottom.inc.php';
?>