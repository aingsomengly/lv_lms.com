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
            <h2>តំណែង<small>កែ​តម្រូវ</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form action="{{ route('roles.store') }}" method="post" class="form-horizontal form-label-right">
                @csrf
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="subtitle" class="col-md-2 control-label">​តំណែង</label>
                            <div class="col-md-10 col-sm-12 col-xs-12">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="subtitle" class="col-md-1 control-label">Slug</label>
                            <div class="col-md-11 col-sm-12 col-xs-12" >
                                <input type="text" name="slug" class="form-control" aria-describedby="inputSuccess2Status2" required>
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <label for="subtitle" class="col-md-1 control-label">ពិពណ៌នា</label>
                            <div class="col-md-11 col-sm-12 col-xs-12">
                                <textarea ​name="description" class="form-control" aria-describedby="inputSuccess2Status2" required>
                                </textarea>
                            </div>
                        </div>

                    </div>
                </div>  <!-- /.row -->
                    <button type="submit" class="btn btn-primary">បន្ថែម​</button>
                    <a href="{{route('roles.index')}}" type="button" class="btn btn-secondary" data-dismiss="modal">ថយ​ក្រោយ</a>
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
