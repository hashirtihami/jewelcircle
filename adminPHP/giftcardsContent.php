<?php
  //Starting Database Connection
  require 'connect.inc.php';
?>
<section class="content-header">
      <h1>
        Giftcards
		<button type="button" class="btn bg-blue margin" onclick="displayAddNew();">Add new <i class="fas fa-plus-circle"></i></button></h1>
      </h1>
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
					<input type="number" name="discount" class="form-control" placeholder="Additional cost..." required>
        		</div>
       			<button type="submit" id="submit" name="submit" class="btn bg-blue margin">Proceed <i class="far fa-check-circle"></i></button>   
			</form>
  		</div>
    </div>

     <div class="container" id="some">  
      <div class="deleteSelection">
        <div class=" col-md-3 col-sm-4">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title ion-ios-star"> TE AMO</h3>
            </div>
            <div class="box-body">
              <div class="hovereffect">
                <img class="img-thumb" src="Giftcards/5.jpg" alt="">
                  <div class="owerlay">
                    <!-- <h2 class="info">Rs. 50</h2> -->
                   <a class="info" href="#">
                    <button type="button" class="btn btn-lg bg-black buttonDel" data-toggle="modal" data-target="#delConfirm">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                   </a>
                  </div>
              </div>
              <p style="text-align: center;">Rs.50</p>
                <!-- /.box -->
            </div>
          </div>
      </div>
    </div>
      <div class="deleteSelection">
        <div class="col-md-3 col-sm-4">
          <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title ion-ios-star"> MEJOR AMIGA</h3>
              </div>
              <div class="box-body">
                <div class="hovereffect">
                  <img class="img-thumb" src="Giftcards/8.jpg" alt="">
                    <div class="owerlay">
                      <!-- <h2 class="info">Rs. 50</h2> -->
                     <a class="info" href="#">
                      <button type="button" class="btn btn-lg bg-black buttonDel" data-toggle="modal" data-target="#delConfirm">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                     </a>
                    </div>
                </div>
                <p style="text-align: center;">Rs.50</p>
                  <!-- /.box -->
              </div>
            </div>
        </div>
      </div>
      <div class="deleteSelection">
        <div class="col-md-3 col-sm-4">
          <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title ion-ios-star"> meilleur ami</h3>
              </div>
              <div class="box-body">
                <div class="hovereffect">
                  <img class="img-thumb" src="Giftcards/11.jpg" alt="">
                    <div class="owerlay">
                      <!-- <h2 class="info">Rs. 50</h2> -->
                     <a class="info" href="#">
                      <button type="button" class="btn btn-lg bg-black buttonDel" data-toggle="modal" data-target="#delConfirm">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                     </a>
                    </div>
                </div>
                <p style="text-align: center;">Rs.100</p>
                  <!-- /.box -->
              </div>
            </div>
        </div>
      </div>
    </div>
</section>