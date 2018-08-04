<?php
/* Displays all error messages */
session_start();
require 'templates/top.inc.php';
?>

<div class="container"  style="text-align:center;">
    <div class="form">
        <h1 style="color:black; font-size:6vw; padding-bottom:10px; padding-top:120px;">Oops...  :(</h1>
        <p> 
            <?php 
                    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
    
                echo '<h2 style=" font-size:2vw;"><span style="color:#e60044; "> <i class="fas fa-exclamation-triangle"></i> </span> '.$_SESSION['message'].'&nbsp; <span><a href="loginindex.php"><button style="color:#e60044;  padding-bottom:200px;" class="button button-block"/> Click here to log in.</button> </a> </span> <h2>';
                else:
                    header( "location: index.php" ); 
                endif;
            ?>
        </p>  
    </div>
</div>
<?php
  require 'templates/bottom.inc.php';
?>