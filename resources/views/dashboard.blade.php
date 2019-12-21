@extends('layouts.admin')

@section('content')
<!-- page content -->
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-book"></i></div>
                  <div class="count">{{ $totalbooks }}</div>
                  <h3>សរុប</h3>

                  <p>សៀវ​ភៅ សរុបទាំងអស់</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-book"></i></div>
                  <div class="count">{{ $latebooks }}</div>
                  <h3>ប្រគល់​យឺត</h3>
                  <p>សៀវ​ភៅ ដែលប្រគល់​យឺត​ទាំង​អស់</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <div class="count">{{ $returnedbooks }}</div>
                  <h3>បាន​ប្រគល់​</h3>
                  <p>បាន ​ប្រគល់​សៀវភៅ​​ទាំង​អស់</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count">{{ $lostbooks }}</div>
                  <h3>បាត់</h3>
                  <p>សៀវ​ភៅ បាន​ទាំង​អស់</p>
                </div>
              </div>


              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-tachometer"></i></div>
                  <div class="count">{{ $totissuedbooks }}</div>
                  <h3>កិច្ច​ការ</h3>

                  <p>សៀវ​ភៅ កិច្ច​ការទាំង​អស់</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-book"></i></div>
                  <div class="count">{{ $totrequestedbooks }}</div>
                  <h3>បាន​ស្នើរ​សុំ​</h3>
                  <p>បាន​ស្នើរ​សុំ​ សៀវ​ភៅ​ទាំង​អស់</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <div class="count">{{ $pendingbooks }}</div>
                  <h3>​ត្រូវ​បាន​រង់​ចាំ</h3>
                  <p>ការរង់​ចាំ សៀវ​ភៅ​ទាំង​អស់</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count">{{ $rejectedbooks }}</div>
                  <h3>ផ្អាក</h3>
                  <p>សៀវ​ភៅ​ ដែល​​ផ្អាកទាំង​អស់</p>
                </div>
              </div>
            </div>
            <!--End Admin Borad -->

            <div class="x_panel">
                <div class="x_title">
                    <h2>សៀវ​ភៅ កិច្ច​ការ<small>តារាង</small></h2>

                    <div class="clearfix"></div>
                </div>
                <table width="100%" class="table table-striped table-bordered">
                <!-- Large modal -->
                <thead>
                  <tr>
                    <th>លេខសំគាល់</th>
                    <th>ចំ​ណង​ជើង</th>
                    <th>សមាជិក</th>
                    <th>លេខ ISBN</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($issuedbooks as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->book->title}}</td>
                            <td>{{$row->user->name}}</td>
                            <td>{{$row->book->ISBN}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>


            <div class="x_panel">
                <div class="x_title">
                    <h2>បាន​ស្នើរសុំ សៀវ​ភៅ<small>តារាង</small></h2>

                    <div class="clearfix"></div>
                </div>
                <table width="100%" class="table table-striped table-bordered">
                <!-- Large modal -->
                <thead>
                  <tr>
                    <th>លេខសំគាល់</th>
                    <th>ចំ​ណង​ជើង</th>
                    <th>សមាជិក</th>
                    <th>លេខ ISBN</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($requestedbooks as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->book->title}}</td>
                            <td>{{$row->user->name}}</td>
                            <td>{{$row->book->ISBN}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>

            <!-- /page content -->
@endsection
