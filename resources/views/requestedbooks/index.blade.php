@extends('layouts.app')

@section('content')
<div class="x_panel">
  <div class="x_title">
      <h2>ស្នើរ​សុំ​​សៀវភៅ<small>តារាង</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <button href="{{route('requestedbooks.create')}}" id="requestedbook" class="btn btn-primary">
            បន្ថែមស្នើរ​សុំ​​សៀវភៅ
              <i class="fa fa-plus"></i>
              
          </button>
        </li>
      </ul>
      <div class="clearfix"></div>
  </div>
  <table width="100%" id="datatable-buttons" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>​លេខរៀន</th>
        <th>ស្នើរ​សុំ​​សៀវភៅ</th>

        @if(auth()->user()->role_id == 2 || auth()->user()->role_id == 1)
          <th>បាន​ស្នើរ​សុំដោយ</th>
        @endif

        <th>កាលបរិច្ឆេទស្នើសុំ</th>
        <th>កាលបរិច្ឆេទឆ្លើយតប</th>
        <th>ស្ថានភាព</th>
        <th>ស្ថានភាពចេញ</th>
        <th width="90px">ប្រត្តិបត្តិ</th>
      </tr>
    </thead>
    <tbody>
      @foreach($requestedbooks as $requestedbook)
      <tr>
        <th scope="row">{{$requestedbook->id}}.</th>
        <td>{{$requestedbook->book->title}}<em> by {{$requestedbook->book->author->name}}</em></td>

        @if(auth()->user()->role_id == 2 || auth()->user()->role_id == 1)
          <td>{{$requestedbook->user->name}} </td>
        @endif

        <td>{{ strtok($requestedbook->created_at,' ') }}</td>
        <td>{{$requestedbook->action_date or null}}</td>

        <td class="text-center">
          @if($requestedbook->status == 'pending')
            <span class="badge badge-warning">Pending</span>
          @elseif($requestedbook->status == 'accepted')
            <span class="badge badge-success">Accepted</span>
          @elseif($requestedbook->status == 'rejected')
            <span class="badge badge-danger">Rejected</span>
          @endif
        </td>

        <td>
          @if($requestedbook->issuedbook)
            @if($requestedbook->issuedbook->penalty_money || $requestedbook->status == 'accepted')
              <span class="badge badge-info">{{$requestedbook->issuedbook->status}}</span>
              <span class="badge badge-light">{{$requestedbook->issuedbook->penalty_money}} {{$currency}}</span>
            @elseif($requestedbook->status == 'pending')
              <span class="badge badge-warning">Pending</span>
            @elseif($requestedbook->status == 'rejected')
              <span class="badge badge-danger">Rejected</span>
            @endif
          @else
              @if($requestedbook->status == 'pending')
                <span class="badge badge-warning">Pending</span>
              @elseif($requestedbook->status == 'rejected')
                <span class="badge badge-danger">Rejected</span>
              @else
                <span class="badge badge-danger">removed</span>
              @endif
          @endif
        </td>

        <td>
          @if(auth()->user()->role_id == 2 || auth()->user()->role_id == 1)
            <button type="button" class="btn btn-xs btn-warning" data-id="{{$requestedbook->id}}" id="requestedbookedit"><i class="fa fa-pencil"></i> កែ​តម្រូវ</button>
          @endif

          @if(auth()->user()->role_id == 3 && $requestedbook->status == 'accepted')
              <button type="button" class="btn btn-xs btn-danger" disabled><i class="fa fa-trash"></i>​ លុប​</button>
          @else
              <button type="button" class="btn btn-xs btn-danger" data-id="{{$requestedbook->id}}" id="requestedbookdelete"><i class="fa fa-trash"></i> លុប</button>
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="card-foter m-auto">
      {{ $requestedbooks->links() }}
  </div>
</div>

@include('requestedbooks.modals.create')
@include('requestedbooks.modals.edit')
@include('requestedbooks.modals.delete')

@endsection

@section('script')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
<script type="text/javascript">
      $('.js-example-basic-single').select2();
   //Autocomplete
  //  $(document).ready(function(){

  //   $('#book_id').keyup(function(){ 
  //         var query = $(this).val();
  //         if(query != '')
  //         {
  //           var _token = $('input[name="_token"]').val();
  //           $.ajax({
  //           url:"{{ route('requestedbooks.fetch') }}",
  //           method:"POST",
  //           data:{query:query, _token:_token},
  //           success:function(data){
  //             $('#booklist').fadeIn();  
  //                     $('#booklist').html(data);
  //           }
  //           });
  //         }
  //     });

  //     $(document).on('click', 'li', function(){  
  //         $('#book_id').val($(this).text());  
  //         $('#booklist').fadeOut();  
  //     });  

  // });

  //ADD
  $(document).on('click', '#requestedbook', function(e){
    $('#requestedbookmodal').modal('show');
  });

  // EDIT
  $(document).on('click', '#requestedbookedit', function(e){
    $('#requestedbookeditmodal').modal('show');
    var id = $(this).data('id');
    $.get('requestedbooks/'+id+'/edit', function(data){
      $('#requestedbookeditmodal form').attr('action','requestedbooks/'+data.requestedbook.id);
      $('#requestedbookeditmodal #bookid').val(data.requestedbook.book_id);
      $('#requestedbookeditmodal #bookid').trigger('change');
      $('#requestedbookeditmodal #userid').val(data.requestedbook.user_id);
      $('#requestedbookeditmodal #userid').trigger('change');
      $('#requestedbookeditmodal #editstatus').val(data.requestedbook.status);
    });
  });

  // DELETE
  $(document).on('click', '#requestedbookdelete', function(e){
    e.preventDefault();
    var delbtntr = $(this).parents('tr');
    var id = $(this).data('id');
    $.get('requestedbooks/'+id, function(data){
        $('#requestedbookdeletemodal #name').html(data.requestedbook.book.title);
        $('#requestedbookdeletemodal button.btn-danger').attr('id','delete-'+data.requestedbook.id);
        $('#requestedbookdeletemodal').modal('show');
        $('#delete-'+data.requestedbook.id).on('click', function(e){
          $.ajax({
            type: "DELETE",
            url:'requestedbooks/'+data.requestedbook.id,
            data: data.requestedbook,
            success: function(data){
              delbtntr.remove();
              $('#requestedbookdeletemodal').modal('hide');
              toastr.success('Requested book deleted successfully.')
            },
            dataType: 'json'
          });
       });
    });
  });

</script>


@endsection
