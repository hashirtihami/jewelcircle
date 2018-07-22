<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Shipping Chart
        <button type="button" class="btn bg-blue margin" onclick="displayAddNew();">New entry <i class="fas fa-plus-circle"></i></button>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../home.html"><i class="fas fa-home"></i> Home</a></li>
        <li> E-Commerce</li>
        <li class="active"> Shipping</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="hideShow" id="addNew">
          <div class="box-body" style="width: 75%;">
              <form role="form">
                <div class="form-group">
                  <!-- <label>Text</label> -->
                    <input type="text" name="country" class="form-control" placeholder="Name of country...">
                </div> <br>
                <div class="form-group">
                  <!-- <label>Text</label> -->
                    <input type="text" name="cost" class="form-control" placeholder="Shipping cost...">
                </div>
                <button type="button" class="btn bg-blue margin";>Proceed <i class="far fa-check-circle"></i></button>   
            </form>
      </div>
    </div>
         <div class="box">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Country</th>
                    <th>Shipping Cost</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Pakistan</td>
                  <td>Win 95+</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn bg-grey buttonDel" data-toggle="modal" data-target="#delConfirm">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>India</td>
                  <td>Win 95+</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn bg-grey buttonDel" data-toggle="modal" data-target="#delConfirm">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </div></td>
                </tr>
                <tr>
                  <td>UK</td>
                  <td>Win 95+</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn bg-grey buttonDel" data-toggle="modal" data-target="#delConfirm">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </div></td>
                </tr>
              </tbody>
              <tfoot>
                  <tr>
                  <th>Country</th>
                  <th>Shipping Cost</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
    </section>