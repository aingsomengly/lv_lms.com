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
        <h2>ប្រទេស<small>តារាង</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li>
            <button href="{{route('countries.create')}}"  id="createcountry" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                បន្ថែម​ប្រទេស
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
          <th>ស្លាក់</th>
          <th>ប្រតិបត្តិ</th>
        </tr>
      </thead>
      <tbody>
        @foreach($countries as $country)
        <tr>
          <th scope="row">{{$country->id}}.</th>
          <td>{{$country->name}}</td>
          <td>{{$country->slug}}</td>
          <td>
            <button type="button" class="btn btn-xs btn-info" data-id="{{$country->id}}" id="countryview"><i class="fa fa-eye"></i> មើល​លំអិត</button>
            <button type="button" class="btn btn-xs btn-warning" data-id="{{$country->id}}" id="countryedit"><i class="fa fa-pencil"></i> កែតម្រូវ</button>
            <button type="button" class="btn btn-xs btn-danger" data-id="{{$country->id}}" id="countrydelete"><i class="fa fa-trash"></i> លុប</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="card-foter m-auto">
        {{ $countries->links() }}
    </div>
  </div>


@include('countries.modals.createcountry')
@include('countries.modals.editcountry')
@include('countries.modals.viewcountry')
@include('countries.modals.deletecountry')

@endsection


@section('script')
<script type="text/javascript">

  $(document).on('click', '#createcountry', function(e){
    $('#createcountrymodal').modal('show');
  });

  // EDIT country
  $(document).on('click', '#countryedit', function(e){
    $('#countryeditmodal').modal('show');
    var country = $(this).data('id');
    $.get('countries/'+country+'/edit', function(data){
      $('#countryeditmodal #name').val(data.country.name);
    });
  });

  // VIEW country
  $(document).on('click', '#countryview', function(e){
    $('#countryviewmodal').modal('show');
    var country = $(this).data('id');
    $.get('countries/'+country, function(data){
      $('#countryviewmodal form').attr('action','countries/'+data.country.id);
      $('#countryviewmodal #name').html(data.country.name);
    });
  });

  // DELETE country
  $(document).on('click', '#countrydelete', function(e){
    e.preventDefault();
    var delbtntr = $(this).parents('tr');
    var country = $(this).data('id');
    $.get('countries/'+country, function(data){
        $('#countrydeletemodal #name').html(data.country.name);
        $('#countrydeletemodal button.btn-danger').attr('id','deletecountry-'+data.country.id);
        $('#countrydeletemodal').modal('show');
        $('#deletecountry-'+data.country.id).on('click', function(e){
          $.ajax({
            type: "DELETE",
            url:'countries/'+data.country.id,
            data: data.country,
            success: function(data){
              delbtntr.remove();
              $('#countrydeletemodal').modal('hide');
              toastr.success('Country deleted successfully.')
            },
            dataType: 'json'
          });
        });
      });
  });


</script>
@endsection
