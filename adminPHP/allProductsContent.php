<?php
  //Starting Database Connection
  require 'connect.inc.php';
?>
<section class="content-header">
      <h1>
        All Products
      </h1>
      <span><h4 id="warning" class="error hideShow"><i class="fa fa-warning"></i> Giftcard Exists</h4></span>
      <ol class="breadcrumb">
        <li><a href="../home.html"><i class="fas fa-home"></i> Home</a></li>
        <li> Products</li>
        <li class="active"> All Products</li>
      </ol>
</section>
<section class="content">

     <div class="container" id="some">  
      <?php
        $query = "SELECT * FROM giftcard ORDER BY giftcardId";
        $query_run = mysqli_query($conn, $query);
        while(@$query_array = mysqli_fetch_array($query_run)){
          echo '<div class="deleteSelection">';
          echo '<div class=" col-md-3 col-sm-4">';
          echo '<div class="box box-success">';
          echo '<div class="box-header with-border">';
          echo '<h3 class="box-title ion-ios-star">'.$query_array["cardName"].'</h3>';
          echo '</div>';
          echo '<div class="box-body" >';
          echo '<div class="hovereffect">';
          echo '<img class="img-thumb" src="giftcards/thumbs/'.$query_array["cardName"].'-thumb.'.$query_array["fileExt"].'" alt="">';
          echo '<div class="owerlay" style="width: 100%">';
          echo '<a class="info" href="#">';
          echo '<button type="button" class="btn btn-lg bg-black buttonDel" data-toggle="modal" data-target="#delConfirm">';
          echo '<i class="fas fa-trash-alt"></i>';
          echo '</button>';
          echo '</a>';
          echo '</div>';
          echo '</div>';
          echo '<p style="text-align: center;">Rs '.$query_array["cardCost"].'</p>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
        }
      ?>
    </div>
</section>