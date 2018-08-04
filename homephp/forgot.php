<?php 
/* Main page with two forms: sign up and log in */
 // You're outputting HTML before the session_start(). Put your PHP code above the HTML code. answer from quora
require 'templates/top.inc.php';
session_start();

//https://www.youtube.com/watch?v=Pz5CbLqdGwM&ab_channel=CleverTechie
?>
<h2> password kon bhoolta hay bc! </h2>
<div class="form">
    <h1>Error</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p>     
    <a href="index.php"><button class="button button-block"/>Home</button></a>
</div>
<?php
  require 'templates/bottom.inc.php';
?>