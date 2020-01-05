@extends('layouts.app')

@section('content')
  <div class="x_panel">
    <div class="x_title">
        <h2>បញ្ចី​​ប្រភេទ<small>តារាង</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li>
            <button href="{{route('books.create')}}"  id="creategenre" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                បន្ថែម​ប្រភេទ
            </button>
          </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <table width="100%" id="datatable-buttons" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>SL.</th>
          <th>ឈ្មោះ​</th>
          <th>Slug</th>
          <th>ប្រ​តិ​បត្តិ</th>
        </tr>
      </thead>
      <tbody>
        @foreach($genres as $genre)
        <tr>
          <th scope="row">{{$genre->id}}.</th>
          <td>{{$genre->name}}</td>
          <td>{{$genre->slug}}</td>
          <td>
            <button type="button" class="btn btn-xs btn-info" data-id="{{$genre->id}}" id="genreview"><i class="fa fa-eye"></i> ​មើល​លំអិត</button>
            <button type="button" class="btn btn-xs btn-warning" data-id="{{$genre->id}}" id="genreedit"><i class="fa fa-pencil"></i> កែ​តម្រូវ</button>
            <button type="button" class="btn btn-xs btn-danger" data-id="{{$genre->id}}" id="genredelete"><i class="fa fa-trash"></i> ​លុប</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="card-foter m-auto">
        {{ $genres->links() }}
    </div>
  </div>

@include('genres.modals.creategenre')
@include('genres.modals.editgenre')
@include('genres.modals.viewgenre')
@include('genres.modals.deletegenre')

@endsection


@section('script')
<script type="text/javascript">

  $(document).on('click', '#creategenre', function(e){
    $('#creategenremodal').modal('show');
  });

  // EDIT genre
  $(document).on('click', '#genreedit', function(e){
    $('#genreeditmodal').modal('show');
    var genre = $(this).data('id');
    $.get('genres/'+genre+'/edit', function(data){
      $('#genreeditmodal form').attr('action','genres/'+data.genre.id);
      $('#genreeditmodal #name').val(data.genre.name);
    });
  });

  // VIEW genre
  $(document).on('click', '#genreview', function(e){
    $('#genreviewmodal').modal('show');
    var genre = $(this).data('id');
    $.get('genres/'+genre, function(data){
      $('#genreviewmodal #name').html(data.genre.name);
    });
  });

  // DELETE genre
  $(document).on('click', '#genredelete', function(e){
    e.preventDefault();
    var delbtntr = $(this).parents('tr');
    var genre = $(this).data('id');
    $.get('genres/'+genre, function(data){
        $('#genredeletemodal #name').html(data.genre.name);
        $('#genredeletemodal button.btn-danger').attr('id','deletegenre-'+data.genre.id);
        $('#genredeletemodal').modal('show');
        $('#deletegenre-'+data.genre.id).on('click', function(e){
          $.ajax({
            type: "DELETE",
            url:'genres/'+data.genre.id,
            data: data.genre,
            success: function(data){
              delbtntr.remove();
              $('#genredeletemodal').modal('hide');
            },
            dataType: 'json'
          });
        });
      });
  });


</script>
@endsection
