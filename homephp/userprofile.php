<?php
/* Displays user information and some useful messages */
session_start();
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must <a href=\"userregister.php\">log in or sign up</a> before viewing your profile page!";
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
require 'connect.inc.php';
require 'templates/top.inc.php';
?>
<link rel="stylesheet" type="text/css" href="css/userprofile.css">
<link rel="stylesheet" type="text/css" href="css/AdminLTE.css">
<link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
      <title>My Profile</title>
    <section class="content-header">
      <h1 id="headingz">
        <?php echo $first_name." ".$last_name; ?>
        <!-- <small>Loru</small> -->
        <button type="button" class="btn btn-outline-danger btn-sm">
          <a href="accountEdit.php"> Account info
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
              <table style="text-align:center" class="table table-bordered">
                <tr >
                  <th style="text-align:center; width: 10px">ID</th>
                  <th style="text-align:center">Date</th>
                  <th  style="text-align:center;">Status</th>
                  <th style="text-align:center;">Invoice</th>
                </tr>
                <?php
                  $query = "SELECT customerID FROM customer WHERE email='".$email."'";
                  $query_run = mysqli_query($conn, $query);
                  if($query_array = mysqli_fetch_array($query_run))
                    $customerID=$query_array["customerID"];
                  $query = "SELECT orderID,orderDate,totalAmount,address,status FROM `order` o, customer c WHERE (c.customerID=o.customerID && c.customerID='$customerID')";
                  $query_run = mysqli_query($conn, $query);
                  while(@$query_array = mysqli_fetch_array($query_run)){
                    echo '<tr>
                          <td class="data">'.$query_array['orderID'].'</td>
                          <td>'.$query_array['orderDate'].'</td>
                          <td>'.$query_array['status'].'</td>
                          <td><button type="button" class="btn bg-grey btnPdf" title="Invoice Download"><i class="fas fa-file-download"></i></button></td>
                          </tr>';
                  }
                ?>
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


    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript" src="vendor/jspdf/jspdf.debug.js"></script>
<script src="js/index.js"></script>

<?php
  require 'templates/modal.inc.php';
  require 'templates/bottom.inc.php';
?>