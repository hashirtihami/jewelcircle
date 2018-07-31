<?php
  //Starting Database Connection
  require 'connect.inc.php';
?>
<section class="content-header">
      <h1>
        Giftcards
		<button type="button" class="btn bg-blue margin" onclick="displayAddNew();">Add new <i class="fas fa-plus-circle"></i></button></h1>
      </h1>
      <span><h4 id="warning" class="error hideShow"><i class="fa fa-warning"></i> Giftcard Exists</h4></span>
      <ol class="breadcrumb">
        <li><a href="../home.html"><i class="fas fa-home"></i> Home</a></li>
        <li> E-Commerce</li>
        <li class="active"> Giftcards</li>
      </ol>
</section>
<section class="content">
    <div class="hideShow" id="addNew">
    	<!-- <section class="content"> -->
    	<div class="box-body" style="width: 75%;">
			<form role="form" action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<!-- <label>Text</label> -->
					<input type="text" name="name" class="form-control" placeholder="Giftcard name..." required>
				</div>
	            <div class="form-group">
                  <label for="exampleInputFile">Product Images</label>
                  <input type="file" name="file" id="exampleInputFile">
					<p class="help-block">Upload image of new giftcard</p>
                </div>		
				
				<div class="form-group">
					<input type="number" name="price" class="form-control" placeholder="Additional cost..." required>
        		</div>
       			<button type="submit" id="submit" name="submit" class="btn bg-blue">Proceed <i class="far fa-check-circle"></i></button>   
			</form>
  		</div>
    </div>

     <div class="contayner" id="some">  
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
          echo '<img class="img-thumb" src="../assets/images/giftcards/'.$query_array["cardName"].'-thumb.'.$query_array["fileExt"].'" alt="">';
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