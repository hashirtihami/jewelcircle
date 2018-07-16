<?php
  require 'templates/top.inc.php';
  require 'newProductForm.php';
  require 'templates/bottom.inc.php';
  require 'connect.inc.php';
  if(isset($_POST['submit'])){
    $category = $_POST['proCategory'];
    $type = $_POST['type'];
    $desc = $_POST['desc'];
    $regPrice = $_POST['regPrice'];
    $salesPrice = $_POST['salesPrice'];
    @$language = $_POST['language'];
    @$platingType = $_POST['platingType'];
    @$nameType = $_POST['wordCount'];
    foreach ($language as $lang) {
      foreach ($platingType as $plating) {
        foreach ($nameType as $wordCount) {
          $query = "INSERT INTO product (productID) VALUES (CONCAT('$category', '$type', '$lang', '$plating', '$wordCount'))";
          if(!@mysqli_query($conn, $query)){
            echo mysqli_use_result($conn);
          }
          //$query = SELECT EXISTS(SELECT * FROM details WHERE category = '$category' AND  typeName = '$typeName')
          $query = "INSERT INTO details (category, typeName, languageName, platingType, nameTypeValue) VALUES ('$category', '$type', '$lang', '$plating', '$wordCount')";
          if(!@mysqli_query($conn, $query)){
            echo mysqli_use_result($conn);
          }
        }   
      }
    }
  }
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
</style>

<script src="viewForm.js"></script>
