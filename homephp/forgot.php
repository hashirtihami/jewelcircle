<?php 
/* Reset your password form, sends reset.php password link */
require 'db.php';
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM customer WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    { 
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0) 

        $user = $result->fetch_assoc(); // $user becomes array with user data
        
        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Please check your email <span>$email</span>"
        . " for a confirmation link to complete your password reset!</p>";

        // Send registration confirmation link (reset.php)
        $to      = $email;
        $subject = 'Password Reset Link ( jewelcircle.net )';
        $message_body = '
        Hello '.$first_name.',

        You have requested password reset!

        Please click this link to reset your password:

        http://localhost/jewelcircle/homephp/reset.php?email='.$email.'&hash='.$hash; 
         
        require'mailsender.php';
        
        header("location: success.php");
  }
}
?> 
<?php
 require 'templates/top.inc.php';
?>
<style type="text/css">
#submitBtn {
  position: relative;
  margin: 0 auto;
 }
div#submitBtn button {
  background-color: #e60040;
}
</style>




  <div class="container" style="padding-top:100px; padding-bottom:100px;">
    <table class="table table-bordered" >
      <thead>
        <tr>
          <th colspan="4" scope="col"><font>Reset Your Password</font></th>
        </tr>
      </thead>
      <tbody style="margin-bottom:30px">
        <tr>
          <td colspan="4">
            <form action="forgot.php" method="post" >
              <div class="form-group row">
                <label style="font-weight:500;" for="inputemail" class="col-lg-2 col-md-4 col-sm-12 col-form-label">Email:</label>
                <div class="col-lg-10 cl-md-8 col-sm-12" style="padding-bottom:20px;">
                  <input type="email"  required  class="form-control" id="inputemail" placeholder="Enter your email here" name='email'>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2" id="submitBtn">
                  <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"  class="btn btn-primary" >Submit</button>
                </div>
              </div>
            </form>
          </td>
        </tr>
       </tbody>
    </table>
  </div>
       
<?php
  require 'templates/bottom.inc.php';
?>