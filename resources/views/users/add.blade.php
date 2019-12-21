
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
                <h2>Books <small>Add</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                  </li>
                </ul>
                <div class="clearfix"></div>
            </div>
              <div class="x_content">
                <form action="{{ route('books.store') }}" method="post" class="form-horizontal form-label-right" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                            <div class="col-md-9 col-sm-7 col-xs-12">

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <label for="title" class="col-sm-2 control-label">Title</label>
                                    <div class="col-md-10 col-sm-12 col-xs-12">
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <label for="subtitle" class="col-md-2 control-label">Subtitle</label>
                                    <div class="col-md-10 col-sm-12 col-xs-12">
                                        <input type="text" name="subtitle" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <label for="ISBN" class="col-sm-2 control-label">ISBN</label>
                                    <div class="col-md-10 col-sm-12 col-xs-12">
                                        <input type="number" name="ISBN" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <label for="series" class="col-sm-2 control-label">Series</label>
                                    <div class="col-md-10 col-sm-12 col-xs-12">
                                        <select class="form-control select2-single" name="series_id" required>
                                            <option selected disabled>-Select Series-</option>
                                            @foreach ($allseries as $row)
                                            <option value="{{ $row->id }}">
                                                {{ $row->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <label for="publisher" class="col-sm-2 control-label">Publisher</label>
                                    <div class="col-md-10 col-sm-12 col-xs-12">
                                        <select class="form-control select2-single" name="publisher_id" required>
                                            <option selected disabled>-Select Publisher-</option>
                                            @foreach ($publishers as $row)
                                            <option value="{{ $row->id }}">
                                                {{ $row->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <label for="author" class="col-sm-2 control-label">Author</label>
                                    <div class="col-md-10 col-sm-12 col-xs-12">
                                        <select class="form-control select2-single" name="author_id" id="author" required>
                                            @foreach($authors as $row)
                                            <option selected disabled>-Select Author-</option>
                                            <option value="{{ $row->id }}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-sm-4 col-xs-12">
                                    <label for="genre" class="col-sm-2 control-label">Genre</label>
                                    <div class="col-md-10 col-sm-12 col-xs-12">
                                        <select style="width:100%" class="js-example-basic-single" name="genre_id[]" multiple="multiple" required>
                                            @foreach ($genres as $row)
                                                <option value="{{ $row->id }}">
                                                    {{$row->name}}
                                                </option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-sm-4 col-xs-12">
                                    <label for="edition" class="col-sm-2 control-label">Edition</label>
                                    <div class="col-md-10 col-sm-12 col-xs-12">
                                        <input type="text" name="edition" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-sm-4 col-xs-12">
                                    <label for="published_year" class="col-sm-2 control-label">Year</label>
                                    <div class="col-md-10 col-sm-12 col-xs-12">
                                        <input type="number" name="published_year" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-sm-4 col-xs-12">
                                    <label for="pages" class="col-sm-2 control-label">Pages</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="pages" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-sm-4 col-xs-12">
                                    <label for="binding" class="col-sm-2 control-label">Binding</label>
                                    <div class="col-md-10 col-sm-12 col-xs-12">
                                        <select class="form-control" name="binding" required>
                                        <option selected disabled>-Select Binding-</option>
                                        <option>Softcover</option>
                                        <option>Hardcover</option>
                                        <option>Paperback</option>
                                        </select>
                                    </div>
                                </div>
                        </div>

                        <div class="col-md-3 col-sm-5 col-xs-12 nav navbar-right panel_toolbox">
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <img class="" style="width: 100%">
                                <input type="file" name="image" class="form-control-file mt-3" required>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-7 col-xs-12">

                            <div class="form-group col-md-3 col-sm-4 col-xs-12">
                                <label for="quantity" class="col-md-3 control-label">Quantity</label>
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <input type="number" name="quantity" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                <label for="price" class="col-sm-2 control-label">Price</label>
                                <div class="col-md-10 col-sm-12 col-xs-12">
                                    <input type="number" name="price" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group col-md-5 col-sm-4 col-xs-12">
                                <label for="language" class="col-md-3 control-label">Language</label>
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <select class="form-control select2-single" name="language_id" id="language" required>
                                        @foreach($languages as $language)
                                            <option value="{{$language->id}}">
                                                {{$language->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <label for="description" class="col-md-1 control-label">Descript</label>
                                    <div class="col-md-11 col-sm-12 col-xs-12">
                                        <textarea name="description" class="form-control" required></textarea>
                                    </div>
                                </div>
                            </div>


                    </div>  <!-- /.row -->

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{route('books.index')}}" type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
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
