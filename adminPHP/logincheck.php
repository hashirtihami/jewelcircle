<?php
/* Displays user information and some useful messages */
session_start();
// Check if user is logged in using the session variable
if ( $_SESSION['admin_logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  if( isset($_SESSION['message']))
  {  
    header("location: ../homephp/admin.php");
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