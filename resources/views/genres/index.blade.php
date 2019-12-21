@extends('layouts.admin')
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
        <h2>Genre Book<small>Lists</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a> --}}
            <a href="{{route('genres.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Book</a>
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
    <!-- Large modal -->

    <table id="datatable-buttons" width="100%" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>
            <th><input type="checkbox" id="check-all" class="flat"></th>
            </th>
            <th>ID</th>
            <th>Genre Name</th>
            <th>Slug</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

            @foreach($genres as $row)
            <tr>
                <th>
                <th><input type="checkbox" id="check-all" class="flat"></th>
                </th>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->slug}}</td>
                {{-- <td>{{$row->issued_date}}</td>
                <td>{{$row->expiry_date}}</td>
                <td>{{$row->return_date}}</td>
                <td>{{$row->penalty_money}}</td> --}}
                {{--  <td>
                    @foreach ($row->genres as $genre)
                    <span class="label label-primary">
                        {{$genre->name}}
                    </span>
                    @endforeach
                </td>  --}}
                {{--  <td>  --}}

                    {{-- @php
                        $users = App\User::where('id', $borrow->id)->get('name');
                    @endphp

                    @foreach ($users as $user)
                        {{$user->name}}
                    @endforeach --}}

                    {{--  @php
                        $students = App\Models\Student::where('id', $borrow->id)->get('name');
                    @endphp

                    @foreach ($students as $student)
                        {{$student->name}}
                    @endforeach  --}}
                    {{--  </td>  --}}
                {{--  <td>{{$borrow->staff_id}}</td>  --}}
                <td>
                    <form action="{{route('genres.destroy',$row->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-xs btn-danger" data-dismiss="modal">
                           លុប​
                        </button>
                    </form>
                    <a href="{{route('genres.edit', $row->id)}}" class="btn btn-info btn-xs" class="btn btn-primary fa fa-plus-square">
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
@endsection
