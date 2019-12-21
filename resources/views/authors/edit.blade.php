
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
            <h2>Author <small>Edit</small></h2>
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
            <form action="{{ route('authors.store',$author->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-9 col-sm-7 col-xs-12">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="title" class="col-sm-2 control-label">Name</label>
                            <div class="col-md-10 col-sm-12 col-xs-12">
                            <input type="text" value="{{$author->name}}" name="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="subtitle" class="col-md-2 control-label">Slug</label>
                            <div class="col-md-10 col-sm-12 col-xs-12">
                                <input type="text" value="{{$author->slug}}" name="slug" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="subtitle" class="col-md-2 control-label">BIO</label>
                            <div class="col-md-10 col-sm-12 col-xs-12">
                                <input type="text" value="{{$author->bio}}" name="bio" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="subtitle" class="col-md-2 control-label">Country</label>
                            <div class="col-md-10 col-sm-12 col-xs-12">
                                <select class="form-control select2-single" name="country_id" required>
                                    {{-- <option selected disabled>--Select Country--</option> --}}
                                    @php
                                        $selectedID = $author->country_id;
                                    @endphp
                                    @foreach($countries as $row)
                                        <option value="{{ $row->id }} {{ ( $row->id == $selectedID) ? 'selected' : '' }}">
                                            {{$row->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-6 col-sm-4 col-xs-12">
                            <label for="language" class="col-md-3 control-label">Language</label>
                            <div class="col-md-9 col-sm-12 col-xs-12">
                                <select class="form-control select2-single" name="language_id" required>
                                    {{-- <option selected disabled>--Select Language--</option> --}}
                                    @php
                                        $selectedID = $author->language_id;
                                    @endphp
                                    @foreach($languages as $row)
                                        <option value="{{ $row->id }} {{ ( $row->id == $selectedID) ? 'selected' : '' }}">
                                            {{$row->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="subtitle" class="col-md-4 control-label">Date of Birth</label>
                            <div class="col-md-8 col-sm-12 col-xs-12 xdisplay_inputx form-group has-feedback" >
                                <input type="text" value="{{$author->dateofbirth}}" name="dateofbirth" class="form-control" aria-describedby="inputSuccess2Status2" required>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-3 col-sm-5 col-xs-12 nav navbar-right panel_toolbox">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <img src="{{asset('Upload/author/'. $author->image)}}" class="" style="width: 100%">
                            <input type="file" value="{{$author->image}}" name="image" class="form-control-file mt-3">
                        </div>
                    </div>
                </div>  <!-- /.row -->
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('authors.index')}}" type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
            </form>
        </div>
    </div>


@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    </script>

@endsection
