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
<head>
    <meta charset="UTF-8" /> 
    <title>
        Admin
    </title>
    <link rel="stylesheet" type="text/css" href="css/adminhome.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>

<form action="admin.php" method="post">
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
      
    }
  ?>

</form>

  
</body>
</html>
<?php unset($_SESSION['message']); ?>