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
session_start(); // You're outputting HTML before the session_start(). Put your PHP code above the HTML code. answer from quora
require 'templates/top.inc.php';
//https://www.youtube.com/watch?v=Pz5CbLqdGwM&ab_channel=CleverTechie
?>

  <title>Sign-Up/Login Form</title>
  <?php include 'login/css/css.html'; ?>
</head>


<body>
  <div class="form"> 
      
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li> 
      </ul>
      
      <div class="tab-content">

        <div id="login">   
          <form action="loginindex.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
              <label>
                Email Address<span class="req">*</span>
              </label>
              <input type="email" required autocomplete="off" name="email"/>
            </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
        </div>
          
          <p class="forgot"><a href="login/forgot.php">Forgot Password?</a></p>
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
          
        <div id="signup">   
          
          <form action="loginindex.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name='password'/>
          </div>

          <div class="field-wrap">
            <label>
              Contact Number<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name='contact'/>
          </div>

          <div class="field-wrap">
            <label>
              Address<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name='address'/>
          </div>      
          
          <div class="top-row">

            <div class="field-wrap">
              <label>
                City<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='city' />
            </div>

          <div class="field-wrap">
              <label>
                Country<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='country' />
            </div>
          </div>
            
            <div class="field-wrap">
              <label>
                Postal Code/Zip Code<span class="req">*</span>
              </label>
              <input type="text"  autocomplete="off" name='zipcode' />
            </div>
            
           

            <div class="field-wrap">
              <p style=" padding:0; color:black;">By clicking Sign Up, you agree to our <a href="terms.php">Terms Of Services</a> and Data Policy. You may receive SMS notifications from us and can opt out at any time.</p>
            </div>

          <button type="submit" class="button button-block" name="register" />Sign Up</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="login/js/index.js"></script>


<?php
  require 'templates/bottom.inc.php';
?>