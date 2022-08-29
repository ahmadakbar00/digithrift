<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="/assets/css/styles.css" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      <style>
        .brand {
                font-family: 'Roboto', sans-serif;
                font-weight: 700;
                font-size: 25px;
            }
            .green {
                color:#8FE27B
            }
            .black {
                color:#101010
            }
            .hero{
                margin-top: 50px;
            }
            .hero-text{
                font-family: 'Roboto', sans-serif;
                font-weight: 900;
                font-size: 50px;
            }
            .hero-detail{
                font-family: 'Roboto', sans-serif;
                font-weight: 300;
                text-align: justify;
            }
            .button-login{
                font-family: 'Roboto', sans-serif;
                font-weight: 100;
                font-size: 13px;
                background-color:#8FE27B;
                opacity: 80%;
                color:white;
                margin-left:20px;
                width: 50px;
                outline:none;
                border-style: none;
                transition: 0.7s;
                box-shadow: 2px 3px #888888;
            }
            .button-login:hover, .button-login:focus {
                background-color:#8FE27B;
                color:#101010;
                outline:none;
                border-style: none;
                box-shadow: 3px 5px #888888;
                opacity: 100%;
            }
            .button-register{
                font-family: 'Roboto', sans-serif;
                font-weight: 100;
                font-size: 13px;
                background-color:#101010;
                opacity: 80%;
                color:white;
                margin-left:20px;
                /* width: 50px; */
                outline:none;
                border-style: none;
                transition: 0.7s;
                box-shadow: 2px 3px #888888;
                
            }
            .button-register:hover, .button-register:focus {
                background-color:#101010;
                color: white;
                outline:none;
                border-style: none;
                box-shadow: 3px 5px #888888;
                opacity: 100%;
            }
            .main-content{
                margin-top: 100px;
            }
      </style>
</head>
<body>
    <div id="app">

    <nav class="navbar navbar-expand-lg bg-white shadow p-3 mb-5 bg-body fixed-top">
    <div class="container">
        <a class="navbar-brand brand" href="#">
            <span class="green">Digi</span><span class="black">thrift</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/#services">Services</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/#blog">Blog</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/#contact">Contact</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/#about">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link button-login" href="/login">Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link button-register" href="/register">Sign Up</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav me-auto">

                    </ul>

                    
                    <ul class="navbar-nav ms-auto">
                        
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
        </nav>  -->

        <main class="py-4 main-content">
            @yield('content')
        </main>
    </div>
</body>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
