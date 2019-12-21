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
            <h2>Genre Book<small>Edit</small></h2>
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
            <form action="{{ route('genres.update', $genre->id) }}" method="post" class="form-horizontal form-label-right">
                {{ csrf_field() }}
                {{ method_field('PUT')}}
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="subtitle" class="col-md-3 control-label">Genre Name</label>
                            <div class="col-md-9 col-sm-12 col-xs-12">
                                <input type="text" value="{{$genre->name}}" name="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="subtitle" class="col-md-3 control-label">Slug</label>
                            <div class="col-md-9 col-sm-12 col-xs-12" >
                                <input type="text" value="{{$genre->slug}}" name="slug" class="form-control" aria-describedby="inputSuccess2Status2" required>
                            </div>
                        </div>

                    </div>
                </div>  <!-- /.row -->
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('genres.index')}}" type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
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
