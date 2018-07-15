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
    $query = "INSERT INTO category (category) VALUES ('$category');";
    $query .= "INSERT INTO producttype (typeName) VALUES ('$type');";
    $query .= "INSERT INTO product (description) VALUES ('$desc');";
    $query .= "INSERT INTO product (regPrice) VALUES ('$regPrice');";
    $query .= "INSERT INTO product (salesPrice) VALUES ('$salesPrice');";
    $query .= "INSERT INTO language (languageName) VALUES ('$language');";
    $query .= "INSERT INTO plating (platingType) VALUES ('$platingType');";
    $query .= "INSERT INTO nametype (nameTypeValue) VALUES ('$nameType');";
  }
  if(!@mysqli_query($conn, $query)){
    echo mysqli_use_result($conn);
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
