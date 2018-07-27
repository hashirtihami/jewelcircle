<?php
  require 'templates/top.inc.php';
  require 'newProductForm.php';
  require 'templates/bottom.inc.php';
  require 'connect.inc.php';
?>

<link rel="stylesheet" type="text/css" href="utils.css">

<script src="js/newProduct.js"></script>

<?php
  if(isset($_POST['submit'])){ 
    $timezone_offset_minutes = $_POST['date'];  // $_GET['timezone_offset_minutes']
    $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
    date_default_timezone_set($timezone_name);
    $date = date('Y-m-d H:i:s');
    $category = $_POST['proCategory'];
    $type = $_POST['type'];
    $desc = $_POST['desc'];
    $discount = $_POST['discount'];
    $nameLength = $_POST['length'];
    @$platingType = $_POST['platingType'];
    @$language = $_POST['language'];
    @$nameType = $_POST['wordCount'];
    if(!empty($language)&&!empty($platingType)&&!empty($nameType)){
      $query = "INSERT INTO product (productID, description, discount, date, nameLength) VALUES (CONCAT('$category', '$type'), '$desc', '$discount', '$date', '$nameLength');";
      if(mysqli_query($conn, $query)){
        echo mysqli_use_result($conn);
      }
      $i = 1;
      foreach ($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
        $fileName = $_FILES["files"]["name"][$key];
        $fileTmpName = $_FILES["files"]["tmp_name"][$key];
        $fileSize = $_FILES["files"]['size'][$key];
        $fileError = $_FILES["files"]['error'][$key];
        $fileType = $_FILES["files"]['type'][$key];

        $fileApart = explode('.', $fileName);
        $fileExt = strtolower(end($fileApart));

        $allowed = array('jpg', 'jpeg' , 'png');

        if(in_array($fileExt, $allowed))
        {
          if($fileError===0)
          {
            if($fileSize < 3000000)
            {
              //$fileNameNew=$i.uniqid('',true).".".$fileExt;
              $fileNameNew=$i.".".$category.$type.".".$fileExt;
              $i++;
              $fileDestination = 'uploads/'.$fileNameNew;
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
      foreach ($language as $lang) {
        foreach ($platingType as $plating) {
          foreach ($nameType as $wordCount) {
            $query = "SELECT * FROM details WHERE detailsID = CONCAT('$category', '$type', '$lang', '$plating', '$wordCount')";
            //echo $query;
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result)>0){
              echo "<script type='text/javascript'>
                      function error(){
                        $('#warning').css('display', 'block');
                       }
                       error();
                    </script>";
            }else{
              $platingPrice = $_POST['pricePlating'.$plating];
              $languagePrice = $_POST['priceLanguage'.$lang];
              $nameTypePrice = $_POST['priceNameType'.$wordCount];
              $query = "INSERT INTO details (detailsID, productID, categoryID, typeID, languageID, platingID, nameTypeID, platingPriceId, languagePriceId, nameTypePriceId) VALUES (CONCAT('$category', '$type', '$lang', '$plating', '$wordCount'), CONCAT('$category', '$type'),'$category', '$type', '$lang', '$plating', '$wordCount', CONCAT('$category', '$type', '$plating'), CONCAT('$category', '$type', '$lang'), CONCAT('$category', '$type', '$wordCount'));";
              if(mysqli_query($conn, $query)){
                echo mysqli_use_result($conn);
              }
              $query = "SELECT * FROM platingPrice WHERE platingPriceId = CONCAT('$category', '$type', '$plating')";
              if(mysqli_num_rows($result)<1){
                $query = "INSERT INTO platingPrice (platingPriceId, platingPrice) VALUES (CONCAT('$category', '$type', '$plating'), '$platingPrice')";
                if(mysqli_query($conn, $query)){
                  echo mysqli_use_result($conn);
                }
              }
              $query = "SELECT * FROM languagePrice WHERE languagePriceId = CONCAT('$category', '$type', '$lang')";
              if(mysqli_num_rows($result)<1){
                $query = "INSERT INTO languagePrice (languagePriceId, languagePrice) VALUES (CONCAT('$category', '$type', '$lang'), '$languagePrice')";
                if(mysqli_query($conn, $query)){
                  echo mysqli_use_result($conn);
                }
              }
              $query = "SELECT * FROM nameTypePrice WHERE nameTypePriceId = CONCAT('$category', '$type', '$wordCount')";
              if(mysqli_num_rows($result)<1){
                $query = "INSERT INTO nameTypePrice (nameTypePriceId, nameTypePrice) VALUES (CONCAT('$category', '$type', '$wordCount'), '$nameTypePrice')";
                if(mysqli_query($conn, $query)){
                  echo mysqli_use_result($conn);
                }
              }
            }
          }   
        }
      }
    }
  }
?>