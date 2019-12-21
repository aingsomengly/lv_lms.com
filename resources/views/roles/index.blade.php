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
        <h2>តំណែង<small>តារាង</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a> --}}
            <a href="{{route('roles.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> បន្ថែម តំណែង</a>
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
            <th>លេខ​សំគាល់</th>
            <th>ឈ្មោះ</th>
            <th>ពិពណ៌នា</th>
            <th>សកម្មភាព</th>
        </tr>
        </thead>
        <tbody>

            @foreach($roles as $row)
            <tr>
                <th>
                <th><input type="checkbox" id="check-all" class="flat"></th>
                </th>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->description}}</td>
                <td>
                    <a href="#" class="btn btn-danger btn-xs"
                        class="btn btn-primary fa fa-plus-square
                        " data-toggle="modal" data-target=".bs-example-modal-lg2">
                        <i class="fa fa-trash-o"></i>
                        Delete
                        </a>
                    <a href="{{route('roles.edit', $row->id)}}" class="btn btn-info btn-xs" class="btn btn-primary fa fa-plus-square">
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

{{-- @extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
        <div class="pull-right">
        @can('role-create')
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
            @endcan
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>


{!! $roles->render() !!}

<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection --}}
