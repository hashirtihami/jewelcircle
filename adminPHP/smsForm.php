<?php
  //Starting Database Connection
  require 'connect.inc.php';
?>
<section class="content-header">
  <h1>
    SMS service
  </h1>
  <ol class="breadcrumb">
    <li><a href="../../home.html"><i class="fas fa-home"></i> Home</a></li>
    <li class="active"> SMS Service</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-primary" style="padding: 10px">
        <div class="box-header with-border">
          <h3 class="box-title">Compose Message</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="POST" enctype="multipart/form-data">
          <div class="box-body">

          <div class="form-group">
            <label>To: </label>
            <span></span>
            <input type="number" name="contactNumber" class="form-control" placeholder="Enter Contact number...">
          </div>
                            <!-- text input -->
            <div class="form-group">
              <label>Message: </label>
              <span id="descErr" class="error"></span>
              <textarea id="desc" class="form-control" rows="3" placeholder="Enter message here..." name="desc"></textarea>
            </div>

          <!-- /.box-body -->

          <!-- <div class="box-footer"> -->
            <button type="submit" id="submit" class="btn btn-primary pull-right" name="submit">Send</button>
          <!-- </div> -->
          </div>
        </form>
      </div>
    </div>
</section>
      <!-- /.box -->