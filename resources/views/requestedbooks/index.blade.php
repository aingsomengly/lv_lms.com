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
        <h2>Books <small>Lists</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a> --}}
            <a href="{{route('requestedbooks.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Book</a>
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
    <table id="datatable-buttons" width="100%" class="table table-striped table-bordered">
    <!-- Large modal -->
        <thead>
        <tr>
            <th>
            <th><input type="checkbox" id="check-all" class="flat"></th>
            </th>
            <th>ID</th>
            <th>Book</th>
            <th>User</th>
            <th>Issued Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

            @foreach($requestedbooks as $row)
            <tr>
                <th>
                <th><input type="checkbox" id="check-all" class="flat"></th>
                </th>
                <td>{{$row->id}}</td>
                <td>{{$row->book->title}}</td>
                <td>{{$row->user->name}}</td>
                <td>{{$row->status}}</td>
                <td>{{$row->action_date}}</td>
                <td>
                    <a href="#" class="btn btn-danger btn-xs"
                        class="btn btn-primary fa fa-plus-square
                        " data-toggle="modal" data-target=".bs-example-modal-lg2">
                        <i class="fa fa-trash-o"></i>
                        Delete
                        </a>
                    <a href="{{route('requestedbooks.edit', $row->id)}}" class="btn btn-info btn-xs" class="btn btn-primary fa fa-plus-square">
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
