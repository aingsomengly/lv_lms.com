@extends('layouts.admin')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
  </ul>
</div><br />
@endif
    <div class="x_panel">
        <div class="x_title">
            <h2>Issue Book<small>Edit</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
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
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form action="{{ route('issuedbooks.store') }}" method="post" class="form-horizontal form-label-right">
                @csrf
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <label for="language" class="col-md-2  control-label">User</label>
                            <div class="col-md-10 col-sm-12 col-xs-12">
                                <select class="form-control select2-single" name="user_id" id="language" required>
                                    @foreach($users as $row)
                                        <option value="{{$row->id}}">
                                            {{$row->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <label for="language" class="col-md-2 control-label">Books</label>
                            <div class="col-md-10 col-sm-12 col-xs-12">
                                <select class="form-control select2-single" name="user_id" id="language" required>
                                    @foreach($books as $row)
                                        <option value="{{$row->id}}">
                                            {{$row->title}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <label for="subtitle" class="col-md-4 control-label">Issue Date</label>
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <input type="text" name="issued_date" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <label for="subtitle" class="col-md-4 control-label">Expiry Date</label>
                            <div class="col-md-8 col-sm-12 col-xs-12" >
                                <input type="text" name="expiry_date" class="form-control" aria-describedby="inputSuccess2Status2" required>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <label for="subtitle" class="col-md-4 control-label">Return Date</label>
                            <div class="col-md-8 col-sm-12 col-xs-12 xdisplay_inputx form-group has-feedback" >
                                <input type="text" name="return_date" class="form-control" aria-describedby="inputSuccess2Status2" required>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <label for="subtitle" class="col-md-5 control-label">Penalty Money</label>
                            <div class="col-md-7 col-sm-12 col-xs-12 xdisplay_inputx form-group has-feedback" >
                                <input type="text" name="penalty_money" class="form-control" aria-describedby="inputSuccess2Status2" required>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <label for="subtitle" class="col-md-2 control-label">Status</label>
                            <div class="col-md-10 col-sm-12 col-xs-12">
                                <input type="text" name="status" class="form-control" required>
                            </div>
                        </div>

                    </div>
                </div>  <!-- /.row -->
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a href="{{route('issuedbooks.index')}}" type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
            </form>
        </div>
    </div>


@endsection
@section('js')

<script src="{{ asset('admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    </script>

@endsection
