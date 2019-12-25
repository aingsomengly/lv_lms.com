@extends('layouts.app')

@section('content')
<div class="x_panel">
  <div class="x_title">
      <h2>បញ្ចី​អ្នក​និពន្ធ<small>តារាង</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <button href="{{route('books.create')}}"  id="createauthor" class="btn btn-primary">
              <i class="fa fa-plus"></i>
              បន្ថែមអ្នក​និពន្ធ
          </button>
        </li>
      </ul>
      <div class="clearfix"></div>
  </div>
  <table width="100%" id="datatable-buttons" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>SL.</th>
        <th>រូប​ភាព</th>
        <th>​​ឈ្មោះ</th>
        <th>ប្រទេស</th>
        <th>ភាសា</th>
        <th>ប្រតិបត្តិ</th>
      </tr>
    </thead>
    <tbody>
      @foreach($authors as $key => $author)
      <tr>
        <th scope="row">{{++$key}}.</th>
        <td><img src="images/{{$author->image}}" alt="{{$author->title}}" class="rounded-circle" width="50px"></td>
        <td>{{$author->name}}</td>
        <td>{{$author->country->name}}</td>
        <td>{{$author->language->name}}</td>
        <td>
          <button type="button" class="btn btn-xs btn-info" data-id="{{$author->id}}" id="authorview"><i class="fa fa-eye"></i> មើល​លំអិត</button>
          <button type="button" class="btn btn-xs btn-warning" data-id="{{$author->id}}" id="authoredit"><i class="fa fa-pencil">​</i> កែ​តម្រូវ​</button>
          <button type="button" class="btn btn-xs btn-danger" data-id="{{$author->id}}" id="authordelete"><i class="fa fa-trash"></i> លុប</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="card-foter m-auto">
      {{ $authors->links() }}
  </div>
</div>

@include('authors.modals.createauthor')
@include('authors.modals.editauthor')
@include('authors.modals.viewauthor')
@include('authors.modals.deleteauthor')

@endsection


@section('script')
<script type="text/javascript">

  $(document).on('click', '#createauthor', function(e){
    $('#createauthormodal').modal('show');
  });

  // EDIT author
  $(document).on('click', '#authoredit', function(e){
    $('#authoreditmodal').modal('show');
    var author = $(this).data('id');
    $.get('authors/'+author+'/edit', function(data){
      $('#authoreditmodal form').attr('action', 'authors/'+data.author.id);
      $('#authoreditmodal #name').val(data.author.name);
      $('#authoreditmodal #dateofbirth').val(data.author.dateofbirth);
      $('#editauthorbio').summernote('code', data.author.bio);
      $('#authoreditmodal #authorimageeditpreview').attr('src','images/'+data.author.image);
      $('#authoreditmodal #authorimageeditpreview').attr('alt',data.author.title);

      $('#authoreditmodal #country').val(data.author.country_id);
      $('#authoreditmodal #country').trigger('change');

      $('#authoreditmodal #language').val(data.author.language_id);
      $('#authoreditmodal #language').trigger('change');
    });
  });

  // VIEW author
  $(document).on('click', '#authorview', function(e){
    $('#authorviewmodal').modal('show');
    var author = $(this).data('id');
    $.get('authors/'+author, function(data){
      $('#authorviewmodal #name').html(data.author.name);
      $('#authorviewmodal #country').html(data.author.country.name);
      $('#authorviewmodal #language').html(data.author.language.name);
      $('#authorviewmodal #dateofbirth').html(data.author.dateofbirth);
      $('#viewauthorbio').html(data.author.bio);
      $('#authorviewmodal #authorimageviewpreview').attr('src','images/'+data.author.image);
      $('#authorviewmodal #authorimageviewpreview').attr('alt',data.author.title);
    });
  });

  // DELETE author
  $(document).on('click', '#authordelete', function(e){
    e.preventDefault();
    var delbtntr = $(this).parents('tr');
    var author = $(this).data('id');
    $.get('authors/'+author, function(data){
        $('#authordeletemodal #name').html(data.author.name);
        $('#authordeletemodal button.btn-danger').attr('id','deleteauthor-'+data.author.id);
        $('#authordeletemodal').modal('show');
        $('#deleteauthor-'+data.author.id).on('click', function(e){
          $.ajax({
            type: "DELETE",
            url:'authors/'+data.author.id,
            data: data.author,
            success: function(data){
              delbtntr.remove();
              $('#authordeletemodal').modal('hide');
              toastr.success('Author deleted successfully.')
            },
            dataType: 'json'
          });
        });
      });
  });

  // SUMMERNOTE EDITOR
  $('#createauthorbio').summernote({
     placeholder: 'Author description goes here..',
     height: 200,
     focus: true,
     dialogsInBody: true,
  });
  $('.note-popover').css({'display': 'none'});


  // IMAGE UPLOAD PREVIEW
  function readURL(input, previewid) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $(previewid).attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#authorimageedit").change(function() {
    readURL(this, '#authorimageeditpreview');
  });
  $("#authorimagecreate").change(function() {
    readURL(this, '#authorimagecreatepreview');
  });

</script>
@endsection
