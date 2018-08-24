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
$social= $mysqli->escape_string(implode($_POST['social']));
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
            . "VALUES ('$first_name','$last_name','$email','$country', '$gender' , '$social' , '$mainsite','$othersite','$fans','$msg',  '$role')";

    // Add user to the database
    if ( $mysqli->query($sql1) ){
        $_SESSION['active'] = 1;
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                "You have successfully submitted the form. Check your email for confirmation";

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $_POST['email']= $email;
        $subject = ' Message from jewelcircle.net ';
        $message_body = '
        
        <div style=" background-color:#fff2fd; text-align:center;"> 
                    <div style=" background-color:#E60044;  font-size:40px; color:white; padding:40px;";>
                        JEWEL CIRCLE
                    </div>

                        <div class="container" style="padding:40px">


                            Dear '.$first_name.',<br><br>
                            You have just created an account on Jewel Circle. <br>For your records, your username is '.$email.'.<br>
                            Your application for influencer of JEWEL CIRCLE has been received.<br>
                            Your profile and social accounts will be observed and a confirmation email will be sent, once your application is granted.<br>
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
        header("location: success"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error");
    }
}