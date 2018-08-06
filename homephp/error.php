<?php
/* Displays all error messages */
session_start();
require 'templates/top.inc.php';
?>

<div class="container"  style="text-align:center;">
    <div class="form">
        <h1 style="color:#e60044; font-size:200px;  padding-bottom:10px; padding-top:120px;">
            <i class="fas fa-exclamation-circle"></i>
        </h1>
        <p> 
            <?php 
                    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
    
                echo '
                    <h2 style=" font-size:20px;">  
                        <span style="color:#e60044; "> </span> '.$_SESSION['message'].'&nbsp;
                        <span>
                            <a href="userregister.php">
                                <button style="color:#e60044;  padding-bottom:200px;" class="button button-block"/> Try again.
                                </button>
                            </a> 
                        </span>
                    <h2>';
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