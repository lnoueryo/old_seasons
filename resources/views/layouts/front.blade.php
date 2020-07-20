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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/PC/calender.css') }}" rel="stylesheet">
    <link href="{{ asset('css/media/calender.css') }}" rel="stylesheet">
    <link href="{{ asset('css/front.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="main-image-flame">
            <div class="main-image-container">
                <picture>
                    <source type="image/webp" srcset="{{ asset('image/headermain.png') }}">
                        <img alt="" class="main-img" src="{{ asset('image/headermain.png') }}">
                </picture>
                <picture>
                    <source type="image/webp" srcset="image/headermain2.webp">
                        <img alt="" class="main-img" src="image/headermain2.jp2">
                </picture>
            </div>
        </div>
        @include('components.drawer')
        @include('components.navigation')
        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            <div id="footer-sm" class="container delete">
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
            <div id="footer-pc" class="text-center delete">
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
            <p class="cr"><a href="{{ route('JS') }}"> 2019 SEASONS Inc.</a></p>
        </footer>
    </div>
</body>
</html>
    <script>
        $(document).ready(function(){
            if (matchMedia('(max-width: 960px)').matches) {
                $('#footer-sm').removeClass('delete');

            } else {
                $('#footer-pc').removeClass('delete');

            }

          });
    </script>
