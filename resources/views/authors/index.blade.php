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
    <table id="datatable-buttons" class="table table-striped table-bordered">
    <!-- Large modal -->
    <a href="{{route('authors.create')}}" class="btn btn-primary">Add</a>
    <thead>
      <tr>
        <th>
         <th><input type="checkbox" id="check-all" class="flat"></th>
        </th>
        <th>ID</th>
        <th>​​រូបភាព</th>
        <th>​ឈ្មោះ</th>
        <th>Slug</th>
        <th>BIO</th>
        <th>ប្រ​ទេស</th>
        <th>ភាសា</th>
        <th>​​ថ្ងៃ​ទីខែ​ឆ្នាំ​ កំណើត</th>
        <th>សកម្មភាព</th>
      </tr>
    </thead>
    <tbody>

        @foreach($authors as $row)
        <tr>
            <th>
             <th><input type="checkbox" id="check-all" class="flat"></th>
            </th>
            <td>{{$row->id}}</td>
            <td><img width="80px" src="{{asset('Upload/author/'. $row->image)}}"</td>
            <td>{{$row->name}}</td>
            <td>{{$row->slug}}</td>
            <td>{{$row->bio}}</td>
            <td>{{$row->country->name}}</td>
            <td>{{$row->language->name}}</td>
            <td>{{$row->dateofbirth}}</td>
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
                <form action="{{route('author.destroy',$row->id)}}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
                </form>
                <a href="{{route('authors.edit', $row->id)}}" data-target="#deleteAuthorModal" data-author_id="{{$row->id}}" class="btn btn-primary btn-xs" class="btn btn-primary">
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
