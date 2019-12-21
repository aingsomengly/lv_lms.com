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
    <table width="100%" id="datatable-buttons" class="table table-striped table-bordered">
    <!-- Large modal -->
        <a href="{{route('issuedbooks.create')}}" class="btn btn-primary">Add</a>
        <thead>
        <tr>
            <th>
            <th><input type="checkbox" id="check-all" class="flat"></th>
            </th>
            <th>ID</th>
            <th>Book</th>
            <th>User</th>
            <th>Issued Date</th>
            <th>Expiry Date</th>
            <th>Return Date</th>
            <th>Penalty Money</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

            @foreach($issuedbooks as $row)
            <tr>
                <th>
                <th><input type="checkbox" id="check-all" class="flat"></th>
                </th>
                <td>{{$row->id}}</td>
                <td>{{$row->book->title}}</td>
                <td>{{$row->user->name}}</td>
                <td>{{$row->issued_date}}</td>
                <td>{{$row->expiry_date}}</td>
                <td>{{$row->return_date}}</td>
                <td>{{$row->penalty_money}}</td>
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
                    <a href="#" class="btn btn-danger btn-xs"
                        class="btn btn-primary fa fa-plus-square
                        " data-toggle="modal" data-target=".bs-example-modal-lg2">
                        <i class="fa fa-trash-o"></i>
                        Delete
                        </a>
                    <a href="{{route('issuedbooks.edit', $row->id)}}" class="btn btn-info btn-xs" class="btn btn-primary fa fa-plus-square">
                        <i class="fa fa-pencil"></i>
                        Edit
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
