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
    <script src="{{ asset('js/front.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>

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
        <div class="logo-flame">
            <div class="logo-container">
                <a href="" class="custom-logo-link" rel="home">
                    <p class="icon-text">SeaSons</p>
                    {{-- <img src="image/clover2.svg" alt="" id="icon"> --}}
                </a>
            </div>
        </div>
        <div class="main-image-flame">
            <div class="main-image-container">
                <img src="image/headermain.png" data-src="image/headermain.png" alt="" class="main-img" data-srcset="image/headermain.png">
                <img src="image/headermain2.png" data-src="image/headermain2.png" alt="" class="main-img" data-srcset="image/headermain2.png">
            </div>
        </div>
        <div class="header">
            <nav class="global-nav">
              <ul class="global-nav__list delete">
                <li class="nav-item p-3 active">
                    <a class="nav-link mx-2" href="{{ route('home') }}">トップページ</a>
                    </li>
                    <li class="nav-item p-3">
                    <a class="nav-link mx-2" href="{{ route('calender') }}">コントローラー</a>
                    </li>
                    <li class="nav-item p-3">
                    <a class="nav-link mx-2" href="{{ route('users') }}">顧客管理</a>
                    </li>
                    <li class="nav-item p-3">
                    <a class="nav-link mx-2" href="{{ route('bookings') }}">本日の予約一覧</a>
                    </li>
                    <li class="nav-item p-3">
                    <a class="nav-link mx-2" href="{{ route('contact') }}">お問い合わせ</a>
                    </li>
                    <li class="nav-item p-3">
                    <a class="nav-link mx-2" href="{{ route('setting') }}">設定</a>
                <li class="nav-item p-3 active">
                <a class="nav-link mx-2" href="{{ route('home') }}">トップページ</a>
                </li>
                <li class="nav-item p-3 active">
                    <a class="nav-link mx-2" href="{{ route('reservationSM') }}">Web予約</a>
                </li>
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
                <li class="nav-item p-3 ml-4">
                <ul class="navbar-nav float-left">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->family_name }} {{ Auth::user()->first_name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right bg-transparent" aria-labelledby="navbarDropdown">
                            @if (null !== \App\Booking::where('user_id', Auth::user()->id)->where('booking_date_number', Auth::user()->latest_booking_date_number)->where('active', 1)->first() && \App\Booking::where('user_id', Auth::user()->id)->where('active', 1)->first()->booking_date_number > \Carbon\Carbon::now()->format("ndHi"))
                            <a class="dropdown-item" href="{{ route('confirmation') }}">
                                予約確認
                            </a>
                            @endif
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
                </ul>
            </li>
            </ul>
            </nav>

            <div class="hamburger" id="js-hamburger">
                <span class="hamburger__line hamburger__line--1"></span>
                <span class="hamburger__line hamburger__line--2"></span>
                <span class="hamburger__line hamburger__line--3"></span>
            </div>
            <div class="black-bg" id="js-black-bg"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <nav class="navbar navbar-expand-lg navbar-light nav1 mt-2 mb-2">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="Navber">
                                <ul class="navbar-nav main-nav abc col-md-12">
                                    <li class="nav-item p-3 active">
                                    <a class="nav-link mx-1" href="{{ route('home') }}">トップページ</a>
                                    </li>
                                    <li class="nav-item p-3">
                                    <a class="nav-link mx-1" href="{{ route('calender') }}">コントローラー</a>
                                    </li>
                                    <li class="nav-item p-3">
                                    <a class="nav-link mx-1" href="{{ route('users') }}">顧客管理</a>
                                    </li>
                                    <li class="nav-item p-3">
                                    <a class="nav-link mx-1" href="{{ route('bookings') }}">本日の予約一覧</a>
                                    </li>
                                    <li class="nav-item p-3">
                                    <a class="nav-link mx-1" href="{{ route('contact') }}">お問い合わせ</a>
                                    </li>
                                    <li class="nav-item p-3">
                                    <a class="nav-link mx-1" href="{{ route('setting') }}">設定</a>
                                    </li>
                                    <li class="nav-item p-3">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle mx-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->family_name }} {{ Auth::user()->first_name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu  drop-down-container" aria-labelledby="navbarDropdown">
                                            @if (null !== \App\Booking::where('user_id', Auth::user()->id)->where('booking_date_number', Auth::user()->latest_booking_date_number)->where('active', 1)->first() && \App\Booking::where('user_id', Auth::user()->id)->where('active', 1)->first()->booking_date_number > \Carbon\Carbon::now()->format("ndHi"))
                                            <a class="dropdown-item" href="{{ route('confirmation') }}">
                                                予約確認
                                            </a>
                                            @endif
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
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

        {{-- <div class="header">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
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
                                    {{ Auth::user()->family_name }} {{ Auth::user()->first_name }}<span class="caret"></span>
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
                <img src="/image/headermain2.png" class="img-fluid">
                    <div class="d-flex justify-content-center">
                        <nav class="navbar navbar-expand-lg navbar-light nav1 mt-2 mb-2">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="Navber">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item p-3 active">
                                    <a class="nav-link mx-2" href="{{ route('home') }}">トップページ</a>
                                    </li>
                                    <li class="nav-item p-3">
                                    <a class="nav-link mx-2" href="{{ route('calender') }}">コントローラー</a>
                                    </li>
                                    <li class="nav-item p-3">
                                    <a class="nav-link mx-2" href="{{ route('users') }}">顧客管理</a>
                                    </li>
                                    <li class="nav-item p-3">
                                    <a class="nav-link mx-2" href="{{ route('bookings') }}">本日の予約一覧</a>
                                    </li>
                                    <li class="nav-item p-3">
                                    <a class="nav-link mx-2" href="{{ route('contact') }}">お問い合わせ</a>
                                    </li>
                                    <li class="nav-item p-3">
                                    <a class="nav-link mx-2" href="{{ route('setting') }}">設定</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div> --}}
        <main class="py-4">
            @yield('content')
        </main>
    </div>

<footer>
    <p class="pp"><a href="{{ route('policy') }}">プライバシーポリシー</a></p>
    <p class="cr">c 2019 SEASONS Inc.</p>
</footer>
</body>
</html>
