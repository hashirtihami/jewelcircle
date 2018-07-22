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
	<button type="button" class="btn bg-blue margin" onclick="displayAddNew();">Add new coupon <i class="fas fa-plus-circle"></i></button></h1>
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
					<input type="text" name="couponCode" class="form-control" placeholder="Coupon Code..." required>
				</div> <br>
				<div class="form-group">
					<!-- <label>Text</label> -->
				 	<textarea class="form-control" name="description" rows="3" placeholder="Description(optional)" required></textarea>
				</div>
				<div class="form-group">
					<!-- <label>Text</label> -->
					<input type="number" name="discount" class="form-control" placeholder="Discount(%)..." required>
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
            <th>Usage/Limit</th>
            <th>Expiry Date</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            $query = "SELECT * FROM coupon ORDER BY couponId";
            $query_run = mysqli_query($conn, $query);
            while($query_array = mysqli_fetch_array($query_run)){
              echo "<tr>";
              echo '<td>'.$query_array["couponCode"].'</td>';
              echo '<td>'.$query_array["discount"].'</td>';
              echo '<td>'.$query_array["description"].'</td>';
              echo '<td>'.$query_array["usageLimit"].'</td>';
              echo '<td>'.$query_array["expiryDate"].'</td>';
              echo '<td><div class="btn-group">
                  <button type="button" class="btn bg-grey buttonDel"><i class="fas fa-trash-alt"></i></button>
                </div></td></td>';
              echo '</tr>';
            }
          ?>
          <tr>
            <td>Trident</td>
            <td>Internet Explorer 4.0
            </td>
            <td>Win 95+</td>
            <td> 4</td>
            <td></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn bg-grey buttonDel"><i class="fas fa-trash-alt"></i></button>
              </div></td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet Explorer 5.0
            </td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation</td>
            <td>5</td>
            <td></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn bg-grey buttonDel"><i class="fas fa-trash-alt"></i></button>                      
              </div></td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 6
            </td>
            <td>Win 98+</td>
            <td>6</td>
            <td></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn bg-grey buttonDel"><i class="fas fa-trash-alt"></i></button>
              </div></td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet Explorer 7</td>
            <td>Win XP SP2+</td>
            <td>7</td>
            <td></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn bg-grey buttonDel"><i class="fas fa-trash-alt"></i></button>
              </div></td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>AOL browser (AOL desktop)</td>
            <td>Win XP</td>
            <td>6</td>
            <td></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn bg-grey buttonDel"><i class="fas fa-trash-alt"></i></button>
              </div></td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>NetFront 3.4</td>
            <td>Embedded devices</td>
            <td>-</td>
            <td></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn bg-grey buttonDel"><i class="fas fa-trash-alt"></i></button>
              </div></td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>Dillo 0.8</td>
            <td>Embedded devices</td>
            <td>-</td>
            <td></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn bg-grey buttonDel"><i class="fas fa-trash-alt"></i></button>
              </div></td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>Links</td>
            <td>Text only</td>
            <td>-</td>
            <td></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn bg-grey buttonDel"><i class="fas fa-trash-alt"></i></button>
              </div></td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>Lynx</td>
            <td>Text only</td>
            <td>-</td>
            <td></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn bg-grey buttonDel"><i class="fas fa-trash-alt"></i></button>
              </div></td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>IE Mobile</td>
            <td>Windows Mobile 6</td>
            <td>-</td>
            <td></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn bg-grey buttonDel"><i class="fas fa-trash-alt"></i></button>
              </div></td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>PSP browser</td>
            <td>PSP</td>
            <td>-</td>
            <td></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn bg-grey buttonDel"><i class="fas fa-trash-alt"></i></button>
              </div></td>
          </tr>
          <tr>
           <!--  <td class="a-center ">
              <input type="checkbox" class="flat" name="table_records">
            </td>  -->                 
            <td>Other browsers</td>
            <td>All others</td>
            <td>-</td>
            <td>-</td>
            <td></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn bg-grey buttonDel"><i class="fas fa-trash-alt"></i></button>
              </div></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>Code</th>
            <th>Discount(%)</th>
            <th>Description</th>
            <th>Usage/Limit</th>
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