@extends('layouts.app')

@section('content')
  <div class="x_panel">
    <div class="x_title">
        <h2>បញ្ចី​​ស៊េរី<small>តារាង</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li>
            <button href="{{route('books.create')}}"  id="createseries" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                បន្ថែម​​​ស៊េរី
            </button>
          </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <table width="100%" id="datatable-buttons" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>លេខ​រៀង</th>
          <th>ឈ្មោះ</th>
          <th>​ស្លាក់</th>
          <th>ប្រត្តិបត្តិ</th>
        </tr>
      </thead>
      <tbody>
        @foreach($allseries as $series)
        <tr>
          <th scope="row">{{$series->id}}.</th>
          <td>{{$series->name}}</td>
          <td>{{$series->slug}}</td>
          <td>
            <button type="button" class="btn btn-sm btn-info" data-id="{{$series->id}}" id="seriesview"><i class="fa fa-eye"></i> មើល​លំអិត</button>
            <button type="button" class="btn btn-sm btn-warning" data-id="{{$series->id}}" id="seriesedit"><i class="fa fa-pencil"></i> កែ​តម្រូវ</button>
            <button type="button" class="btn btn-sm btn-danger" data-id="{{$series->id}}" id="seriesdelete"><i class="fa fa-trash"></i> ​លុប</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="card-foter m-auto">
        {{ $allseries->links() }}
    </div>
  </div>


@include('series.modals.createseries')
@include('series.modals.editseries')
@include('series.modals.viewseries')
@include('series.modals.deleteseries')

@endsection


@section('script')
<script type="text/javascript">

  $(document).on('click', '#createseries', function(e){
    $('#createseriesmodal').modal('show');
  });

  // EDIT series
  $(document).on('click', '#seriesedit', function(e){
    $('#serieseditmodal').modal('show');
    var series = $(this).data('id');
    $.get('series/'+series+'/edit', function(data){
      $('#serieseditmodal form').attr('action','series/'+data.series.id);
      $('#serieseditmodal #name').val(data.series.name);
    });
  });

  // VIEW series
  $(document).on('click', '#seriesview', function(e){
    $('#seriesviewmodal').modal('show');
    var series = $(this).data('id');
    $.get('series/'+series, function(data){
      $('#seriesviewmodal #name').html(data.series.name);
    });
  });

  // DELETE series
  $(document).on('click', '#seriesdelete', function(e){
    e.preventDefault();
    var delbtntr = $(this).parents('tr');
    var series = $(this).data('id');
    $.get('series/'+series, function(data){
        $('#seriesdeletemodal #name').html(data.series.name);
        $('#seriesdeletemodal button.btn-danger').attr('id','deleteseries-'+data.series.id);
        $('#seriesdeletemodal').modal('show');
        $('#deleteseries-'+data.series.id).on('click', function(e){
          $.ajax({
            type: "DELETE",
            url:'series/'+data.series.id,
            data: data.series,
            success: function(data){
              delbtntr.remove();
              $('#seriesdeletemodal').modal('hide');
              toastr.success('Series deleted successfully.')
            },
            dataType: 'json'
          });
        });
      });
  });


</script>
@endsection
