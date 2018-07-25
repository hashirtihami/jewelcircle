<?php
  //Starting Database Connection
  require 'connect.inc.php';
?>
<!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Coupons
    <!-- <button id="abc" type="button" class="btn bg-blue margin">Add new coupon <i class="fas fa-plus-circle"></i></button></h1> -->
    <button type="button" class="btn bg-blue margin" onclick="displayAddNew();">Add new <i class="fas fa-plus-circle"></i></button>
  </h1>
  <span><h4 id="warning" class="error hideShow"><i class="fa fa-warning"></i> Coupon Exists</h4></span>
  <ol class="breadcrumb">
    <li><a href="../../home.html"><i class="fas fa-home"></i> Home</a></li>
    <li id="heee"> E-Commerce</li>
    <li class="active"> Coupons</li>
  </ol>
</section>
    <!-- Main content -->
<section class="content">
  <div class="hideShow" id="addNew">
    	<!-- <section class="content"> -->
    		<!-- <div class="row"> -->
    			<!-- <div class="col-md-6"> -->
    <div class="box-body" style="width: 75%;">
			<form role="form" action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="POST">
				<div class="form-group">
					<!-- <label>Text</label> -->
					<input type="text" name="couponCode" class="form-control" maxlength="5" placeholder="Coupon Code..." style="text-transform:uppercase;" required>
				</div> <br>
				<div class="form-group">
					<!-- <label>Text</label> -->
				 	<textarea class="form-control" name="description" rows="3" placeholder="Description(optional)" required></textarea>
				</div>
				<div class="form-group">
					<!-- <label>Text</label> -->
					<input type="number" name="discount" class="form-control" max="100" placeholder="Discount(%)..." required>
        </div>
        <div class="form-group">
          <!-- <label>Text</label> -->
          <input type="date" name="expiryDate" class="form-control" required>
        </div>
				<button type="submit" id="submit" name="submit" class="btn bg-blue margin">Proceed <i class="far fa-check-circle"></i></button>   
			</form>
  	</div>
  </div>
 <!--      <div class="row">
        <div class="col-xs-12"> -->

  <div class="box">
<!--             <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div> -->
        <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Code</th>
            <th>Discount(%)</th>
            <th>Description</th>
            <th>Expiry Date</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <div class="deleteSelection">
          <?php
            $query = "SELECT * FROM coupon ORDER BY couponId";
            $query_run = mysqli_query($conn, $query);
            while($query_array = mysqli_fetch_array($query_run)){
              echo "<tr>";
              echo '<td>'.$query_array["couponCode"].'</td>';
              echo '<td>'.$query_array["discount"].'</td>';
              echo '<td>'.$query_array["description"].'</td>';
              echo '<td>'.$query_array["expiryDate"].'</td>';
              echo '<td><button type="button" class="btn bg-grey buttonDel" data-toggle="modal" data-target="#delConfirm"><i class="fas fa-trash-alt"></i></button></td>';
              echo '</tr>';
            }
          ?>
          </div>
        </tbody>
        <tfoot>
          <tr>
            <th>Code</th>
            <th>Discount(%)</th>
            <th>Description</th>
            <th>Expiry Date</th>
            <th></th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->