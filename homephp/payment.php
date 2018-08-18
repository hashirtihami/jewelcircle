<?php
require 'db.php';
session_start();
if(isset($_POST['email'])&&isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['city'])&&isset($_POST['contact'])){
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['firstname'] = $_POST['firstname'];
  $_SESSION['lastname'] = $_POST['lastname'];
  $_SESSION['city'] = $_POST['city'];
  $_SESSION['zipcode'] = $_POST['zipcode'];
  $_SESSION['address'] = $_POST['address'];
  $_SESSION['contact'] = $_POST['contact'];
  $_SESSION['state'] = $_POST['state'];
  $first_name = $mysqli->escape_string($_POST['firstname']);
  $last_name = $mysqli->escape_string($_POST['lastname']);
  $email = $mysqli->escape_string($_POST['email']);
  $password = $mysqli->escape_string(password_hash("NULL", PASSWORD_BCRYPT));
  $hash = $mysqli->escape_string( md5( rand(0,1000) ) );
  $contact= $mysqli->escape_string($_POST['contact']);
  $address= $mysqli->escape_string($_POST['address']);
  $city= $mysqli->escape_string($_POST['city']);
  $country= $mysqli->escape_string($_POST['country']);
  $zipcode= $mysqli->escape_string($_POST['zipcode']);
  // Check if user with that email already exists
  $result = $mysqli->query("SELECT * FROM customer WHERE email='$email'") or die($mysqli->error());

  // We know user email exists if the rows returned are more than 0
  if ( $result->num_rows > 0 ) {
      
      $_SESSION['message'] = 'User with this email already exists!'; 
      if(isset($_SESSION['message']))
        header("location:error.php");
  }

  else {

    $sql1 = "INSERT INTO customer (first_name, last_name, email, password, hash, contact, address, city, zipcode, country , role, active) " 
            . "VALUES ('$first_name','$last_name','$email','$password', '$hash' , '$contact' , '$address','$city','$zipcode','$country' , 'temprorary', '1')";

    // Add user to the database
    if ( $mysqli->query($sql1) ){
      $_SESSION['active'] = 1;
      $_SESSION['logged_in'] = 1;
      $_SESSION['message'] ='ley kr ley gal';

      $to      = $email;
      $subject = ' Message from jewelcircle.net ';
      $message_body = '
      
      <div style="text-align:center;">
              
              Hello '.$first_name.',<br><br>

              <h3 style="color:#e60044;">Thank you for signing up!</h3><br><br>

              Follow us:<br><br>

              Instagram: https://www.instagram.com/jewel_circle/ <br><br>

              Facebook: https://www.facebook.com/JewelCircle/<br><br>

              For any queries feel free to email us at info@jewelcircle.net
          </div> ';
      

      require'mailsender.php';
    }

  }

}
require 'templates/top.inc.php';
?>

<script src="https://js.stripe.com/v3/"></script>
<link rel="stylesheet"  href="css/payment.css">

<div class="container" style="padding-bottom:80px; padding-top:50px;">
  <div class="row">
    <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
      <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-25 m-r--38 m-lr-0-xl">
        <h4 class="mtext-109 cl2 p-b-30">Pay Online</h4>
        <form action="charge.php" method="post" id="payment-form">
          <div class="form-row">
                      
            <label for="card-element">
              Credit or debit card
            </label>
            <div id="card-element"  class="form-control">
              <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
          </div>
          
          <div style="padding-top: 20px">
            <button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
              Submit
            </button>
          </div>

        </form>
      </div>
    </div>
    <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
      <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
        <form action="payment-success.php">
          <h4 class="mtext-109 cl2 p-b-30">
            Cash on Delivery
          </h4>
          <p>Your package will be delivered to you within 10-15 days</p>
          <div style="padding-top: 20px">
            <button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/charge.js"></script>

<?php
  require 'templates/bottom.inc.php';
?>