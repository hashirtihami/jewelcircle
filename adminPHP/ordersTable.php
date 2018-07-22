<?php
  //Starting Database Connection
  require 'connect.inc.php';
?>
<style type="">
     #delColumn {
      width: 150px;
    }
</style>

<section class="content-header">
      <h1>
        Orders
      </h1>
      <ol class="breadcrumb">
        <li><a href="../../home.html"><i class="fas fa-home"></i> Home</a></li>
        <li> E-Commerce</li>
        <li class="active"> Orders</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
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
                  <th></th>
                  <th>Order</th>
                  <th>Ship To</th>
                  <th>Date</th>
                  <th>Total</th>
                  <th id="delColumn">Actions</th>
                </tr>
                </thead>
                <tbody>



                </tbody>
                <tfoot>
                <tr>
                  <th></th>                 
                  <th>Order</th>
                  <th>Ship To</th>
                  <th>Date</th>
                  <th>Total</th>
                  <th>Actions</th>
 <!--                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th> -->
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>
