<?php
  //Starting Database Connection
  require 'connect.inc.php';
?>
<link rel="stylesheet" type="text/css" href="tables.css">

<section class="content-header">
      <h1>Orders 
        <div class="btn-group showButtons" id="btnAddons">
        <button class="btn bg-light-blue-gradient btn-lg" data-toggle="modal" data-target="#delConfirm">
          <i class="fas fa-trash"></i>
          <span class="label-warning labelCount counts"></span>
        </button>
        <button class="btn bg-light-blue-gradient btn-lg"><i class="fas fa-file-download"></i>
          <span class="label-success labelCount counts"></span>
        </button>
        </div>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../../home.html"><i class="fas fa-home"></i> Home</a></li>
        <li> E-Commerce</li>
        <li class="active"> Orders</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="box">
            <div class="box-body table-responsive">
                <div>
                  <p>
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                  </p>
                </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="checkboxColumn"></th>
                  <th>Order ID</th>
                  <th>Order</th>
                  <th>Ship To</th>
                  <th>Date</th>
                  <th>Total</th>
                  <th class="delColumn">Actions</th>
                </tr>
                </thead>
                <tbody id="tableBody">
                 <tr>
                    <td class="a-center ">
                      <input type="checkbox" class="icheckbox_flat-blue checks" name="table_records">
                    </td>
                    <td>981</td>
                    <td>Heart Bracelet</td>
                    <td>Ghar pe
                    </td>
                    <td>Abhi chaye</td>
                    <td>150</td>
                    <td class="btn-group buttonsCss" role="group">
                      <!-- <div> -->
                        <button type="button" class="btn bg-grey buttonDel" data-toggle="modal" data-target="#delConfirm">
                          <i class="fas fa-trash-alt"></i>
                        </button>
                        <button type="button" class="btn bg-grey"><i class="fas fa-file-download"></i></button>
                        <button type="button" class="btn bg-grey"><i class="fas fa-question-circle"></i></button>
                      <!-- </div> -->
                    </td>
                  </tr>
                  <tr>
                    <td class="a-center ">
                      <input type="checkbox" class="icheckbox_flat-blue checks" name="table_records">
                    </td>
                    <td>1926</td>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 5</td>
                    <td class="btn-group buttonsCss" role="group">
                      <!-- <div> -->
                        <button type="button" class="btn bg-grey buttonDel" data-toggle="modal" data-target="#delConfirm">
                          <i class="fas fa-trash-alt"></i>
                        </button>
                        <button type="button" class="btn bg-grey"><i class="fas fa-file-download"></i></button>
                        <button type="button" class="btn bg-grey"><i class="fas fa-question-circle"></i></button>
                      <!-- </div> -->
                    </td>
                  </tr>
                  <tr>
                    <td class="a-center ">
                      <input type="checkbox" class="icheckbox_flat-blue checks" name="table_records">
                    </td>
                    <td>101</td>
                    <td>Part</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 6</td>
                    <td class="btn-group buttonsCss" role="group">
                      <!-- <div> -->
                        <button type="button" class="btn bg-grey buttonDel" data-toggle="modal" data-target="#delConfirm">
                          <i class="fas fa-trash-alt"></i>
                        </button>
                        <button type="button" class="btn bg-grey"><i class="fas fa-file-download"></i></button>
                        <button type="button" class="btn bg-grey"><i class="fas fa-question-circle"></i></button>
                      <!-- </div> -->
                    </td>
                  </tr>                  

                </tbody>
                <tfoot>
                <tr>
                  <th></th>
                  <th>Order ID</th>                 
                  <th>Order</th>
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


