<?php
  //Starting Database Connection
  require 'connect.inc.php';
?>
<link rel="stylesheet" type="text/css" href="tables.css">

<section class="content-header">
      <h1>Orders 
<!--         <div class="btn-group showButtons" id="btnAddons">
        <button class="btn bg-light-blue-gradient btn-lg" data-toggle="modal" data-target="#delConfirm">
          <i class="fas fa-trash"></i>
          <span class="label-warning labelCount counts"></span>
        </button>
        <button class="btn bg-light-blue-gradient btn-lg"><i class="fas fa-file-download"></i>
          <span class="label-success labelCount counts"></span>
        </button>
        </div> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
        <li> E-Commerce</li>
        <li class="active"> Orders</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="box">
            <div class="box-body table-responsive">
  <!--               <div>
                  <p>
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                  </p>
                </div> -->
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="bg-custom">
                  <th class="checkboxColumn"></th>
                  <th>ID</th>
                  <th>Ship To</th>
                  <th>Date</th>
                  <th>Total</th>
                  <th class="delColumn">Actions</th>
                </tr>
                </thead>
                <tbody id="tableBody">
                  <?php
                    $query = "SELECT orderID,orderDate,totalAmount,address FROM `order` o, customer c WHERE c.customerID=o.customerID";
                    $query_run = mysqli_query($conn, $query);
                    while(@$query_array=mysqli_fetch_array($query_run)){
                      echo '<tr>
                            <td class="a-center ">
                              <input type="checkbox" class="icheckbox_flat-blue checks" name="table_records">
                            </td>
                            <td>'.$query_array['orderID'].'</td>
                            <td>'.$query_array['address'].'</td>
                            <td>'.$query_array['orderDate'].'</td>
                            <td>'.$query_array['totalAmount'].'</td>
                            <td class="btn-group buttonsCss" role="group">
                              <!-- <div> -->
                                <button type="button" class="btn bg-grey buttonDel" title="Delete" data-toggle="modal" data-target="#delConfirm">
                                  <i class="fas fa-trash-alt"></i>
                                </button>
                                <button type="button" class="btn bg-grey" title="PDF Download"><i class="fas fa-file-download"></i></button>
                                <button type="button" class="btn bg-grey dispatchBtn" title="Dispatch">
                                  <i class="fas fa-shipping-fast"></i>
                                  <span class="label-success labelCount buttonDispatch hideShow"><i class="fas fa-check"></i></span>
                                </button>
                              <!-- </div> -->
                            </td>
                          </tr>';
                    }
                  ?>
                </tbody>
                <tfoot>
                <tr class="bg-custom">
                  <th></th>
                  <th>ID</th>                 
                  <th>Ship To</th>
                  <th>Date</th>
                  <th>Total</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>


