<?php
  require 'templates/top.inc.php';
  require 'newProductForm.php';
  require 'templates/bottom.inc.php';
  require 'connect.inc.php';
?>

<style type="text/css">
  .hideShow {
    display: none;
  }
  .chotaSize   {
    font-weight: 100 !important;
    padding: 4px;
  }
  #newButton  {
    margin: 5px 0px !important;
  }
  #warning{
    color: red;
    display: none;
    font-size: 12px;
  }
  #imgErr{
    color: red;
  }
</style>

<script src="../viewForm.js"></script>

<?php
  if(isset($_POST['submit'])){
    $category = $_POST['proCategory'];
    $type = $_POST['type'];
    $desc = $_POST['desc'];
    $regPrice = $_POST['regPrice'];
    $salesPrice = $_POST['salesPrice'];
    @$language = $_POST['language'];
    @$platingType = $_POST['platingType'];
    @$nameType = $_POST['wordCount'];
    if(!empty($language)&&!empty($platingType)&&!empty($nameType)){
      foreach ($language as $lang) {
        foreach ($platingType as $plating) {
          foreach ($nameType as $wordCount) {
            $query = "SELECT * FROM product WHERE productID = CONCAT('$category', '$type');";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result)>0){
              echo "<script type='text/javascript'>
                      function error(){
                          var warning = document.getElementById('warning');
                          warning.style.display = 'block';
                       }
                       error();
                    </script>";
            }else{
              $query = "INSERT INTO product (productID, description) VALUES (CONCAT('$category', '$type'), '$desc');";
              $query .= "INSERT INTO details (productID, categoryID, typeID, languageID, platingID, nameTypeID) VALUES (CONCAT('$category', '$type'),'$category', '$type', '$lang', '$plating', '$wordCount');";
              if(!@mysqli_multi_query($conn, $query)){
                echo mysqli_use_result($conn);
              }
            }
          }   
        }
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
            if($fileSize > 3000)
            {
              //$fileNameNew=$i.uniqid('',true).".".$fileExt;
              $fileNameNew=$i.".".$category.$type.".".$fileExt;
              $i++;
              $fileDestination = 'uploads/'.$fileNameNew;
              move_uploaded_file($fileTmpName, $fileDestination);
            } else echo "<script type='text/javascript'>
                      function error(){
                          $('#imgErr').html('File size too big');
                       }
                       error();
                    </script>";

          } else echo "<script type='text/javascript'>
                      function error(){
                          $('#imgErr').html('Error uploading file');
                       }
                       error();
                    </script>";

        } else 
          echo "<script type='text/javascript'>
                      function error(){
                          $('#imgErr').html('File type not allowed');
                       }
                       error();
                  </script>";
      }
    }
  }
?>