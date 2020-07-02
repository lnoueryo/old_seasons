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
    <script src="{{ asset('js/admin_calender.js') }}" defer></script>
    <script src="{{ asset('js/pagination.js') }}" defer></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
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
                        <a class="nav-link mx-2" href="{{ route('todaysbooking') }}">本日の予約一覧</a>
                        </li>
                        <li class="nav-item p-3">
                        <a class="nav-link mx-2" href="{{ route('bookings') }}">予約管理</a>
                        </li>
                        <li class="nav-item p-3">
                        <a class="nav-link mx-2" href="{{ route('setting') }}">設定</a>
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
        </div>

            <div class="container">
                <div class="row">
                        <nav class="navbar navbar-expand-lg navbar-light nav1 mt-2 mb-2">
                            <div class="collapse navbar-collapse" id="Navber">
                                <ul class="navbar-nav main-nav">
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
                                    <a class="nav-link mx-1" href="{{ route('todaysbooking') }}">本日の予約一覧</a>
                                    </li>
                                    <li class="nav-item p-3">
                                    <a class="nav-link mx-1" href="{{ route('bookings') }}">予約管理</a>
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

    <style>
        body {
            font-size: 1.3rem;
            font-family: "03スマートフォントUI", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", メイリオ, Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", Arial, sans-serif, "Lobster",cursive;
            line-height: 1.5;
            color: rgb(51, 51, 51);
            background-image: linear-gradient(to right bottom, rgb(216, 235, 234), rgb(255, 245, 234));
            text-align: left;
            padding-top: 0px;
            padding-left: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            margin-top: 0px;
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            overflow-wrap: break-word;
        }

        .logo-flame {
            line-height: 1;
            align-self: center;
            position: absolute;
            z-index: 100;
        }

        .logo-container {
            padding: 0.2em 2em;
            font-family: cursive;
        }

        .logo-container a {
            padding: 1em 0;
            font-family: 'Lobster',cursive;
            /* font-size: 50px; */
            font-size: calc(4.5rem + ((1vw - 0.64rem) * 6));
            color: #444444;
            text-decoration: underline;
        }

        .main-img {
            object-fit: cover;
            width: 100%;
            object-position: 50% 90%
        }

        .main-image-container-inside {

            display: inline-block;
            position: relative;
            }
        .main-nav h3 {
            font-size: 1rem;
            font-weight: normal;
            line-height: 1.25;
            color: #444444;
            padding-bottom: 8px;
            margin-bottom: 20px;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            border-bottom-color: #a0c5ef;
        }
        .main-nav {
            font-size: 0.8rem;
            font-weight: bold;
            border-radius: 50px;
            border: solid 3px;
            border-color: #d8d6bc;
            background-color:#d5e6e4;
            width: 100%;
            display: flex;
            margin-left: 120px;
            margin-right: 120px;
        }

        footer {
            width: 100%;
            margin-top: 60px;
        }

        footer .pp {
            color: #6e6e6e;
            background-color: #d8ebea;
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
            font-size: 0.9rem;
            font-weight: bold;
        }

        .pp a {
            color: #6e6e6e;
            background-color: #d8ebea;
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
            font-size: 0.9rem;
            font-weight: bold;
            text-decoration: none;
        }

        footer .cr {
            color: #ffffff;
            background-color: #a0c5ef;
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
            font-size: 0.9rem;
        }

    </style>
