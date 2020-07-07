<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Seasons') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/PC/calender.css') }}" rel="stylesheet">
    <link href="{{ asset('css/media/calender.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body>

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
            <picture>
                <source type="image/webp" srcset="{{ asset('image/headermain.webp') }}">
                <img alt="" class="main-img" src="image/headermain.jp2">
            </picture>
            <picture>
                <source type="image/webp" srcset="image/headermain2.webp">
                    <img alt="" class="main-img" src="image/headermain2.jp2">
            </picture>
        </div>
    </div>
    <div class="header">
        @guest
        <nav class="global-nav">
        <ul class="global-nav__list delete">
            <li class="nav-item p-3 active">
            <a class="nav-link mx-2" href="{{ route('home') }}">トップページ</a>
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            </ul>
        </li>
        </ul>
        </nav>
        @else
        <nav class="global-nav">
            <ul class="global-nav__list delete">
                @if(Auth::user()->admin == true)
                <li class="nav-item p-3 active">
                <a class="nav-link mx-2" href="{{ route('calender') }}">アドミンユーザー</a>
                </li>
                <li class="nav-item p-3 active">
                    <a class="nav-link mx-2" href="{{ route('home') }}">トップページ</a>
                </li>
                @else
                <li class="nav-item p-3 active">
                <a class="nav-link mx-2" href="{{ route('home') }}">トップページ</a>
                </li>
                @endif
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

                                <div class="dropdown-menu">
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
                        @endguest
                    </ul>
                </li>
            </ul>
        </nav>

        @endguest
        <div class="hamburger" id="js-hamburger">
            <span class="hamburger__line hamburger__line--1"></span>
            <span class="hamburger__line hamburger__line--2"></span>
            <span class="hamburger__line hamburger__line--3"></span>
        </div>
        <div class="black-bg" id="js-black-bg"></div>
    </div>

        <main class="py-4">
            @yield('content')
        </main>

    <footer>
        <div id="footer-sm" class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="mt-5">
                        <a type="button" class="insta_btn2 " href="https://www.instagram.com/hairmakeseasons/">
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
        <div id="footer-pc" class="text-center">
            <div class="mt-5">
                {{--  <iframe width="700" height="400" src="{{ \App\BookingController::find(1)->first()->movie }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>  --}}
                <a type="button" class="insta_btn2 " href="https://www.instagram.com/hairmakeseasons/">
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
        <p class="pp"><a href="{{ route('policy') }}">プライバシーポリシー</a></p>
        <p class="cr">c 2019 SEASONS Inc.</p>
    </footer>
</div>


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

    <script>
        $(document).ready(function(){
            if (matchMedia('(max-width: 960px)').matches) {
                $('#footer-pc').addClass('delete');

            } else {
                $('#footer-sm').addClass('delete');

            }


          });
    </script>
