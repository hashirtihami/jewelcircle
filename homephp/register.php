<?php
session_start();
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['contact'] = $_POST['contact'];
$_SESSION['country'] = $_POST['country'];
$_SESSION['zipcode'] = $_POST['zipcode'];
$_SESSION['role'] = $_POST['role'];

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
$msg= $mysqli->escape_string($_POST['msg']);
// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM customer WHERE email='$email'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!'; 

   header("location:error.php");
}

else { // Email doesn't already exist in a database, proceed...
    
    // active is 0 by DEFAULT (no need to include it here)
    $sql1 = "INSERT INTO customer (first_name, last_name, email, password, hash, contact, address, city, zipcode, country , role, active) " 
            . "VALUES ('$first_name','$last_name','$email','$password', '$hash' , '$contact' , '$address','$city','$zipcode','$country' , '$role', '1')";

    // Add user to the database
    if ( $mysqli->query($sql1) ){
        
        $_SESSION['active'] = 1;
        $_SESSION['logged_in'] = 1;
        $_SESSION['message'] ='Your Account has been created successfully';
        
            $to      = $email;
            $subject = ' Message from jewelcircle.net ';
            $message_body = '
        
            <div style=" background-color:#fff2fd; text-align:center;"> 
                    <div style=" background-color:#E60044;  font-size:40px; color:white; padding:40px;";>
                        JEWEL CIRCLE
                    </div>

                        <div class="container" style="padding:40px">


                            Dear '.$first_name.',<br><br>
                            You have just created an account on Jewel Circle. <br>For your records, your username is '.$email.'.<br>
                          
                            <br>
                            Welcome to JEWEL CIRCLE,<br>
                            The Jewel Circle Team.<br> <br>
                            <sub>
                            Follow us:<br>

                            Instagram: https://www.instagram.com/jewel_circle/ <br>

                            Facebook: https://www.facebook.com/JewelCircle/<br><br>

                            For any queries feel free to email us at info@jewelcircle.net
                            <br><br><hr>
                            <font style="font-size:10px">We apologize if you received this email in error. Please ignore it if you didn\'t make the request.</font>
                            <sub>
                         </div>
                </div> ';
            require'mailsender.php';
        
        header("location: userprofile.php"); 
    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }
}