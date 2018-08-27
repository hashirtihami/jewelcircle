<?php
/* The password reset form, the link to this page is included
   from the forgot.php email message
*/
require 'db.php';
session_start();

// Make sure email and hash variables aren't empty
if( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']) )
{
    $email = $mysqli->escape_string($_GET['email']); 
    $hash = $mysqli->escape_string($_GET['hash']); 
    // Make sure user email with matching hash exist
    $sql1 = 
    $result = $mysqli->query("SELECT * FROM customer WHERE email='$email' AND hash='$hash' ");

    if ( $result->num_rows == 0 )
    { 
        $_SESSION['message'] = "You have entered invalid URL for password reset!";
        header("location: error");
    }
}
else {
    $_SESSION['message'] = "Sorry, verification failed, try again!";
    header("location: error");  
} 
?>
<?php
 require 'templates/top.inc.php';
?>

<title>Reset Password</title>
 <div class="container" style="padding-top:100px">
    <table class="table table-bordered" >
      <thead>
        <tr>
          <th colspan="4" scope="col"><font>Choose Your New Password</font></th>
        </tr>
      </thead>
      <tbody style="margin-bottom:30px">
        <tr>
          <td colspan="4">
            <form action="resetpost" method="post" >
              <div class="form-group row">
                <label style="font-weight:500;" for="pass1" required class="col-lg-2 col-md-4 col-sm-12 col-form-label">New Password</label>
                <div class="col-lg-10 cl-md-8 col-sm-12" style="padding-bottom:20px;">
                  <input type="password" class="form-control" id="pass1" placeholder="Type your new password here" name='newpassword'  autocomplete="off">
                </div>
                <label style="font-weight:500;" for="pass2" required class="col-lg-2 col-md-4 col-sm-12 col-form-label">Confirm New Password</label>
                <div class="col-lg-10 cl-md-8 col-sm-12" style="padding-bottom:20px;">
                  <input type="password" required class="form-control" id="pass2" placeholder="Confirm password" name='confirmpassword'  autocomplete="off" >
                </div>

                <input type="hidden" name="email" value="<?= $email ?>">    
                <input type="hidden" name="hash" value="<?= $hash ?>">  

                <div class="col-lg-2 col-md-2 col-sm-2">
                  <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="background-color:#e60044;"  class="btn btn-primary" >Submit</button>
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
