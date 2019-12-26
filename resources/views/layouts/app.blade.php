<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Library Management System') }}</title>

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    {{--  <link href="{{ asset('css/fa-svg-with-js.css') }}" rel="stylesheet">  --}}
    {{--  <link href="{{ asset('css/summernote.css') }}" rel="stylesheet">  --}}

    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}


    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('admin/vendors/bootstrap-daterangepicker/daterangepick')}}">

    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet"/>
    
     <!-- iCheck -->
     <link href="{{ asset('admin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
     <!-- iCheck -->
    <link href="{{ asset('admin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- Datatables -->
    <link href="{{ asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ asset('admin/build/css/custom.min.css')}}" rel="stylesheet">
</head>
<body>
    <body class="nav-md">
        <div class="container body">
          <div class="main_container">
            <div class="col-md-3 left_col menu_fixed">
              <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                  <a href="#" class="site_title"><i class="fa fa-home"></i> <span>គ្រប់គ្រង បណ្ណា​ល័យ</span></a>
                </div>
    
                <div class="clearfix"></div>
    
                <!-- menu profile quick info -->
                <div class="profile clearfix">
                  <div class="profile_pic">
                    <img src="{{ Auth::user()->photo }}" alt="..." class="img-circle profile_img">
                  </div>
                  <div class="profile_info">
                    <span>សូមស្វាគមន៏,</span>
                    <h2> {{ Auth::user()->name }}</h2>
                  </div>
                </div>
                <!-- /menu profile quick info -->
    
                <br />
    
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                  <div class="menu_section">
                    <h3>ទូ​ទៅ</h3>
                    <ul class="nav side-menu">
                    <li><a href="{{route('dashboard')}}"><i class="fa fa-bar-chart-o"></i>ផ្ទៃតាប្លូ</a>
                        
                    @if( auth()->user() && (auth()->user()->role->slug == 'admin' || auth()->user()->role->slug == 'liberian') )
                        <li><a><i class="fa fa-book"></i>សៀវភៅ <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{route('requestedbooks.index')}}"​​​>ស្នើរសុំ​សៀវភៅ</a></li>
                                <li><a href="{{route('issuedbooks.index')}}">បញ្ហា​សៀវភៅ</a></li>
                                {{--  <li><a href="return">ប្រគល់​​សៀវភៅ</a></li>  --}}
                                <li><a href="{{route('authors.index')}}">អ្នកនិពន្ធ</a></li>
                                <li><a href="{{route('genres.index')}}">ប្រភេទ​សៀវភៅ</a></li>
                                <li><a href="{{route('countries.index')}}">ប្រទេស</a></li>
                                {{-- <li><a href="report">Book Report</a></li> --}}
                                <li><a href="{{route('books.index')}}">បញ្ជី​សៀវភៅ</a></li>
                                <li><a href="{{route('series.index')}}"> ស៊េរី </a></li>
                            </ul>
                        </li>
                    @endif
    
                      {{-- <li><a><i class="fa fa-user"></i> សិស្ស <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="#">Student Register</a></li>
                          <li><a href="#">Student Borrow Book</a></li>
                          <li><a href="#">Student Issue Book</a></li>
                          <li><a href="#">Student Report</a></li>
                          <li><a href="">All List Student</a></li>
                        </ul>
                      </li> --}}
                        @if( auth()->user() && (auth()->user()->role->slug == 'admin' || auth()->user()->role->slug == 'liberian') )
                            <li><a href="{{ route('settings.index') }}"><i class="fa fa-bar-chart-o"></i>កំណត់</a>
                        @endif
                       {{-- <li><a><i class="fa fa-users"></i> Supplier <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="#">Supplier Register</a></li>
                          <li><a href="#">Supplier Report</a></li>
                          <li><a href="#">All List Supplier</a></li>
                        </ul>
                      </li>
                      <li><a><i class="fa fa-desktop"></i> Staff <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="#">Stuff Register</a></li>
                          <li><a href="#">Stuff Report</a></li>
                          <li><a href="#">All List Stuff</a></li>
                        </ul>
                      </li> --}}
                      <li><a><i class="fa fa-sitemap"></i> អ្នក​ប្រើប្រាស់ <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="#">User Register</a></li>
                          <li><a href="#">User Report</a></li>
                          <li><a href="{{ route('users.index') }}">All List User</a></li>
                        </ul>
                      </li>
                      {{-- <li><a href="chart"><i class="fa fa-bar-chart-o"></i>List Chart</a></li> --}}
                      <li><a><i class="fa fa-clone"></i>គោល​ការណ៍ & រយះពេល <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="#">អំពី បណ្ណា​ល័យ</a></li>
                          <li><a href="#">FQA Query</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="menu_section">
                    <h3>Live On</h3>
                    <ul class="nav side-menu">
                      <li><a><i class="fa fa-bug"></i> ពង្រីក ផាណែល <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="#">ការ​ដឹក​ជញ្ជូន</a></li>
                          <li><a href="#">ឧបករណ៍</a></li>
                          <li><a href="#">អំពី</a></li>
                          <li><a href="#">ទំនាក់ទំនង</a></li>
                           <li><a href="#">All Report</a></li>
                          <li><a href="#">ការ​កំណត់</a></li>
                        </ul>
                      </li>
    
                      <li><a href="javascript:void(0)"><i class="fa fa-user"></i>Admin <span class="label label-success pull-right">កំពុងផ្សាយ</span></a></li>
                    </ul>
                  </div>
    
                </div>
                <!-- /sidebar menu -->
    
                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                  <a data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                  </a>
                </div>
                <!-- /menu footer buttons -->
              </div>
            </div>
    
            <!-- top navigation -->
            <div class="top_nav">
              <div class="nav_menu">
                <nav>
                  <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                  </div>
    
                  <ul class="nav navbar-nav navbar-right">
                    <li class="">
                      <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ Auth::user()->photo }}" alt="">{{ Auth::user()->name }}
                        <span class=" fa fa-angle-down"></span>
                      </a>
                      <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="{{route('profile')}}"> ប្រវត្តិរូប</a></li>
                        {{-- <li>
                          <a href="javascript:;">
                            <span class="badge bg-red pull-right">50%</span>
                            <span>Settings</span>
                          </a>
                        </li> --}}
                        {{-- <li><a href="javascript:;">Help</a></li> --}}
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('ចាក​ចេញ') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                      </ul>
                    </li>
    
                    <li role="presentation" class="dropdown">
                      <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                      </a>
                      <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                        <li>
                          <a>
                            <span class="image"><img src="{{ asset('admin/1.jpg') }}" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <a>
                            <span class="image"><img src="{{ asset('admin/1jpg') }}" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <a>
                            <span class="image"><img src="{{ asset('admin/1.jpg') }}" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <a>
                            <span class="image"><img src="{{ asset('admin/1.jpg') }}" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <div class="text-center">
                            <a>
                              <strong>See All Alerts</strong>
                              <i class="fa fa-angle-right"></i>
                            </a>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- /top navigation -->
    
            <!-- page content -->
            <div class="right_col" role="main">
              @yield('content')
            </div>
            <!-- /page content -->
    
            <!-- footer content -->
            <footer>
              <div class="pull-right">
                LMS <a href="#">ប្រព័ន្ធគ្រប់​គ្រង</a>
              </div>
              <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
          </div>
        </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{--  <script src="{{ asset('js/fontawesome-all.min.js') }}"></script>  --}}
    {{--  <script src="{{ asset('js/summernote.min.js') }}"></script>  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js" charset="utf-8"></script>




    <!-- jQuery -->
    <script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
    <script src="{{ asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

    <script src="{{ asset('admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>

    <script src="{{ asset('admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>

    <script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>

    <script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/pdfmake/build/vfs_fonts.js')}}"></script> 


    <script src="{{ asset('admin/build/js/custom.min.js')}}"></script>
    <!-- Dynamic Table -->

    <!-- Bootstrap -->
    <!-- FastClick -->
    <script src="{{ asset('admin/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset('admin/vendors/nprogress/nprogress.js')}}"></script>
    <!-- iCheck -->
    <!-- Datatables -->

    <script src="{{ asset('admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    
    <script type="text/javascript">

      $(document).ready(function() {

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        // SELECT2
        $('.select2-single').select2({
            width: 'resolve',
            placeholder: '-- Select --',
        });
        $('.select2-multiple').select2({
            placeholder: '-- Select --',
        });

        // BOOTSTRAP-DATEPICKER
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true
        });


        // ERROR
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}', 'ERROR!')
            @endforeach
        @endif

        // SESSION SUCCESS
        @if (session('success'))
            toastr.success('{{ session('success') }}')
        @endif

        // SESSION ERROR
        @if (session('error'))
            toastr.error('{{ session('error') }}')
        @endif

      });

    </script>

    @yield('script')

</body>
</html>
