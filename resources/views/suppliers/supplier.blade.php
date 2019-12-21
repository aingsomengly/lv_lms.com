  <?php
    include_once'includes/header.php';
    include_once'includes/leftmenus.php';
    include_once'includes/navbar.php';
  ?>

  <!-- Add -->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="x_title">
            <h2>Add</h2>
            <div class="clearfix"></div>
          </div>
            <br>
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
           
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Last Name:
              </label>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">First Name:
            </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12">Gender:</label>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div id="gender" class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="male" data-parsley-multiple="gender"> &nbsp; Male &nbsp;
                    </label>
                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="female" data-parsley-multiple="gender"> Female
                    </label>
                  </div>
                </div>
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Join Authors:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Book:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Newpaper:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Magazine:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Address:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Contact No:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Email ID:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Remarks:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">
            </div>
 
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="reset">Reset</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Add -->

  <!-- Delete -->
  <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="x_title">
            <h2>Delete Supplier</h2>
            <div class="clearfix"></div>
          </div>
            <p>Are sure? Delete</p>
            <div class="ln_solid"></div>
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Delete -->

  <!-- Edit -->
  <div class="modal fade bs-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="x_title">
            <h2>Edit Supplier</h2>
            <div class="clearfix"></div>
          </div>
            <br>
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
           
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Last Name:
              </label>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">First Name:
            </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12">Gender:</label>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div id="gender" class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="male" data-parsley-multiple="gender"> &nbsp; Male &nbsp;
                    </label>
                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="female" data-parsley-multiple="gender"> Female
                    </label>
                  </div>
                </div>
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Join Authors:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Book:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Newpaper:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Magazine:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Address:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Contact No:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Email ID:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Remarks:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">
            </div>
 
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="reset">Reset</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Edit -->
      
        <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Supplier<small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <button type="button" class="btn btn-primary fa  fa-plus-square
" data-toggle="modal" data-target=".bs-example-modal-lg"> Add </button>

                  <!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li> -->
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <!-- <p class="text-muted font-13 m-b-30">
                  The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                </p> -->
                
              <table id="datatable-buttons" class="table table-striped table-bordered">
                <!-- Large modal -->                  
                <thead>
                  <tr>
                    <th>
                     <th><input type="checkbox" id="check-all" class="flat"></th>
                    </th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Borrow Type ID</th>
                    <th>Action</th>
                    <!-- <th>language</th>
                    <th>price</th> -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>
                     <th><input type="checkbox" id="check-all" class="flat"></th>
                    </th>
                    <td>borrower_id</td>
                    <td>borrower_name></td>
                    <td>borrow_type_id</td>
                    <td>
                      <a href="#" class="btn btn-danger btn-xs"
                        class="btn btn-primary fa fa-plus-square
                        " data-toggle="modal" data-target=".bs-example-modal-lg2">
                        <i class="fa fa-trash-o"></i> 
                          Delete 
                        </a>
                      <a href="#" class="btn btn-info btn-xs class="btn btn-primary fa fa-plus-square
                        " data-toggle="modal" data-target=".bs-example-modal-lg3"">
                        <i class="fa fa-pencil"></i> 
                        Edit 
                      </a>
                    <!-- <td><?php //echo $row['language'];?></td>
                    <td><?php //echo $row['price'];?></td> -->
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <!-- /page content -->
  <?php
    include_once'includes/footer.php';
  ?>

