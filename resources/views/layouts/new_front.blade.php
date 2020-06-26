<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/nav.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/newfront.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <header>
            <div class="header-top-flame">
                <div class="header-container">
                    <div class="logo-flame">
                        <div class="logo-container">
                            <a href="" class="custom-logo-link" rel="home">
                                <p class="icon-text">SeaSons</p>
                                {{-- <img src="image/clover2.svg" alt="" id="icon"> --}}
                            </a>
                        </div>
                    </div>
                    <div class="booking-btn-flame">
                        <div class="booking-btn-container">
                            <a href="{{ route('reservation_plan') }}"><button class="booking-btn">WEB予約</button></a>
                        </div>
                    </div>
                    {{--  ここにログイン実装  --}}
                </div>
            </div>
            <div class="main-nav-flame">
                <div class="main-nav-container">
                    <nav class="main-nav navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="" href="{{ route('home') }}">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="" href="{{ route('home') }}">Blog<span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="" href="{{ route('concept') }}">Concept<span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="" href="{{ route('menu') }}">Menu<span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="" href="{{ route('contact') }}">Contact<span class="sr-only"></span></a>
                            </li>
                            {{-- <li class="nav-item active">
                                <a class="" href="{{ route('access') }}">Access<span class="sr-only"></span></a>
                            </li> --}}
                            <ul class="navbar-nav ml-auto">
                                @guest
                                    <li class="nav-item">
                                        <a class="active" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item active">
                                            <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                    @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Member <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('confirmation') }}">
                                                予約確認
                                            </a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                ログアウト
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                          </ul>
                        </div>
                      </nav>
                </div>
            </div>
        </header>
        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
