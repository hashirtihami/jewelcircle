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
			<form role="form" action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="POST">
				<div class="form-group">
					<!-- <label>Text</label> -->
					<input type="text" name="name" class="form-control" placeholder="Coupon Code..." required>
				</div>
	            <div class="form-group">
                  <label for="exampleInputFile">Product Images</label>
                  <input type="file" id="exampleInputFile">
					<p class="help-block">Upload images of new product (upto 3)</p>
                </div>		
				
				<div class="form-group">
					<input type="text" name="discount" class="form-control" placeholder="Additional cost..." required>
        		</div>
       			<button type="submit" id="submit" name="submit" class="btn bg-blue margin">Proceed <i class="far fa-check-circle"></i></button>   
			</form>
  		</div>
    </div>

     <div class="container" id="some">  
       <div class=" col-md-3 col-sm-4">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Happy Birthday(1)</h3>

              <!-- <div class="box-tools pull-right"> -->
                <button type="button" class="btn btn-box-tool buttonDel pull-right box-tools" data-toggle="modal" data-target="#delConfirm"><i class="fas fa-trash-alt"></i></button>
              <!-- </div> -->
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <img class="img-thumb" src="Giftcards/1.jpg">
                <p style="text-align: center;">Rs.50</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class=" col-md-3 col-sm-4">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Congrats Leaf</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool buttonDel" data-toggle="modal" data-target="#delConfirm"><i class="fas fa-trash-alt"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <img class="img-thumb" src="Giftcards/2.jpg">
                <p style="text-align: center;">Rs.100</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        
        <div class=" col-md-3 col-sm-4">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Congrats simple</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool buttonDel" data-toggle="modal" data-target="#delConfirm"><i class="fas fa-trash-alt"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <img class="img-thumb" src="Giftcards/3.jpg">
                <p style="text-align: center;">Rs.50</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class=" col-md-3 col-sm-4">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bday</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool buttonDel" data-toggle="modal" data-target="#delConfirm"><i class="fas fa-trash-alt"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <img class="img-thumb" src="Giftcards/4.jpg">
                <p style="text-align: center;">Rs.50</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class=" col-md-3 col-sm-4">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bday</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool buttonDel" data-toggle="modal" data-target="#delConfirm"><i class="fas fa-trash-alt"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <img class="img-thumb" src="Giftcards/5.jpg">
                <p style="text-align: center;">Rs.50</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
       <div class=" col-md-3 col-sm-4">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bday</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool buttonDel" data-toggle="modal" data-target="#delConfirm"><i class="fas fa-trash-alt"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <img class="img-thumb" src="Giftcards/6.jpg">
                <p style="text-align: center;">Rs.50</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class=" col-md-3 col-sm-4">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bday</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool buttonDel" data-toggle="modal" data-target="#delConfirm"><i class="fas fa-trash-alt"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <img class="img-thumb" src="Giftcards/7.jpg">
                <p style="text-align: center;">Rs.150</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class=" col-md-3 col-sm-4">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bday</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool buttonDel" data-toggle="modal" data-target="#delConfirm"><i class="fas fa-trash-alt"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <img class="img-thumb" src="Giftcards/8.jpg">
                <p style="text-align: center;">Rs.50</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class=" col-md-3 col-sm-4">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bday</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool buttonDel" data-toggle="modal" data-target="#delConfirm"><i class="fas fa-trash-alt"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <img class="img-thumb" src="Giftcards/9.jpg">
                <p style="text-align: center;">Rs.120</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
       </div>
     </section>