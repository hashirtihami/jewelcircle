

<?php
/* Displays user information and some useful messages */
session_start();
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  if( isset($_SESSION['message']))
  {  
    header("location: error.php");
    // exit();    
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
        Hashir
        <small>Mottu</small>
      </h1><hr class="style14">
    </section>
    <section class="content">
      <div class="row roaz">
        <div class="col-md-6">

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title hedss">Account Details</h3>
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
                  <input type="text" class="form-control" name="username" placeholder="Elisha Jamil">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="Email">
                    <i class="fas fa-envelope-square"></i>
                  </div>
                  <input type="text" class="form-control" placeholder="elisha.jamil@circle.com">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="Contact Number">
                    <i class="fas fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" placeholder="elisha.jamil@circle.com">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="Address">
                    <i class="fas fa-map-marker"></i>
                  </div>
                  <input type="text" class="form-control" placeholder="Ghar, Chicago, Sindh">
                </div>
                <!-- /.input group -->
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title hedss">Orders</h3>
            </div>
            <!-- /.box-header -->
            <div class="">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Order</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Invoice</th>
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
<!--                     <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                    </div> -->
                    <td></td>
                  </td>
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