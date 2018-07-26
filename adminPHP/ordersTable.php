<?php
  //Starting Database Connection
  require 'connect.inc.php';
?>
<style type="">
    .hideShow {
      display: none;
    }
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
      <h1>Orders 
        <div class="btn-group showButtons" id="btnAddons">
        <button class="btn bg-light-blue-gradient btn-lg" data-toggle="modal" data-target="#delConfirm">
          <i class="fas fa-trash"></i>
          <span class="label-warning nen counts"></span>
        </button>
        <button class="btn bg-light-blue-gradient btn-lg"><i class="fas fa-file-download"></i>
          <span class="label-success nen counts"></span>
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
                  <th class="delColumn">Actions</th>
                </tr>
                </thead>
                <tbody>
                 <tr>
                    <td class="a-center ">
                      <input type="checkbox" class="flat checks" name="table_records">
                    </td>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td class="btn-group" role="group">
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
                      <input type="checkbox" class="flat checks" name="table_records">
                    </td>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td class="btn-group" role="group">
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
                      <input type="checkbox" class="flat checks" name="table_records">
                    </td>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td class="btn-group" role="group">
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
                      <input type="checkbox" class="flat checks" name="table_records">
                    </td>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td class="btn-group" role="group">
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


                </tbody>
                <tfoot>
                <tr>
                  <th></th>                 
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
