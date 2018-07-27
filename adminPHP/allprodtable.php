<?php
  //Starting Database Connection
  require 'connect.inc.php';
?>
<style type="">
    .delColumn {
      width: 150px;
    }
    .nen {
      position: absolute;
      top: 9px;
      right: 7px;
      text-align: center;
      font-size: 11px;
      padding: 2px 3px;
      line-height: .9;
      border-radius: 10px;
    }
    .showButtons {
      display: inline-block;
      margin-left: 5px;
    }
</style>

<section class="content-header">
      <h1>All Products 
        <div class="btn-group showButtons" id="btnAddons">
          <button class="btn bg-light-blue-gradient btn-lg" data-toggle="modal" data-target="#delConfirm">
            <i class="fas fa-trash"></i>
            <span class="label-warning nen counts"></span>
          </button>
        </div>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../../home.html"><i class="fas fa-home"></i> Home</a></li>
        <li> E-Commerce</li>
        <li class="active"> All Products</li>
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
                  <th>Product</th>
                  <th>Product Type</th>
                  <th>Silver Price </th>
                  <th>Gold Price </th>
                  <th class="delColumn">Actions</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT productID FROM product";
                    $query_run = mysqli_query($conn, $query);
                    while(@$query_array = mysqli_fetch_array($query_run)){
                      $query = "SELECT T.typeName, C.category FROM details D JOIN producttype T ON D.typeID=T.typeID JOIN category C ON D.categoryID=C.categoryID WHERE D.productID=".$query_array["productID"]." LIMIT 1";
                      $productId = $query_array["productID"];
                      $result = mysqli_query($conn, $query);
                      while(@$query_array = mysqli_fetch_array($result)){
                        echo '<tr>';
                        echo '<td class="a-center ">';
                        echo '<input type="checkbox" class="flat checks" name="table_records">';
                        echo '</td>';
                        echo '<td class="category">'.$query_array["category"].'</td>';
                        echo '<td class="type">'.$query_array["typeName"].'</td>';
                        $query = "SELECT platingID FROM plating";
                        $run = mysqli_query($conn, $query);
                        while(@$query_array = mysqli_fetch_array($run)){
                          $query = "SELECT PL.platingPrice FROM platingprice PL JOIN product P JOIN plating PLA ON PL.platingPriceId = CONCAT(".$productId.", ".$query_array["platingID"].") LIMIT 1";
                          $check = $query_array["platingID"];
                          $price = mysqli_query($conn, $query);
                          while(@$query_array = mysqli_fetch_array($price)){
                            echo "<td>".$query_array["platingPrice"]."</td>";
                          }
                        }
                        echo '<td><button type="button" class="btn bg-grey buttonDel" data-toggle="modal" data-target="#delConfirm"><i class="fas fa-trash-alt"></i></button></td>';
                        echo '</tr>';
                      }
                    }
                  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th></th>                 
                  <th>Product</th>
                  <th>Product Type</th>
                  <th>Silver Price </th>
                  <th>Gold Price </th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>
