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
          <span><h4 id="warning"><i class="fa fa-warning"></i> Product Exists</h4></span>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="POST" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label>Product Category</label>
              <div class="form-group">
                <label for="exist" class="chotaSize">
                  <input onclick="displayExistingCat();" id="exist" type="radio" name="r3" >
                  <span>Choose existing category</span>
                </label>
                <label for="new" class="chotaSize">
                  <input onclick="displayNewCatg();" id="new" type="radio" name="r3" >
                  <span>Add New</span>
                </label>
          </div>
              <select onblur="checkInput();" id="existingCat" class="form-control hideShow" name="proCategory">
               <?php
                  //Dynamically Adding categories to the dropdown from Category table
                  $query = "SELECT * FROM category ORDER BY categoryID";
                  $query_run = mysqli_query($conn, $query);
                  while($query_array = mysqli_fetch_array($query_run)){
                    echo "<option value='".$query_array["categoryID"]."' >".htmlspecialchars($query_array["category"])."</option>";
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
                <label class="chotaSize">
                  <input onclick="displayExistingTypes();" type="radio" name="r34">
                  <span>Choose existing type</span>
               </label>
               <label class="chotaSize">
                  <input onclick="displayNewType();" type="radio" name="r34">
                  <span>Add New</span>
               </label>

              <select class="form-control hideShow" id="existingTypes" name="type">
               <?php
                  //Dynamically Adding Product Tyoes to the dropdown from producttype table
                  $query = "SELECT * FROM producttype ORDER BY typeID";
                  $query_run = mysqli_query($conn, $query);
                  while($query_array = mysqli_fetch_array($query_run)){
                    echo "<option value='".$query_array["typeID"]."' >".htmlspecialchars($query_array["typeName"])."</option>";
                  }
                ?>
              </select>
          <div class="input-group input-group-sm hideShow" id="newTypes">
            <input type="text" class="form-control" placeholder="Enter name of new product...">
                <span id="newButton" class="input-group-btn">
                  <button type="button" class="btn btn-info btn-flat">Add New Type</button>
                </span>
          </div>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Product Images</label>
              <!--<input type="file" name="file">-->
              <input id="file" type="file" name="files[]" multiple>
              <span id="imgErr"></span>
              <span id="numFiles"></span>
              <p class="help-block">Upload images of new product (upto 3)</p>
            </div>
                            <!-- text input -->
            <div class="form-group">
            <div class="form-group">
              <label>Product Description</label>
              <textarea class="form-control" rows="3" placeholder="Enter a few details of the product..." name="desc"></textarea>
            </div>

          <div class="form-group">
            <label>Plating: </label>
            <?php
              //Dynamically Adding platingType checkboxes from Plating table
              $query = "SELECT * FROM plating ORDER BY platingID";
              $query_run = mysqli_query($conn, $query);
              while($query_array = mysqli_fetch_array($query_run)){
                echo "<label class='chotaSize'>";
                echo "  <input type='checkbox' name='platingType[]' onclick='displayPriceInput".$query_array["platingType"]."()' value='".$query_array["platingID"]."'> ".htmlspecialchars($query_array["platingType"])." ";
                echo "</label>";
              }
            ?>
            <div class="form-group hideShow" id="priceInputGold">
              <input id="english" type="text" class="form-control" placeholder="Gold price ...">
            </div>
            <div class="form-group hideShow" id="priceInputSilver">
              <input id="english" type="text" class="form-control" placeholder="Silver price ...">
            </div>
          </div>
          <div class="form-group">
            <label>Language: </label>
            <?php
              //Dynamically Adding language checkboxes from Language table
              $query = "SELECT * FROM language ORDER BY languageID";
              $query_run = mysqli_query($conn, $query);
              while($query_array = mysqli_fetch_array($query_run)){
                echo "<label class='chotaSize'>";
                echo "  <input type='checkbox' name='language[]' onclick='displayPriceInput".$query_array["languageName"]."()' value='".$query_array["languageID"]."'> ".htmlspecialchars($query_array["languageName"])." ";
                echo "</label>";
              }
            ?>
            <div class="form-group hideShow" id="priceInputEng">
              <input id="english" type="text" class="form-control" placeholder="Additional price(English) ...">
            </div>
            <div class="form-group hideShow" id="priceInputUrdu">
              <input id="english" type="text" class="form-control" placeholder="Additional price(Urdu) ...">
            </div>
            <div class="form-group hideShow" id="priceInputArab">
              <input id="english" type="text" class="form-control" placeholder="Additional price(Arabic) ...">
            </div>
          </div>
          <div class="form-group">
            <label>Name Type:</label>
            <?php
              //Dynamically Adding nameType checkboxes from Name Type table
              $query = "SELECT * FROM nameType ORDER BY nameTypeID";
              $query_run = mysqli_query($conn, $query);
              while($query_array = mysqli_fetch_array($query_run)){
                echo "<label class='chotaSize'>";
                echo "  <input type='checkbox' name='wordCount[]' onclick='displayPriceInput".$query_array["nameTypeValue"]."()' value='".$query_array["nameTypeID"]."'> ".htmlspecialchars($query_array["nameTypeValue"])." ";
                echo "</label>";
              }
            ?>
            <div class="form-group hideShow" id="priceInputDouble">
              <input id="english" type="text" class="form-control" placeholder="Additional price(Double) ...">
              </div>
            </div>
          </div>
          <div id="chainSize" class="form-group hideShow">
            <label>Chain size</label>
            <select class="form-control">
              <option>Small</option>
              <option>Medium</option>
              <option>Large</option>
            </select>
          </div>
          <div class="form-group">
            <label>Discount</label>
            <input type="text" class="form-control" placeholder="Enter in % ...">
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