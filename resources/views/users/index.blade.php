<?php echo'hello'?>
{{-- @extends('layouts.admin')
@section('content')
<div class="row">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{$message}}</strong>
    </div>
    @endif
</div>
<div class="x_panel">
    <div class="x_title">
        <h2>បញ្ចី​សៀវ​ភៅ<small>តារាង</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="{{route('books.create')}}" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                បន្ថែម​សៀវភៅ
            </a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <table width="100%" id="datatable-buttons" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>
            <th><input type="checkbox" id="check-all" class="flat"></th>
        </th>
        <th>លេខសំគាល់</th>
        <th>ចំ​ណង​ជើង</th>
        <th>​រូបភាព</th>
        <th>ចំ​ណង​ជើង​តូច</th>
        <th>ភាសា</th>
        <th>លេខ ISBN</th>
        <th>ការចង</th>
        <th>តម្លែ</th>
        <th>​ប្រភេទ</th>
        <th>​សកម្មភាព</th>
      </tr>
    </thead>
    <tbody>
        @foreach($books as $row)
            <tr>
                <th>
                    <th><input type="checkbox" id="check-all" class="flat"></th>
                </th>
                <td>{{$row->id}}</td>
                <td>{{$row->title}}</td>
                <td>
                    <img width="60px" src="{{asset('Upload/books/'. $row->image)}}">
                </td>
                <td>{{$row->subtitle}}</td>
                <th>{{$row->language->name}}</th>
                <td>{{$row->ISBN}}</td>
                <td>{{$row->binding}}</td>
                <td>{{$row->price}}</td>
                <td>
                    @foreach ($row->genres as $genre)
                        <span class="label label-primary">
                            {{$genre->name}}
                        </span>
                    @endforeach
                </td>
                <td>
                    <form action="{{route('books.destroy',$row->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                        <button type="button" class="btn btn-xs btn-danger" data-dismiss="modal">
                           លុប​
                        </button>
                    </form>
                    <a href="{{route('books.edit', $row->id)}}" class="btn btn-info btn-xs btn-primary">
                        <i class="fa fa-pencil"></i>
                        កែ​តម្រូវ
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection --}}
