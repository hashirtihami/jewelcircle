<?php
  //Starting Database Connection
  require 'connect.inc.php';
?>

<section class="content-header">
  <h1>
    Add New Product
  </h1>
  <ol class="breadcrumb">
    <li><a href="../../home.html"><i class="fas fa-home"></i> Home</a></li>
    <li> Products</li>
    <li class="active"> Add New Products</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Product Details</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?php echo $_SERVER['SCRIPT_NAME']?>" method='post'>
          <div class="box-body">
            <div class="form-group">
              <label>Product Category</label>
              <div class="form-group">
                <label for="exist" class="chotaSize" onclick="displayOne();">
                  <input id="exist" type="radio" name="r3" >
                  <span>Choose existing category</span>
                </label>
                <label for="new" class="chotaSize" onclick="displayTwo();">
                  <input id="new" type="radio" name="r3" >
                  <span>Add New</span>
                </label>
          </div>
              <select onblur="checkInput();" id="dis1" class="form-control hideShow" name="proCategory">
               <?php
                  //Dynamically Adding categories to the dropdown from Category table
                  $query = "SELECT * FROM category";
                  $query_run = mysqli_query($conn, $query);
                  while($query_array = mysqli_fetch_array($query_run)){
                    echo "<option value='".$query_array["category"]."' >".htmlspecialchars($query_array["category"])."</option>";
                  }
                ?>
              </select>
            </div>
          <div class="input-group input-group-sm hideShow" id="dis2">
            <input type="text" class="form-control" placeholder="Enter name of new product...">
                <span id="newButton" class="input-group-btn">
                  <button type="button" class="btn btn-info btn-flat">Add New Product</button>
                </span>
          </div>

           <div class="form-group">
              <label>Product Type</label>
              <div class="form-group">
                <label class="chotaSize" onclick="displayThree();">
                  <input type="radio" name="r34">
                  <span>Choose existing type</span>
               </label>
               <label class="chotaSize" onclick="displayFour();">
                  <input type="radio" name="r34">
                  <span>Add New</span>
               </label>

              <select class="form-control hideShow" id="dis3" name="type">
               <?php
                  //Dynamically Adding Product Tyoes to the dropdown from producttype table
                  $query = "SELECT * FROM producttype";
                  $query_run = mysqli_query($conn, $query);
                  while($query_array = mysqli_fetch_array($query_run)){
                    echo "<option value='".$query_array["typeName"]."' >".htmlspecialchars($query_array["typeName"])."</option>";
                  }
                ?>
              </select>
          <div class="input-group input-group-sm hideShow" id="dis4">
            <input type="text" class="form-control" placeholder="Enter name of new product...">
                <span id="newButton" class="input-group-btn">
                  <button type="button" class="btn btn-info btn-flat">Add New Type</button>
                </span>
          </div>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Product Images</label>
              <input type="file" id="exampleInputFile">

              <p class="help-block">Upload images of new product (upto 3)</p>
            </div>
                            <!-- text input -->
            <div class="form-group">
            <div class="form-group">
              <label>Product Description</label>
              <textarea class="form-control" rows="3" placeholder="Enter a few details of the product..." name="desc"></textarea>
            </div>
            <div class="form-group">
              <label>Regular Price</label>
              <input type="text" class="form-control" placeholder="Enter price in rupees ..." name="regPrice">
            </div>
            <div class="form-group">
              <label>Sale Price</label>
              <input type="text" class="form-control" placeholder="Enter price in rupees ..." name="salesPrice">
            </div>

          <div class="form-group">
            <label>Language: </label>
            <?php
              //Dynamically Adding language checkboxes from Language table
              $query = "SELECT * FROM language";
              $query_run = mysqli_query($conn, $query);
              while($query_array = mysqli_fetch_array($query_run)){
                echo "<label class='chotaSize'>";
                echo "  <input type='checkbox' name='language[]' value='".$query_array["languageName"]."'> ".htmlspecialchars($query_array["languageName"])." ";
                echo "</label>";
              }
            ?>
          </div>
          <div class="form-group">
            <label>Plating: </label>
            <?php
              //Dynamically Adding platingType checkboxes from Plating table
              $query = "SELECT * FROM plating";
              $query_run = mysqli_query($conn, $query);
              while($query_array = mysqli_fetch_array($query_run)){
                echo "<label class='chotaSize'>";
                echo "  <input type='checkbox' name='platingType[]' value='".$query_array["platingType"]."'> ".htmlspecialchars($query_array["platingType"])." ";
                echo "</label>";
              }
            ?>
          </div>
          <div class="form-group">
            <label>Name Type:</label>
            <?php
              //Dynamically Adding nameType checkboxes from Name Type table
              $query = "SELECT * FROM nameType";
              $query_run = mysqli_query($conn, $query);
              while($query_array = mysqli_fetch_array($query_run)){
                echo "<label class='chotaSize'>";
                echo "  <input type='checkbox' name='wordCount[]' value='".$query_array["nameTypeValue"]."'> ".htmlspecialchars($query_array["nameTypeValue"])." ";
                echo "</label>";
              }
            ?>
          </div>
           <div id="chainSize" class="form-group hideShow">
              <label>Chain size</label>
              <select class="form-control">
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
              </select>
            </div>

          </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
</section>
      <!-- /.box -->