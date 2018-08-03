<?php
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

   header("location:  login/error.php");
}

else { // Email doesn't already exist in a database, proceed...
    
    // active is 0 by DEFAULT (no need to include it here)
    $sql1 = "INSERT INTO customer (first_name, last_name, email, password, hash, contact, address, city, zipcode, country , role, active) " 
            . "VALUES ('$first_name','$last_name','$email','$password', '$hash' , '$contact' , '$address','$city','$zipcode','$country' , '$role', '1')";

    // Add user to the database
    if ( $mysqli->query($sql1) ){
        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = ' Message from jewelcircle.net ';
        $message_body = '
        Hello '.$first_name.',

        Thank you for signing up!

        Follow us:

        Instagram: https://www.instagram.com/jewel_circle/

        Facebook: https://www.facebook.com/JewelCircle/

        For any queries feel free to email us at info@JewelCircle.net';

        mail( $to, $subject, $message_body );

        header("location: index.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }
}