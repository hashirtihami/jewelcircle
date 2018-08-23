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
    $price = $_POST["price"];
    $fileName = $_FILES["file"]["name"];
    $fileTmpName = $_FILES["file"]["tmp_name"];
    $fileSize = $_FILES["file"]['size'];
    $fileError = $_FILES["file"]['error'];
    $fileType = $_FILES["file"]['type'];

    $fileApart = explode('.', $fileName);
    $fileExt = strtolower(end($fileApart));

    $allowed = array('jpg', 'jpeg' , 'png');
    $query = "SELECT * FROM giftcard WHERE cardName = '$giftCardName'";
    //echo $query;
    $result = mysqli_query($conn, $query);
    if(!(mysqli_num_rows($result)>0)){
      if(in_array($fileExt, $allowed))
      {
        if($fileError===0)
        {
          if($fileSize < 3000000)
          {
            $fileNameNew=$giftCardName;
            //$fileNameNew=$i.".".$category.$type.".".$fileExt;
            // $i++;
            $fileDestination = 'giftcards/'.$fileNameNew.".".$fileExt;
            //move_uploaded_file($fileTmpName, $fileDestination);
            if(move_uploaded_file($fileTmpName, $fileDestination)){
              if($fileExt==="jpg"||$fileExt==="jpeg"){$source_image = imagecreatefromjpeg($fileDestination);}
              if($fileExt==="png"){$source_image = imagecreatefrompng($fileDestination);}
              $source_imagex = imagesx($source_image);
              $source_imagey = imagesy($source_image);
              $dest_imagex = 1000;
              $dest_imagey = 1000;
              $dest_image = imagecreatetruecolor($dest_imagex, $dest_imagey);
              imagecopyresampled($dest_image, $source_image, 0, 0, 0, 0, $dest_imagex, $dest_imagey, $source_imagex, $source_imagey);
              imagejpeg($dest_image,"giftcards/thumbs/".$fileNameNew."-thumb.jpg",80);
              rename("giftcards/thumbs/".$fileNameNew."-thumb.jpg", "../assets/images/giftcards/".$fileNameNew."-thumb.jpg");
              unlink($fileDestination);
            }
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
      $query = "INSERT INTO giftcard (cardName, cardCost, fileExt) VALUES ('$giftCardName', '$price', '$fileExt')";
      if(mysqli_query($conn, $query)){
        echo mysqli_use_result($conn);
      }
      echo "<meta http-equiv='refresh' content='0'>";
    }
    else{
      echo "<script type='text/javascript'>
              function error(){
                $('#warning').css('display', 'block');
               }
               error();
            </script>";
    }
  }
?>

<style type="">
  .contayner{
    padding: 0;
    width: auto;
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
hr.style14 { 
  border: 0; 
  height: 1px; 
  background-image: -webkit-linear-gradient(left, #ffffff, #bac7d2, #ffffff);
  background-image: -moz-linear-gradient(left, #ffffff, #bac7d2, #ffffff);
  background-image: -ms-linear-gradient(left, #ffffff, #bac7d2, #ffffff);
  background-image: -o-linear-gradient(left, #ffffff, #bac7d2, #ffffff);
}
</style>
<link rel="stylesheet" type="text/css" href="utils.css">
<script src="js/giftcard.js"></script>