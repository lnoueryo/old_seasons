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
    {{--  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>  --}}
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="sample.css" type="text/css" media="screen and (max-width:300px)">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/front.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="header">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    {{-- <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a> --}}
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->family_name }} {{ Auth::user()->first_name }} <span class="caret"></span>
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
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <img src="image/headermain.png" class="main-image img-fluid">
                    <img src="image/headermain2.png" class="img-fluid">
                        <div class="d-flex justify-content-center">
                            <nav class="navbar navbar-expand-lg navbar-light nav1 mt-2 mb-2">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="Navber">
                                    <ul class="navbar-nav mr-auto">
                                        @if(Auth::user()->admin == true)
                                        <li class="nav-item p-3 active">
                                        <a class="nav-link mx-2" href="{{ route('calender') }}">アドミンユーザー専用ページ</a>
                                        </li>
                                        @else
                                        <li class="nav-item p-3 active">
                                        <a class="nav-link mx-2" href="{{ route('home') }}">トップページ</a>
                                        </li>
                                        @endif
                                        <li class="nav-item p-3">
                                        <a class="nav-link mx-2" href="#">ブログ</a>
                                        </li>
                                        <li class="nav-item p-3">
                                        <a class="nav-link mx-2" href="{{ route('concept') }}">コンセプト</a>
                                        </li>
                                        <li class="nav-item p-3">
                                        <a class="nav-link mx-2" href="{{ route('menu') }}">メニュー</a>
                                        </li>
                                        <li class="nav-item p-3">
                                        <a class="nav-link mx-2" href="{{ route('contact') }}">お問い合わせ</a>
                                        </li>
                                        <li class="nav-item p-3">
                                        <a class="nav-link mx-2" href="{{ route('access') }}">アクセス</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="mt-5 offset-md-1">
                            <iframe width="700" height="400" src="{{ \App\BookingController::find(1)->first()->movie }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                            <a type="button" class="insta_btn2" href="https://www.instagram.com/hairmakeseasons/">
                                <i class="fab fa-instagram"></i> <span class="align-middle">Follow Me</span>
                            </a>
                            <a type="button" class="line_btn" href="https://line.me/R/ti/p/%40fai2592a">
                                <i class="fab fa-line fa-4x"></i><span>友だち追加</span>
                            </a>
                            <a type="button" class="fb_btn" href="https://www.facebook.com/hairmakeseasons">
                                <i class="fab fa-facebook"></i><span>Facebook</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="pp"><a href="{{ route('policy') }}">プライバシーポリシー</a></p>
            <p class="cr">c 2019 SEASONS Inc.</p>
        </footer>
    </div>
    <script>
        var app = new Vue({
            el:"#app",
            data: {
                message: "ともすた"
            }
        });
    </script>
</body>
</html>
