<?php
  //Starting Database Connection
  require 'connect.inc.php';
?>
<link rel="stylesheet" type="text/css" href="tables.css">
<!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Users

  </h1>
  <ol class="breadcrumb">
    <li><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
    <li class="active"> Users</li>
  </ol>
</section>
<section class="content">
    <!-- Main content -->

      <div class="box">

            <!-- /.box-header -->
        <div class="box-body table-responsive">
          <div>
            <p>
              <input class="form-control" id="myInput" type="text" placeholder="Search..">
            </p>
          </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Role</th>
              </tr>
            </thead>
            <tbody id="tableBody">
                <td>Eli</td>
                <td></td>
                <td></td>
                <td></td>
            </tbody>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Role</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.row -->
</section>
<!-- /.content -->