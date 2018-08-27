<?php
/* User login process, checks if user exists and password is correct */
 session_start() ;
// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM customer WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = 'User with that email does not exist! <a href="userregister#signupform">Sign Up</a>';
    header("location: error");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = 1;
        header("location: userprofile");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password. <a href=\"userregister.php\">Try again</a> ";
        header("location: error");
    }
}

