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
  }
</style>

<script src="viewForm.js"></script>

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
    foreach ($language as $lang) {
      foreach ($platingType as $plating) {
        foreach ($nameType as $wordCount) {
          $query = "SELECT * FROM product WHERE productID=CONCAT('$category', '$type', '$lang', '$plating', '$wordCount');";
          $result = mysqli_query($conn, $query);
          if(mysqli_num_rows($result)>0){
            echo "<script type='text/javascript'>
                    function error(){
                        var warning = document.getElementByID('warning');
                        warning.style.display = 'block';
                     }
                     error();
                  </script>";
          }else{
            $query = "INSERT INTO product (productID, description) VALUES (CONCAT('$category', '$type', '$lang', '$plating', '$wordCount'), '$desc');";
            $query .= "INSERT INTO details (productID, categoryID, typeID, languageID, platingID, nameTypeID) VALUES (CONCAT('$category', '$type', '$lang', '$plating', '$wordCount'),'$category', '$type', '$lang', '$plating', '$wordCount');";
            if(!@mysqli_multi_query($conn, $query)){
              echo mysqli_use_result($conn);
            }
          }
        }   
      }
    }
  }
?>