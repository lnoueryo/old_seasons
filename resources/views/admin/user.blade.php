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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="sample.css" type="text/css" media="screen and (max-width:300px)">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
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
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
                <img src="image/headermain2.png" class="img-fluid">
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
    </div>
    <div class="container">
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="10%">氏名</th>
                                <th width="5%">予約回数</th>
                                <th width="10%">最新の予約日時</th>
                                <th width="10%">前回の予約日時</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th>{{ $user->id }}</th>
                                    <td>{{ \Str::limit($user->family_name, 100) }} {{ \Str::limit($user->first_name, 100) }}</td>
                                    <td>{{ \Str::limit($user->booking_counter, 3) }}</td>
                                    <td>{{ \Str::limit($user->latest_booking_date, 15) }}</td>
                                    <td>{{ \Str::limit($user->last_booking_date, 15) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <table class="table table-responsive table-striped table-hover text-center align-middle mt-5 ml-3 calender">
                <thead class="thead-light">
                    <tr>
                        <th colspan="16">SeaSons 空き状況</th>
                    </tr>
                    <tr>
                        <th width="10%"></th>
                        @for ($i = 1; $i <= 14; $i++)
                        @if(null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->isoformat("YYYY年MM月DD日"))->first())
                            <th width="3%"><a href="{{ action('AdminController@day_of_the_week_unblock', ['day' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->isoformat("YYYY年MM月DD日")]) }}">{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("DD日")  }}<br>{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("(ddd)")  }}</a></th>
                        @else
                            <th width="3%"><a href="{{ action('AdminController@day_of_the_week_block', ['day' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->isoformat("YYYY年MM月DD日")]) }}">{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("DD日")  }}<br>{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("(ddd)")  }}</a></th>
                        @endif
                            @endfor
                    </tr>
                </thead>
                <tbody>
                    @for($j = 0; $j <= 18; $j++)
                    <tr>
                        <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
                        @for($i = 1; $i <= 14; $i++)
                        @if(null !==\App\User::where('latest_booking_date', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月j日 H:i"))->first() || \Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd")== '火' || \Carbon\Carbon::now() > \Carbon\Carbon::today()->addDays($i-1)->addHours(8)->addMinutes($j*30+30))
                        <td>×</td>
                        @elseif(null !==\App\BookingController::where('day_time', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月j日 H:i"))->first() || null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->isoformat("YYYY年MM月DD日"))->first())
                        <td class="bg-danger"><a href="{{ action('AdminController@day_unblock', ['time' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月j日 H:i")]) }}">×</a></td>
                        @else
                        <td><a href="{{ action('AdminController@day_block', ['time' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月j日 H:i")]) }}">〇</a></td>
                        @endif
                        @endfor
                    </tr>
                    @endfor
                </tbody>
            </table>
    </div>
</body>
</html>
