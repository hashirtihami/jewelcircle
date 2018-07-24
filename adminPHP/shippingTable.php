<?php
  require 'connect.inc.php';
?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Shipping Chart
        <button type="button" class="btn bg-blue margin" onclick="displayAddNew();">New entry <i class="fas fa-plus-circle"></i></button>
      </h1>
      <span><h4 id="warning" class="error hideShow"><i class="fa fa-warning"></i> Entry Exists</h4></span>
      <ol class="breadcrumb">
        <li><a href="../home.html"><i class="fas fa-home"></i> Home</a></li>
        <li> E-Commerce</li>
        <li class="active"> Shipping</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="hideShow" id="addNew">
          <div class="box-body" style="width: 75%;">
              <form role="form" action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="POST">
                <div class="form-group">
                  <!-- <label>Text</label> -->
                    <input type="text" name="country" class="form-control" placeholder="Name of country..." required>
                </div> <br>
                <div class="form-group">
                  <!-- <label>Text</label> -->
                    <input type="number" name="cost" min="0" class="form-control" placeholder="Shipping cost..." required>
                </div>
                <button type="submit" name="submit" class="btn bg-blue margin";>Proceed <i class="far fa-check-circle"></i></button>   
            </form>
      </div>
    </div>
         <div class="box">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Country</th>
                    <th>Shipping Cost</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $query = "SELECT * FROM shipping ORDER BY shippingId";
                  $query_run = mysqli_query($conn, $query);
                  while($query_array = mysqli_fetch_array($query_run)){
                    echo "<tr>";
                    echo '<td>'.$query_array["country"].'</td>';
                    echo '<td>'.$query_array["cost"].'</td>';
                    echo '<td><button type="button" class="btn bg-grey buttonDel" data-toggle="modal" data-target="#delConfirm"><i class="fas fa-trash-alt"></i></button></td>';
                    echo '</tr>';
                  }
                ?>
              </tbody>
              <tfoot>
                  <tr>
                  <th>Country</th>
                  <th>Shipping Cost</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
    </section>