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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/new_front2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reservation_plan.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
    <div id="app">
        <header class="transform">
            <div class="header-top-flame">
                <div class="header-container">
                    <div class="logo-flame">
                        <div class="logo-container">
                            <span class="">
                                <a href="" class="custom-logo-link" rel="home">
                                    <span>SeaSons</span>
                                    {{--  <img width="159" height="63" src="http://www.respia-ginza.com/wp/wp-content/uploads/2020/04/logo_pc.png" class="header-logo" alt="美容室 Seasons (シーズンズ)">  --}}
                                </a>
                                {{--  <a href="http://www.respia-ginza.com/" class="custom-mobile-logo-link" rel="home" itemprop="url">
                                    <noscript>
                                        <img width="175" height="56" src="http://www.respia-ginza.com/wp/wp-content/uploads/2020/04/logo.png" class="ast-mobile-header-logo" alt="Respia" />
                                    </noscript>
                                    <img width="175" height="56" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20175%2056%22%3E%3C/svg%3E" data-src="http://www.respia-ginza.com/wp/wp-content/uploads/2020/04/logo.png" class="lazyload ast-mobile-header-logo" alt="Respia">
                                </a>  --}}
                            </span>
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
            <div class="main-nav-flame transform2">
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
                                <li class="nav-item active">
                                    <a class="" href="{{ route('access') }}">Access<span class="sr-only"></span></a>
                                </li>
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                        @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                Member<span class="caret"></span>
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
        <div class="header">
            <div class="concept-main-img-flame">
                <div class="concept-main-img-container">
                    <img src="image/hair2.jpg" alt="" id="concept-main-img">
                </div>
            </div>
        </div>
        <div class="vertical-letter-flame">
            <div class="vertical-letter-caontainer">
                <p class="vertical-letter"><span class="sp-letter">自然をテーマに<br>&nbsp;&nbsp;四季折々のヘアースタイル<br>&nbsp;&nbsp;&nbsp;&nbsp;ご提案いたします</span></p>
            </div>
        </div>
        <main class="">
            @yield('content')
        </main>
    </body>
</html>
