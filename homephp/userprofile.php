

<?php
/* Displays user information and some useful messages */
session_start();
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>

<?php
require 'templates/top.inc.php';
?>
  
<style>
  body{
    background-color:#ffcccc;
  }
  .container2{
    
    overflow: auto;
    background-color:white;
  }
  .profilebtn{
    text-align:center;
    border-style: solid;
    border-color:grey;
    border-width: 0.5px;
  }

  .profilebtn:hover{
    background-color:#e60044;
    color:white;
  }
  .profilebtn:hover .proficon {
    color:white;
}
  .profilebtn:hover a p {
    color:white;
}

  #dpdiv{
    margin: 0 auto;
    width: 50%;
    text-align:center;
  }

  .proficon{
    font-size:80px;
    color:#e60044;
  }
  div.profilebtn a {
     color: #666666 !important;
  }

  #logoutbtn{
    text-decoration:none;
    color: inherit;
  }

</style>

<div class="container container2">
  <div class="row" style="padding-top:50px;" >
    <div class="col-lg-12" id="dpdiv">
      <div> <img src="../assets/images/posters/dp.png" style="height:100px"></div>
      <?= $first_name.' '.$last_name ?> 
    </div>
  </div>
  
  <div class="row" style="padding-top:100px;" >
    <div class="col-sm-4 profilebtn" >
      <i class="fas fa-clipboard-list proficon"></i>
      <p>Orders</p>
    </div> 

    <div class="col-sm-4 profilebtn">
      <i class="fas fa-cogs proficon"></i>
      <p> Settings </p>
    </div> 
    <div class="col-sm-4 profilebtn" id="logoutbtn">
      <a href="index.php">
      <i class="fas fa-sign-out-alt proficon"></i>
      <p> Logout </p>
      </a>
    </div>

  </div>
</div>




  <div class="form">
    
          
          <p>
          <?php 
     
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
          ?>
          </p>
          
          <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link!
              </div>';
          }
          //<p><?= $email ?></p>
          ?>
          
          
          
          <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>

    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

<?php
  require 'templates/modal.inc.php';
  require 'templates/bottom.inc.php';
?>