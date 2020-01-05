@extends('layouts.app')

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
        <h3>កិច្ចការ​សៀវ​ភៅ<small>តារាង</small></h3>
        <ul class="nav navbar-right panel_toolbox">
          <li>
            <button href="{{route('books.create')}}"  id="issuebook" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                បន្ថែម​កិច្ចការ​សៀវ​ភៅ
            </button>
          </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <table width="100%" id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>លេខ​រៀង</th>
            <th>សៀវ​ភៅ</th>
            <th>សមាជិក</th>
            <th>Issued Date</th>
            <th>ការ​ផុត​កំណត់ បរិច្ឆេទ</th>
            <th>ថ្ងៃ​ដែល​នៅ​សល់</th>
            <th>កាលបរិច្ឆេទ ត្រឡប់មកវិញ</th>
            <th>ការពិន័យ ({{ $currency }})</th>
            <th>ស្ថានភាព</th>
            <th width="90px">ប្រតិបត្តិ</th>
          </tr>
        </thead>
        <tbody>
          @php
            $status_arr = array();
          @endphp

          @foreach($issuedbooks as $issuedbook)
          @php
            $today  = date_create(date("Y-m-d"));
            $expiry = date_create($issuedbook->expiry_date);
            $diff   = date_diff($today,$expiry);
            $remain = $diff->format("%R%a days");
            $status = (int)$diff->format("%R%a");

            array_push($status_arr, array($issuedbook->id, $issuedbook->status, $status));

            $retu_d = date_create($issuedbook->return_date);
            $diff_r = date_diff($retu_d,$expiry);
            $retu_r = $diff_r->format("%R%a days");

          @endphp
          <tr>
            <th scope="row">{{$issuedbook->id}}.</th>
            <td>{{$issuedbook->book->title}} <em>by {{$issuedbook->book->author->name}}</em></td>
            <td>{{$issuedbook->user->name}}</td>
            <td>{{$issuedbook->issued_date}}</td>
            <td>{{$issuedbook->expiry_date}}</td>
            <td>
              @if($issuedbook->status == 'borrowed' || $issuedbook->status == 'late')
                <span>{{ $remain }}</span>
              @elseif($issuedbook->status == 'returned')
                <span class="badge badge-success">{{ $retu_r }}</span>
              @elseif($issuedbook->status == 'lost')
                <span class="badge badge-dark">{{ $retu_r }}</span>
              @endif
            </td>
            <td>{{$issuedbook->return_date or null}}</td>
            <td>
              @if($issuedbook->status == 'lost')
                {{$issuedbook->book->price}} +
                {{$issuedbook->penalty_money}}
              @else
                  {{$issuedbook->penalty_money}}
              @endif
            </td>

            <td class="text-center">
              @if($issuedbook->status == 'borrowed')
                <span class="badge badge-warning">Borrowed</span>
              @elseif($issuedbook->status == 'returned')
                <span class="badge badge-success">Returned</span>
              @elseif($issuedbook->status == 'late')
                <span class="badge badge-danger">Late</span>
              @elseif($issuedbook->status == 'lost')
                <span class="badge badge-dark">Lost</span>
              @else
                <span class="badge badge-info">null</span>
              @endif
            </td>
            <td class="text-center">
              <button type="button" class="btn btn-xs btn-warning" data-id="{{$issuedbook->id}}" id="issuedbookedit"><i class="fa fa-pencil"></i> កែ​តម្រូវ</button>
              <button type="button" class="btn btn-xs btn-danger" data-id="{{$issuedbook->id}}" id="issuedbookdelete"><i class="fa fa-trash"></i> លុប</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="card-foter m-auto">
          {{ $issuedbooks->links() }}
      </div>
  </div>


@include('issuedbooks.modals.create')
@include('issuedbooks.modals.edit')
@include('issuedbooks.modals.delete')

@endsection


@section('script')
<script type="text/javascript">

  $(document).on('click', '#issuebook', function(e){
    $('#issuebookmodal').modal('show');

    // ON CHANGE BOOK OR USER
    $( "#book_id" ).change(function() {
        var bookid = $("#book_id option:selected").val();
        bookListWithUsers(bookid);
    });
    $( "#user_id" ).change(function() {
        var userid = $("#user_id option:selected").val();
        bookListWithUsers(null,userid);
    });

  });


  // EDIT USER
  $(document).on('click', '#issuedbookedit', function(e){
    $('#editissuedbookmodal').modal('show');
    var id = $(this).data('id');
    $.get('issuedbooks/'+id+'/edit', function(data){
      $('#editissuedbookmodal form').attr('action','issuedbooks/'+data.issuedbook.id);
      $('#editissuedbookmodal #bookid').val(data.issuedbook.book_id);
      $('#editissuedbookmodal #bookid').trigger('change');
      $('#editissuedbookmodal #userid').val(data.issuedbook.user_id);
      $('#editissuedbookmodal #userid').trigger('change');
      $('#editissuedbookmodal #issueddate').val(data.issuedbook.issued_date);
      $('#editissuedbookmodal #expirydate').val(data.issuedbook.expiry_date);
      $('#editissuedbookmodal #returndate').val(data.issuedbook.return_date);
      $('#editissuedbookmodal #penaltymoney').val(data.issuedbook.penalty_money);
      $('#editissuedbookmodal #editstatus').val(data.issuedbook.status);
    });

  });

  // ON CHANGE RETURN BOOK
  $( "#editstatus" ).change(function() {
      var optselected = $("#editstatus option:selected").val();
      if(optselected == 'returned'){
        var now = new Date();
        var y = now.getFullYear();
        var m = now.getMonth() + 1;
        var d = now.getDate();
        var t = '' + y +'-'+ (m < 10 ? '0' : '') + m + (d < 10 ? '0' : '') +'-'+ d;
        $('#returndate').val(t);
      }else{
        $('#returndate').val('');
      }
  });



  // DELETE USER
  $(document).on('click', '#issuedbookdelete', function(e){
    e.preventDefault();
    var delbtntr = $(this).parents('tr');
    var id = $(this).data('id');
    $.get('issuedbooks/'+id, function(data){
        $('#issuedbookdeletemodal #name').html(data.issuedbook.book.title+ ' by ' +data.issuedbook.user.name);
        $('#issuedbookdeletemodal button.btn-danger').attr('id','delete-'+data.issuedbook.id);
        $('#issuedbookdeletemodal').modal('show');
        $('#delete-'+data.issuedbook.id).on('click', function(e){
          $.ajax({
            type: "DELETE",
            url:'issuedbooks/'+data.issuedbook.id,
            data: data.issuedbook,
            success: function(data){
              delbtntr.remove();
              $('#issuedbookdeletemodal').modal('hide');
              toastr.success('Issuedbook deleted successfully.')
            },
            dataType: 'json'
          });
        });
      });
  });


  // JSON - BOOK STATUS AUTO UPDATE
  $(function(){
    var data = <?php echo json_encode($status_arr) ?>;
    if (data) {
      data.forEach( function(status) {
        if( (status[2] < 0) && (status[1] == 'borrowed') ){
          var id = status[0];
          if(id){
            $.post("{{ route('issuedbookstatus') }}",{id:id},function(data){
              if (data.msg == true) {
                location.reload();
              }
            })
          }
        }
      })
    }
  });


  // JSON - USER AND BOOK LIST FUNCTION
  function bookListWithUsers(bookid,userid){

    $.get("{{ route('issuedbooksusers') }}",{ book_id:bookid, user_id:userid},function(data){

      var table  = '';
          table += '<div class="col-md-12"><table class="table table-bordered"><thead>';
          table += '<th>Books</th>';
          table += '<th>Members</th>';
          table += '<th>Status</th>';
          table += '</thead><tbody>';

          data.issuedbooksusers.forEach( function(el){
            table += '<tr>';
            table += '<td>'+el.book.title+'</td>';
            table += '<td>'+el.user.name+'</td>';
            table += '<td><span class="btn btn-sm btn-info">'+el.status+'</span></td>';
            table += '</tr>';
          });

          table += '</tbody></table></div>';

      $('#issued-books-member').empty().append(table);

    })
  }


</script>
@endsection
