<?php
  require 'templates/top.inc.php';
  require 'giftcardsContent.php';
  require 'popup.php';
  require 'templates/bottom.inc.php';
  require 'connect.inc.php';
?>

<?php
  if(isset($_POST["submit"])){
    $giftCardName = $_POST["name"];
    $fileName = $_FILES["file"]["name"];
    $fileTmpName = $_FILES["file"]["tmp_name"];
    $fileSize = $_FILES["file"]['size'];
    $fileError = $_FILES["file"]['error'];
    $fileType = $_FILES["file"]['type'];

    $fileApart = explode('.', $fileName);
    $fileExt = strtolower(end($fileApart));

    $allowed = array('jpg', 'jpeg' , 'png');
    echo $fileName;
    echo $fileSize;
    if(in_array($fileExt, $allowed))
    {
      if($fileError===0)
      {
        if($fileSize < 3000000)
        {
          $fileNameNew=uniqid('',true).".".$fileExt;
          //$fileNameNew=$i.".".$category.$type.".".$fileExt;
          // $i++;
          $fileDestination = 'giftcards/'.$fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
        } else {
            echo "<script type='text/javascript'>
                  function error(){
                      $('#imgErr').html('File size too big');
                   }
                   error();
                </script>";
            die();
          }

      } else {
          echo "<script type='text/javascript'>
                  function error(){
                      $('#imgErr').html('Error uploading file');
                   }
                   error();
                </script>";
          die();
        }

    } else {
        echo "<script type='text/javascript'>
                  function error(){
                      $('#imgErr').html('File type not allowed');
                   }
                   error();
              </script>";
        die();
      }
  }
?>

<style type="">
  .container{
    padding: 0;
    width: auto;
  }
  .hideShow {
  display: none;
}
  h3 {
  font-family: 'Dosis', sans-serif !important;
  color: #e60040;
}
  .btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}
  .btn-dark:hover {
  color: #fff;
  background-color: #23272b;
  border-color: #1d2124;
}
  .btn-dark:focus, .btn-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}
</style>

<script src="js/giftcard.js"></script>