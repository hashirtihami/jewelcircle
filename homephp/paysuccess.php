<?php
    if(!empty($_get['tid'] && !empty($_GET['product']) ) )
    {
        $GET= filter_var_array($GET, FILTER_SANITIZE_STRING);
        $tid = $GET['tid'];
        $product = $GET['product'];
    }   
    else
    header('location:index.php');
   
?> 

 <?php
/* Displays all error messages */
session_start();
require 'templates/top.inc.php';
?>

<div class="container mt-4"  style="text-align:center;">
    <h2>Thank you for purchasing <?php echo $product; ?> </h2>
    <hr>
    <p>Your transaction ID is <?php echo $tid; ?> </p>
    <p>Check your email for more information.</p>
    <p><a href="index.php" class="btn btn-light mt-2"></a> Jewel Circle</p>
</div>
<?php
  require 'templates/bottom.inc.php';
?>