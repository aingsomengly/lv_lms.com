@extends('layouts.admin')

@section('content')
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="x_title">
            <h2>Add User</h2>
            <div class="clearfix"></div>
          </div>
            <br>
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif --}}
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                {{-- {{ csrf_field() }} --}}
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">User Name:
              </label>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Email:
            </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">password:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Level:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
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
    <div class="modal-dialog modal-ms" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="x_title">
            <h2>Delete User</h2>
            <div class="clearfix"></div>
          </div>
          <p>Are sure? Delete</p>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
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
            <h2>Edit User</h2>
            <div class="clearfix"></div>
          </div>
            <br>
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">User Name:
              </label>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Email:
            </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="email" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">password:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Level:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
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
      <div class="">
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>User<small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <button type="button" class="btn btn-primary fa  fa-plus-square
" data-toggle="modal" data-target=".bs-example-modal-lg"> Add User</button>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
              <table id="datatable-buttons" class="table table-striped table-bordered">
                <!-- Large modal -->
                <thead>
                  <tr>
                    <th>
                     <th><input type="checkbox" id="check-all" class="flat"></th>
                    </th>
                    <th>User id</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Action</th>
                    <!-- <th>language</th>
                    <th>price</th> -->
                  </tr>
                </thead>
                <tbody>
                        @foreach ($data['users'] as $user)
                  <tr>
                    <th>
                     <th><input type="checkbox" id="check-all" class="flat"></th>
                    </th>
                    <th>{{$user->id}}</th>
                    <th><img src="{{$user->photo}}" width="25px"></th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th>{{$user->created_at}}</th>
                    {{-- <th></th> --}}
                    <td>
                      <a href="#" class="btn btn-danger btn-xs"
                        class="btn btn-primary fa fa-plus-square
                        " data-toggle="modal" data-target=".bs-example-modal-lg2">
                        <i class="fa fa-trash-o"></i>
                          Delete
                      </a>
                      <a href="#" class="btn btn-info btn-xs class="btn btn-primary fa fa-plus-square
                        " data-toggle="modal" data-target=".bs-example-modal-lg3">
                        <i class="fa fa-pencil"></i>
                        Edit
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
        <!-- /page content -->
@endsection
