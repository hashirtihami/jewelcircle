<?php
/* Displays user information and some useful messages */
session_start();
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  if( isset($_SESSION['message']))
  {  
    header("location: error.php");
    exit();    
  }
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
<link rel="stylesheet" type="text/css" href="css/userprofile.css">
<link rel="stylesheet" type="text/css" href="css/AdminLTE.css">
<link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
      
    <section class="content-header">
      <h1 id="headingz">
          <a href="index.php"> Edit
            <i class="fas fa-cog"></i>
          </a>
        </button> 
      <!-- </h1><hr class=""> -->
    </section>
    <section class="content">
      <div class="row ">
          <!-- /.box -->
        <div class="col-md-6 roaz">

          <div class="box">
            <div class="box-header with-border bg-black-gradient">
              <h3 class="box-title">Account Details</h3>
            </div>
            <div class="box-body">
              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <!-- <label>Date masks:</label> -->

                <div class="input-group">
                  <div class="input-group-addon" title="Full Name">
                    <i class="fas fa-user"></i>
                  </div>

                  <!-- <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask> -->
                  <input type="text" class="form-control" name="username" placeholder="Full Name">
                   <div class="input-group-addon" title="Full Name">
                    <button type="button" class="btn editBtn bg-black">
                      <i class="far fa-edit"></i>
                    </button>
                  </div>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="Email">
                    <i class="fas fa-envelope-square"></i>
                  </div>
                  <input type="text" class="form-control" placeholder="registered email here">
                </div>
                <!-- /.input group -->
              </div>

              <!-- /.form group -->
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="Contact Number">
                    <i class="fas fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" placeholder="number here (editable)">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="Address">
                    <i class="fas fa-map-marker"></i>
                  </div>
                  <input type="text" class="form-control" placeholder="Address (editable)">
                </div>
              </div>
              
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="City">
                    <i class="fas fa-map-marker"></i>
                  </div>
                  <input type="text" class="form-control" placeholder="City (editable)">
                </div>
              </div>
              
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="Address">
                    <i class="fas fa-map-marker"></i>
                  </div>
                  <input type="text" class="form-control" placeholder="Country (editable)">
                </div>
              </div>
             
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="Address">
                    <i class="fas fa-map-marker"></i>
                  </div>
                  <input type="text" class="form-control" placeholder="Zipcode (editable)">
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
 
      </div>
      </section>

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
          <!-- ?> -->
          
          
          
          <!-- <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a> -->

    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

<?php
  require 'templates/modal.inc.php';
  require 'templates/bottom.inc.php';
?>