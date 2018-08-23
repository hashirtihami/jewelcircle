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
    require 'connect.inc.php';
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $query = "SELECT * FROM customer WHERE email='".$email."'";
    $query_run = mysqli_query($conn, $query);
    if(@$query_array=mysqli_fetch_array($query_run)){
      $contact = $query_array['contact'];
      $address = $query_array['address'];
      $country = $query_array['country'];
      $role = $query_array['role'];
      $city = $query_array['city'];
      $zipcode = $query_array['zipcode'];
    }
}
?>

<?php
require 'templates/top.inc.php';
?>
<link rel="stylesheet" type="text/css" href="css/userprofile.css">
<link rel="stylesheet" type="text/css" href="css/AdminLTE.css">
<link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    <title>General Account Settings</title>
    <section class="content-header">
      <h1 id="headingz">
           Edit
            <i class="fas fa-cog"></i>
          <!-- </a> -->
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
              <!-- <div class="form-group"> -->
                <!-- <label>Date masks:</label> -->

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="Full Name">
                    <i class="fas fa-user"></i>
                  </div>
                  <input type="text" class="form-control" disabled="disabled" placeholder="Full name.." 
                  <?php echo 'value="'.$first_name.' '.$last_name.'"';?>
                  >
                                
                </div>
        
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="Email">
                    <i class="fas fa-envelope-square"></i>
                  </div>
                  <input id="email" type="text" class="form-control" disabled="disabled" placeholder="registered email here"
                  <?php echo 'value="'.$email.'"';?>
                  >
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="Email">
                    <i class="fas fa-user"></i>
                  </div>
                  <input id="email" type="text" class="form-control" disabled="disabled" placeholder="registered email here"
                  <?php echo 'value="'.$role.'"';?>
                  >
                </div>
                <!-- /.input group -->
              </div>


              <!-- /.form group -->
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="Contact Number">
                    <i class="fas fa-phone"></i>
                  </div>
                  <input id="contact" type="text" class="form-control" disabled="disabled" placeholder="number here (editable)"
                 <?php echo 'value="'.$contact.'"';?>
                 >
                 <div class="input-group-addon btn bg-gray-light editBtn" title="Edit">
                    <i class="fas fa-edit"></i>
                  </div>                  
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="Address">
                    <i class="fas fa-map-marker"></i>
                  </div>
                  <input id="address" type="text" class="form-control" disabled="disabled" placeholder="Address (editable)"
                 <?php echo 'value="'.$address.'"';?>
                 >
                 <div class="input-group-addon btn bg-gray-light editBtn" title="Edit">
                    <i class="fas fa-edit"></i>
                  </div>                  
                </div>
              </div>
              
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="Country">
                    <i class="fas fa-map-marker"></i>
                  </div>
                  <input id="country" type="text" class="form-control" disabled="disabled" placeholder="Country (editable)"
                  <?php echo 'value="'.$country.'"';?>
                  >
                 <div class="input-group-addon btn bg-gray-light editBtn" title="Edit">
                    <i class="fas fa-edit"></i>
                  </div>                  
                </div>
              </div>
              
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="City">
                    <i class="fas fa-map-marker"></i>
                  </div>
                  <input id="city" type="text" class="form-control" disabled="disabled" placeholder="City (editable)"
                  <?php echo 'value="'.$city.'"';?>
                  >
                 <div class="input-group-addon btn bg-gray-light editBtn" title="Edit">
                    <i class="fas fa-edit"></i>
                  </div>                  
                </div>
              </div>
             
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" title="Zipcode">
                    <i class="fas fa-map-marker"></i>
                  </div>
                  <input id="zipcode" type="text" class="form-control" disabled="disabled" placeholder="Zipcode (editable)"
                  <?php echo 'value="'.$zipcode.'"';?>
                  >
                  <div class="input-group-addon btn bg-gray-light editBtn" title="Edit">
                    <i class="fas fa-edit"></i>
                  </div>                  
                </div>
              </div>


            <!-- /.box-body -->
            <div class="form-group row">
              <div style="margin: 0 auto;">
                <a id="submitChng" href="#forminf" class="flex-c-m stext-102 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 buttonCss">Submit Changes</a>
              </div>
            </div>
            </div>
          </div>
 
      </div>
    </div>
  </section>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.editBtn').click(function() {
      var target = $(this).prev();
      var icon = $(this).find('i');
      var previousValue = target.val();
      target.removeAttr('disabled');
      setTimeout(function() {
        target.focus();
        // console.log(target);
      }, 200);
    //   target.keyup(function(e) {
    //     var currentValue = $(this).val();
    //     if(currentValue != previousValue) {
    //          previousValue = currentValue;
    //          icon.removeClass('fa-edit');
    //          icon.addClass('fa-check');
    //     }
    // });
    // target.blur(function() {
    //   icon.removeClass('fa-check');
    //   icon.addClass('fa-edit');
    // });
    })
  })
</script>

<?php
  require 'templates/bottom.inc.php';
?>