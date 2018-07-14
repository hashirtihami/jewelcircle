
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
                    <option value="bracelet">Bracelet</option>
                    <option value="ring">Ring</option>
                    <option value="cuffs">Cufflings</option>
                    <option value="locket">Locket</option>
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
                    <option>Heart</option>
                    <option>Infinity</option>
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
                <label class="chotaSize">
                  <input type="checkbox" name="language[]" value="english"> English
                </label>
                <label class="chotaSize">
                  <input type="checkbox" name="language[]" value="urdu"> Urdu
                </label>
                <label class="chotaSize">
                  <input type="checkbox" name="language[]" value="arabic"> Arabic
                </label>
              </div>
              <div class="form-group">
                <label>Plating: </label>
                <label class="chotaSize">
                  <input type="checkbox" name="platingType[]" value="gold"> Gold
                </label>
                <label class="chotaSize">
                  <input type="checkbox" name="platingType[]" value="silver"> Silver
                </label>
              </div>
              <div class="form-group">
                <label>Name Type:</label>
                 <label class="chotaSize"> 
                 <input type="radio" name="wordCount"> Single
                </label>
                <label class="chotaSize">
                  <input type="radio" name="wordCount"> Double
                </label>
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
          <!-- /.box -->