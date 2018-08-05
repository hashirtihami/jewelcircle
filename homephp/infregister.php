<?php
session_start();
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];
// Escape all $_POST variables to protect against SQL injections
$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$email = $mysqli->escape_string($_POST['email']);
$country= $mysqli->escape_string($_POST['country']);
$gender= $mysqli->escape_string($_POST['gender']);
$social= implode($mysqli->escape_string($_POST['social']));
$mainsite= $mysqli->escape_string($_POST['mainsite']);
$othersite= $mysqli->escape_string($_POST['othersite']);
$fans= $mysqli->escape_string($_POST['fans']);
$msg= $mysqli->escape_string($_POST['msg']);
$role= $mysqli->escape_string($_POST['role']);

// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM influencer WHERE email='$email'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    $_SESSION['message'] = 'User with this email already exists!'; 
   header("location:  error.php");
}
else { // Email doesn't already exist in a database, proceed...
    // active is 0 by DEFAULT (no need to include it here)
    $sql1 = "INSERT INTO influencer (first_name, last_name, email, country, gender, social, mainsite, othersite, fans, msg, role ) " 
            . "VALUES ('$first_name','$last_name','$email','$country', '$gender' , '123' , '$mainsite','$othersite','$fans','$msg',  '$role')";

    // Add user to the database
    if ( $mysqli->query($sql1) ){
        $_SESSION['active'] = 1;
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
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
        header("location: index.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }
}