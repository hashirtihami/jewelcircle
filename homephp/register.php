<?php
session_start();
if ($_POST["password"] ==! $_POST["confirm_password"])
    {   
        $_SESSION['message']='hogya na chey?';
        require'error.php';
            
    }
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
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
$contact= $mysqli->escape_string($_POST['contact']);
$address= $mysqli->escape_string($_POST['address']);
$city= $mysqli->escape_string($_POST['city']);
$country= $mysqli->escape_string($_POST['country']);
$zipcode= $mysqli->escape_string($_POST['zipcode']);
$role= $mysqli->escape_string($_POST['role']);

// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM customer WHERE email='$email'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!'; 

   header("location:  error.php");
}

else { // Email doesn't already exist in a database, proceed...
    
    // active is 0 by DEFAULT (no need to include it here)
    $sql1 = "INSERT INTO customer (first_name, last_name, email, password, hash, contact, address, city, zipcode, country , role, active) " 
            . "VALUES ('$first_name','$last_name','$email','$password', '$hash' , '$contact' , '$address','$city','$zipcode','$country' , '$role', '1')";

    // Add user to the database
    if ( $mysqli->query($sql1) ){

        $_SESSION['active'] = 1;
        $_SESSION['logged_in'] = 1; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "You have successfully logged in.";

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
        header("location: userprofile.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }
}