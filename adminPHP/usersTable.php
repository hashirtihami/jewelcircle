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
                <th class="checkboxColumn"></th>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Posts</th>
              </tr>
            </thead>
            <tbody id="tableBody">
              <?php
                $query = "SELECT * FROM coupon ORDER BY couponId";
                $query_run = mysqli_query($conn, $query);
                while(@$query_array = mysqli_fetch_array($query_run)){
                  echo "<tr>";
                  echo '<td><input type="checkbox" class="icheckbox_flat-blue checks" name="table_records"></td>';
                  echo '<td class="data"></td>';
                  echo '<td></td>';
                  echo '<td></td>';
                  echo '<td></td>';
                  echo '<td></td>';
                  echo '</tr>';
                }
              ?>
            </tbody>
            <tfoot>
              <tr>
                <th></th>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Posts</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.row -->
</section>
<!-- /.content -->