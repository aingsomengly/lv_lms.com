@extends('layouts.admin')

@section('content')
    <!-- Form Add Student -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="x_title">
                        <h2>Add Student</h2>
                        <div class="clearfix"></div>
                    </div>
                    <br>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif

                    <form action="{{ route('students.store') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        {{ csrf_field() }}

                        <div class="form-group input-group col-md-12 col-sm-12 col-xs-12">
                            <span class="has-float-label">
                                <input name="enrollment_no" class="form-control" id="first" required type="text" placeholder="Enrollment N"/>
                                <label for="Enrollment">Enrollment No</label>
                            </span>
                            <label class="has-float-label">
                                <input name="u_id" class="form-control" type="text" required placeholder="User ID"/>
                                <label>User ID</label>
                            </label>
                            <span class="has-float-label">
                                <input name="name" class="form-control" id="first" required type="text" placeholder="Name"/>
                                <label for="Name">Name</label>
                            </span>
                        </div>

                        <div class="form-group input-group col-md-12 col-sm-12 col-xs-12">
                            <span class="has-float-label">
                                <input name="gender" class="form-control" id="first" required type="text" placeholder="Name"/>
                                <label for="first">Gender</label>
                            </span>
                                    <label class="has-float-label">
                                    <input name="father_name" class="form-control" type="text" required placeholder="Surname"/>
                                    <span>Father Name</span>
                                </label>
                        </div>
                        <div class="form-group input-group col-md-6 col-sm-12 col-xs-12">
                            <span class="has-float-label">
                                <input name="mother_name" class="form-control" id="first" required type="text" placeholder="Name"/>
                                <label for="first">Mother Name</label>
                            </span>
                                <label class="has-float-label">
                                <input name="father_cn" class="form-control" type="text" required placeholder="Surname"/>
                                <span>Father CN</span>
                            </label>
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
            <h2>Delete Student<small>student</small></h2>
            <div class="clearfix"></div>
          </div>
              <p>are you sure? Delete</p>
              <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Delete</button>
              {{-- <form type="button" class="btn btn-primary action="{{ route('students.destroy', $student->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
              </form> --}}
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
            <h2>Edit Student</h2>
            <div class="clearfix"></div>
          </div>
            <br>
            @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
             <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
          {{-- <form method="post" action="{{ route('students.update', $student->id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> --}}
                @csrf
                @method('PATCH')
            {{-- <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" >Enrollment No:
              </label>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <input name="enrollment_no" value="{{$student->enrollment_no}}"  type="text" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">UID:
            </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input  name="u_id" value="{{$student->u_id}}"  type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div> --}}

            {{-- <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12">Student Name:</label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
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
            </div>

            {<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Document</title>
            </head>
            <body>

            </body>
            </html><div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">father Name:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>

              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Mother Name:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Father Contact Number:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>

              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Parmanent Addr:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Temporary Addr:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>

              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Contact No:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Email ID:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">DOB:
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div> --}}

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
                <h2>Student<small>Users</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
              <table id="datatable-buttons" class="table table-striped table-bordered">
                <!-- Large modal -->
                <thead>
                  <tr>
                    <th>
                     <th><input type="checkbox" id="check-all" class="flat"></th>
                    </th>
                    <th>ID</th>
                    <th>Enrollment No</th>
                    <th>Student Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Create At</th>
                    <th><button type="button" class="btn btn-primary fa fa-plus-square
                        " data-toggle="modal" data-target=".bs-example-modal-lg">
                        Add Student
                    </button>
                    </th>
                    <!-- <th>language</th>
                    <th>price</th> -->
                  </tr>
                </thead>
                <tbody>
                        @foreach ($data['students'] as $student)
                  <tr>
                    <th>
                     <th><input type="checkbox" id="check-all" class="flat"></th>
                    </th>
                    <th>{{$student->id}}</th>
                    <th>{{$student->enrollment_no}}</th>
                    <th>{{$student->name}}</th>
                    <th>{{$student->gender}}</th>
                    <th>{{$student->dob}}</th>
                    <th>{{$student->created_at}}</th>
                    <td>
                      {{-- <a href="#" class="btn btn-danger btn-xs"
                        class="btn btn-primary fa fa-plus-square
                        " data-toggle="modal" data-target=".bs-example-modal-lg2">
                        <i class="fa fa-trash-o"></i>
                          Delete
                      </a> --}}
                      <a href="{{ route('students.destroy',$student->id)}}">
                        <form action="{{ route('students.destroy', $student->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            @can('product-delete')
                            <button
                                class="btn btn-danger btn-xs class="btn btn-r fa fa-trash-o
                                {{-- data-toggle="modal" data-target=".bs-example-modal-lg2" --}}
                                type="submit">
                                <i class="fa fa-trash"></i>
                                Delete
                            </button>
                            @endcan
                        </form>
                      </a>
                      @can('product-edit')
                      <a href="{{ route('students.edit',$student->id)}}" type="button" class="
                        btn btn-info btn-xs class="btn btn-primary fa fa-plus-square
                        {{-- data-toggle="modal" data-target=".bs-example-modal-lg3" --}}
                         >
                        <i class="fa fa-pencil"></i>
                        Edit
                      </a>
                      @endcan

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
