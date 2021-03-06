<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Library Management System' }}</title>

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        body {font-family: 'Raleway', sans-serif;}
        .dropdown-menu.show{left: auto;right: 0;}
        .select2-container--default .select2-selection--single{border-radius:0;padding-top:6px;}
        .select2-container .select2-selection--single{height:40px;}
        .authbooktitle a{color: black;text-align: center;text-shadow: 1px 1px 0px #ccc;}
        .authbooktitle{display:none;}
        .authbook{transition: all 0.8s ease;}
        .authbook:hover .authbooktitle{display:block;background-color:rgba(255, 255, 255, 0.8);}
        .w-47{width:47%;margin:auto 1% 1% 1%;border-radius:0;}

        .page-item .page-link {color:#222222;}
        .page-item.active .page-link {background-color:#25a2b7;border-color:#25a2b7;}
        .page-item:first-child .page-link {border-top-left-radius:0;border-bottom-left-radius:0;}
        .page-item:last-child .page-link {border-top-right-radius:0;border-bottom-right-radius:0;}
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span>
                        {{-- {{ $sitename }} --}}
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                      <li><a class="nav-link" href="{{ route('home') }}">Books</a></li>
                      <li><a class="nav-link" href="{{ route('frontend.authors') }}">Authors</a></li>
                      <li><a class="nav-link" href="{{ route('frontend.blog') }}">Blog</a></li>
                    </ul>

                    <!-- Middle Searchbar Of Navbar -->
                    <form class="form-inline ml-auto mr-4" action="{{ route('frontend.search') }}" method="get">
                        <input class="form-control mr-sm-2 rounded-0" type="search" name="book" placeholder="Search Book" aria-label="Search">
                        <button class="btn btn-outline-info my-2 my-sm-0 rounded-0" type="submit"><i class="fas fa-search"></i></button>
                    </form>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="btn btn-outline-info rounded-0" href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle btn btn-outline-info rounded-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-user-circle mr-1"></i>{{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu rounded-0" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">
                                        <i class="fas fa-user mr-2"></i>Dashboard
                                    </a>
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        <i class="fas fa-user mr-2"></i>Profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                                    </a>
                                   
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/fontawesome-all.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

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
