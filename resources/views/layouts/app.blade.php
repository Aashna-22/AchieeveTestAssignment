<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-laravel-admin-template/">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon/favicon.ico') }}">

    <title>Music Events</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

<style>
    .container-fluid {
        margin-left: 0;
        padding-left:0;
    }
    
    .sidebar {
      height: 100vh;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Shadow effect */
      background-color: #f5f5f5;
        
    }

    .sidebar-menu {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .sidebar-menu li {
        padding: 10px;
    }

    .sidebar-menu li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .sidebar-menu li a:hover {
        background-color: #ddd;
    }
    .background-image {
        position: relative;
        overflow: hidden;
    }

    .background-image::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
        background-image: url('assets/img/elements/5.jpg');
        filter: blur(5px); /* Adjust the blur value as per your preference */
    }

    .background-image-content {
        position: relative;
        z-index: 1;
    }
    
</style>
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="navbar-nav me-auto">
                        Music Events
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                        <div class="sidebar-header">
                            <h3 class="sidebar-title"><button class="sidebar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-expanded="false" aria-controls="sidebarMenu">
                                <img src="{{ asset('assets/img/icons/unicons/menu-line.png')}}"></img>
                                </button>
                               DashBoard
                                
                            </h3>
                        </div>
                        <div class="collapse sidebar-menu" id="sidebarMenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('venue') }}">Add Venue</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('artist') }}">Add Artist</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('genre') }}">Add Genre</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <main class="py">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
