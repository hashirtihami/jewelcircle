<?php 
session_start();
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in 
        require 'adminlogin.php';
    }
}
?>

<!DOCTYPE html>
<html lang='en'>
<head><link rel="Shortcut Icon" type="image/x-icon" href="../assets/images/logos/favicon2.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>
        Admin
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/adminhome.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
<div class="bg"></div>

<form action="admin" method="post">
  <h1 style="color:grey;"> Administrator</h1>
  <div class="inset">
  <p>
   
    <input style="color:white;" placeholder="email" autocomplete="off" type="text" name="email" id="email" required>
  </p>
  <p>
    
    <input style="color:white;" placeholder="password" type="password" name="password" id="password" required>
  </p>

  </div>
  <p class="p-container">
    <!-- <a href=""><span style="color:#990000;">Forgot password ?</span></a> -->
    <input style="background-color:#990000;" type="submit" name="login"  value="Log In">
  </p>
  <?php
    if( isset($_SESSION['message'])&&!empty($_SESSION['message']) )
    {
      echo '<div style="text-align:center; padding-bottom:15px;">
            <i class="fas fa-exclamation-circle"></i>
            '.$_SESSION['message'].'
            </div>';
            //unset($_SESSION['message']);
    }
  ?>

</form>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</body>
</html>
