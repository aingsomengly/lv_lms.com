@extends('layouts.app')

@section('content')
    @if(auth()->user()->role->slug == 'admin' || auth()->user()->role->slug == 'liberian')
                    <div class="row top_titles">
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
                    

                    <div class="table-responsive">
                        <div class="x_panel">
                          <div class="x_title">
                              <h2>សៀវ​ភៅ<small>តារាង</small></h2>
                              <div class="clearfix"></div>
                          </div>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>លេខរៀង</th>
                                <th>សៀវ​ភៅ</th>
                                <th>សមាជិក</th>
                                <th>អ្នក​បោះពុម្ភ</th>
                                <th>លេខ​ ISBN</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($issuedbooks as $key => $issuedbook)
                                  <tr>
                                    <th scope="row">{{++$key}}.</th>
                                    <td>{{$issuedbook->book->title}} <em>by {{$issuedbook->book->author->name}}</em></td>
                                    <td>{{$issuedbook->user->name}}</td>
                                    <td>{{$issuedbook->book->publisher->name}}</td>
                                    <td>{{$issuedbook->book->ISBN}}</td>
                                  </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>

                    <div class="table-responsive">
                      <div class="x_panel">
                        <div class="x_title">
                            <h2>​ស្នើរសុំសៀវ​ភៅ<small>តារាង</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <table width="100%" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>​លេខ​រៀង</th>
                                <th>សៀវ​ភៅ</th>
                                <th>សមាជិក</th>
                                <th>អ្នក​បោះពុម្ភ</th>
                                <th>លេខ ISBN</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($requestedbooks as $key => $requestedbook)
                                  <tr>
                                    <th scope="row">{{++$key}}.</th>
                                    <td>{{$requestedbook->book->title}} <em>by {{$requestedbook->book->author->name}}</em></td>
                                    <td>{{$requestedbook->user->name}}</td>
                                    <td>{{$requestedbook->book->publisher->name}}</td>
                                    <td>{{$requestedbook->book->ISBN}}</td>
                                  </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- ================ USER DASHBOARD ================== --}}
                    @else
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card text-white bg-info mb-3">
                                 <div class="card-body">
                                     <h1 class="card-title">{{ $userequestedbooks }}</h1>
                                     <p class="card-text uppercase">Requested Books</p>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-warning mb-3">
                                 <div class="card-body">
                                     <h1 class="card-title">{{ $useracceptedbooks }}</h1>
                                     <p class="card-text uppercase">Accepted Books</p>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-dark mb-3">
                                 <div class="card-body">
                                     <h1 class="card-title">{{ $userpendingbooks }}</h1>
                                     <p class="card-text uppercase">Pending Books</p>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-danger mb-3">
                                 <div class="card-body">
                                     <h1 class="card-title">{{ $userejectedbooks }}</h1>
                                     <p class="card-text uppercase">Rejected Books</p>
                                 </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div class="card-header mt-3 border-top border-left border-right width100">
                            Accepted Books
                        </div>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>SL.</th>
                              <th>Book</th>
                              <th>Member</th>
                              <th>Issued Date</th>
                              <th>Expiry Date</th>
                              <th>Remain Days</th>
                              <th>Returned Date</th>
                              <th>Penalty</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php
                              $status_arr = array();
                            @endphp

                            @foreach($userissuedbooks as $key => $issuedbook)
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
                              <th scope="row">{{++$key}}.</th>
                              <td>{{$issuedbook->book->title}} <em>by {{$issuedbook->book->author->name}}</em></td>
                              <td>{{$issuedbook->user->name or null}}</td>
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
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                    @endif

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
