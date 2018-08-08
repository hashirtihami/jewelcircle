

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
        Hashir Tihami
        <!-- <small>Loru</small> -->
        <button type="button" class="btn btn-outline-danger btn-sm">
          <a href="accountEdit.php"> Edit
            <i class="fas fa-cog"></i>
          </a>
        </button>
      <!-- </h1><hr class=""> -->
    </section>
    <section class="content">
      <div class="row ">
          <!-- /.box -->
        </div>
        <div class="col-md-6 roaz">
          <div class="box">
            <div class="box-header with-border bg-black-gradient">
              <h3 class="box-title" id="tableHead">Orders</h3>
            </div>
            <!-- /.box-header -->
            <div class="">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Order</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Payment</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Update software</td>
                  <td>
<!--                     <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div> -->
                  </td>
                  <td></td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Clean database</td>
                  <td>
<!--                     <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                    </div> -->
                  </td>
                  <td></td>
                  <td><span class="badge bg-yellow">70%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                  <td>
<!--                     <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div> -->
                  </td>
                  <td></td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Fix and squish bugs</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 90%"></div>
                    </div>
                  </td>
                  <!-- <td></td> -->
                  <td><span class="badge bg-green">90%</span></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
<!--             <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div> -->
          </div>
        </div>
          <!-- /.box -->
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