@extends('layouts.app')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>ប្រវត្តិរូប <small>ទំរង់</small></h2>
            <ul class="nav navbar-right panel_toolbox">
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="card-header">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">ប្រវត្តិរូប :</label>
                    <div class="col-sm-10">    
                        <button type="button" class="btn btn-warning float-right" id="changepassword"><i class="fa fa-lock mr-1"></i> ផ្លាស់ប្តូរពាក្យសម្ងាត់</button>
                    </div>
                </div>
            </div>

            <div class="card-body">
            <form class="" action="{{ route('profile.update') }}" method="post">
            @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">ឈ្មោះ:</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" value="{{ $user->name}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">អ៊ីមែល:</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="email" value="{{ $user->email}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">ស្ថានភាព:</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="status" id="status" value="{{ $user->status }}">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-success" id="active" style="box-shadow:none;">សកម្មភាព</button>
                            <button type="button" class="btn btn-default" id="inactive" style="box-shadow:none;">អសកម្ម</button>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">តួនាទី:</label>
                    <div class="col-sm-10">
                        <span class="badge badge-warning p-2"><i class="far fa-user-circle mr-1"></i>{{ $user->role->name }}</span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">បានបង្កើតគណនី :</label>
                    <div class="col-sm-10">
                        <span class="badge badge-light p-2">{{ $user->created_at->diffForHumans() }}</span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="perpage" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">រក្សាទុកទម្រង់</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@include('settings.modal.changepassword')

@endsection

@section('script')
    <script type="text/javascript">

        $(document).on('click', '#changepassword', function(e){
          $('#changepasswordmodal').modal('show');
        });

        $(document).on('click', '#inactive', function(){
            $(this).addClass('btn btn-danger');
            $('#active').removeClass('btn btn-success');
            $('#active').addClass('btn btn-default');
            $('#status').val(0);
        });

        $(document).on('click', '#active', function(){
            $(this).addClass('btn btn-success');
            $('#inactive').removeClass('btn btn-danger');
            $('#inactive').addClass('btn btn-default');
            $('#status').val(1);
        });

    </script>
@endsection
