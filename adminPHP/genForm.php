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
  div.fileinputs {
    position: relative;
  }

  div.fakefile {
    position: absolute;
    top: 0px;
    left: 0px;
    z-index: 1;
  }

  input.file {
    position: relative;
    text-align: right;
    -moz-opacity:0 ;
    filter:alpha(opacity: 0);
    opacity: 0;
    z-index: 2;
    height: 100px;
    width: 100px;
  }

  #upload{
    width: 100px;
  }
  ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
  }
  li{
    float: left;
  }
  li div{
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
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
          $query = "SELECT * FROM product WHERE productID=CONCAT('$category', '$type');";
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
            $query = "INSERT INTO product (productID, description) VALUES (CONCAT('$category', '$type');";
            $query .= "INSERT INTO details (productID, categoryID, typeID, languageID, platingID, nameTypeID) VALUES (CONCAT('$category', '$type'),'$category', '$type', '$lang', '$plating', '$wordCount');";
            if(!@mysqli_multi_query($conn, $query)){
              echo mysqli_use_result($conn);
            }
          }
        }   
      }
    }
  }
?>