
@extends('layouts.front')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="col-md-12">
                <nav class="navbar-expand-lg navbar-light nav1 mt-4 mb-5">
                    {{--  <button type="button" class="navbar-toggler abc" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
                        <span class="navbar-toggler-icon"></span>
                    </button>  --}}
                    <div class="collapse navbar-collapse" id="Navber">
                        <ul class="navbar-nav main-nav abc col-md-12">
                            @guest
                            <li class="nav-item p-3 active">
                            <a class="nav-link mx-2" href="{{ route('home') }}">トップ</a>
                            </li>
                            <li class="nav-item p-3">
                            <a class="nav-link mx-2" href="#">ブログ</a>
                            </li>
                            <li class="nav-item p-3">
                            <a class="nav-link mx-2" href="{{ route('concept') }}">コンセプト</a>
                            </li>
                            <li class="nav-item p-3">
                            <a class="nav-link mx-1" href="{{ route('menu') }}">メニュー</a>
                            </li>
                            <li class="nav-item p-3">
                            <a class="nav-link mx-1" href="{{ route('contact') }}">コンタクト</a>
                            </li>
                            <li class="nav-item p-3">
                            <a class="nav-link mx-1" href="{{ route('access') }}">アクセス</a>
                            </li>
                            <li class="nav-item p-3">
                                <a class="nav-link mx-1" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item p-3">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                            @else
                            @if(Auth::user()->admin == true)
                            <li class="nav-item p-3 active">
                            <a class="nav-link mx-1" href="{{ route('calender') }}">アドミン</a>
                            </li>
                            @else
                            <li class="nav-item p-3 active">
                            <a class="nav-link mx-2" href="{{ route('home') }}">トップ</a>
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
                            <a class="nav-link mx-2" href="{{ route('contact') }}">コンタクト</a>
                            </li>
                            <li class="nav-item p-3">
                            <a class="nav-link mx-2" href="{{ route('access') }}">アクセス</a>
                            </li>
                            <ul class="text-center navbar-nav">
                            <li class="nav-item p-3">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle mx-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->family_name }} {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu  drop-down-container" aria-labelledby="navbarDropdown">
                                    @if (\App\Booking::where('user_id', Auth::user()->id)->first() !='')
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
                            @endguest
                    </div>
                </nav>
            </div>
            <ul class="address col-md-6 offset-md-3 text-center mt-4 mb-5">
                <li>福岡市中央区六本松</li>
                <li><p>4-9-7ジャパンパル101</p></li>
                <li class="tel">TEL.092-775-1821</li>
            </ul>
            <ul class="introduction col-md-12 text-center mt-4 mb-5">
                <li class="mt-2">美容室SesSons(シーズン)はお客様の四季折々のヘアースタイルを常に提供させて頂けたらいいな、と言う思いでオープンしました。</li>
                <li>誰でも来やすいアットホームな店つくりを心がけておりますので気軽に立ち寄っていただけたら幸いです。</li>
                <li><span class="name">代表　道下 雅巳</span></li>
            </ul>
            <div class="balloon-container">
            <div class="balloon col-md-4 offset-md-7 delete">
                <p class="">カットのみの方はカレンダーの〇からクイック予約をご利用いただけます。</p>
            </div>
        </div>

            <div class="vacancy text-center">Quick Booking Table</div>
            <ul id="tabMenu" class="clearfix">
                <li><a class="man" href="#tabBox1">男性カットのみ</a></li>
                <li>
                    <div class="toggle-switch text-center">
                    <input id="toggle" class="toggle-input" type='checkbox' />
                    <label for="toggle" class="toggle-label"/>
                      <span></span>
                  </div>
                </li>
                <li><a class="woman" href="#tabBox2">女性カットのみ</a></li>
            </ul>

            @guest
            <div id="tabBoxes">
                <div id="tabBox1">
                    <table class="table table-responsive table-striped align-middle mt-2 calender">
                        <thead class="thead-light">
                            <tr>
                            </tr>
                            <tr class="text-center">
                                <th class="row2" width="10%">Man</th>
                                @for ($i = 1; $i <= 14; $i++)
                                    <th class="row2" width="3%">{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("DD日")  }}<br>{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("(ddd)")  }}</th>
                                @endfor
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @for($j = 0; $j <= 18; $j++)
                            <tr>
                                <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
                                @for($i = 1; $i <= 14; $i++)
                                @if(null !==\App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() ||  \App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first() || \Carbon\Carbon::now() > \Carbon\Carbon::today()->addDays($i-1)->addHours(8)->addMinutes($j*30+30) || null !==\App\BookingController::where('day_time', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() || null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->isoformat("YYYY年MM月DD日"))->first())
                                <td>×</td>
                                @else
                                <td><a href="{{ action('HomeController@reservation', ['length_of_time' => '30分', 'length_of_time' => '1時間', 'price' => '2900円', 'cut' => 'カット',
                                    'booking_date_month' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n"),
                                    'booking_date_day' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("d"),
                                    'booking_date_hour' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("H"),
                                    'booking_date_minute' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("i")]) }}">〇</a></td>
                                @endif
                                @endfor
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                <form name="lady1">
                    <div id="tabBox2">
                        <table class="table table-responsive table-striped table-hover text-center align-middle mt-2 calender">
                            <thead class="thead-light">
                                <tr>
                                </tr>
                                <tr>
                                    <th width="10%">Lady</th>
                                    @for ($i = 1; $i <= 14; $i++)
                                        <th width="3%">{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("DD日")  }}<br>{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("(ddd)")  }}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @for($j = 0; $j <= 17; $j++)
                                <tr>
                                    <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
                                    @for($i = 1; $i <= 14; $i++)
                                    @if(null !==\App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() ||  \App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first() || \Carbon\Carbon::now() > \Carbon\Carbon::today()->addDays($i-1)->addHours(8)->addMinutes($j*30+30) || null !==\App\BookingController::where('day_time', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() || null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->isoformat("YYYY年MM月DD日"))->first())
                                    <td>
                                        <input class="calender-cell" type="text" name="date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("mdHi")}}" value="×" size="1" disabled>

                                    </td>
                                    @else
                                    <td>
                                        <input class="calender-cell" type="button" onclick="location.href='{{ action('HomeController@reservation', ['booking_date' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月d日 H:i"),
                                        'length_of_time' => '30分', 'price' => '2900円', 'cut' => 'カット',
                                        'booking_date_month' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n"),
                                        'booking_date_day' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("d"),
                                        'booking_date_hour' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("H"),
                                        'booking_date_minute' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("i")]) }}'" name="date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("mdHi")}}" value="〇" size="1" >

                                    </td>
                                    @endif
                                    @endfor
                                </tr>
                                @endfor
                                <tr>
                                    <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
                                    @for($i = 1; $i <= 14; $i++)
                                    <td>
                                        ×
                                    </td>

                                    @endfor
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
            @else


          @if(null !== \App\Booking::where('user_id', Auth::user()->id)->first() && \App\Booking::where('user_id', Auth::user()->id)->first()->booking_date_number > \Carbon\Carbon::now()->format("ndHi"))
            <div id="tabBoxes">
                <div id="tabBox1">
                    <table class="table table-responsive table-striped table-hover align-middle mt-2 calender">
                        <thead class="thead-light">
                            <tr>
                            </tr>
                            <tr class="text-center">
                                <th class="row2" width="10%">Man</th>
                                @for ($i = 1; $i <= 14; $i++)
                                    <th class="row2" width="3%">{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("DD日")  }}<br>{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("(ddd)")  }}</th>
                                @endfor
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @for($j = 0; $j <= 18; $j++)
                            <tr>
                                <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
                                @for($i = 1; $i <= 14; $i++)
                                @if(null !==\App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() ||  \App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first() || \Carbon\Carbon::now() > \Carbon\Carbon::today()->addDays($i-1)->addHours(8)->addMinutes($j*30+30) || null !==\App\BookingController::where('day_time', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() || null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->isoformat("YYYY年MM月DD日"))->first())
                                <td>×</td>
                                @else
                                <td>〇</td>
                                @endif
                                @endfor
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>

                <form name="lady2">
                    <div id="tabBox2">
                        <table class="table table-responsive table-striped text-center align-middle mt-2 calender">
                            <thead class="thead-light">
                                <tr>
                                </tr>
                                <tr>
                                    <th width="10%">Lady</th>
                                    @for ($i = 1; $i <= 14; $i++)
                                        <th width="3%">{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("DD日")  }}<br>{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("(ddd)")  }}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @for($j = 0; $j <= 17; $j++)
                                <tr>
                                    <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*60)->format("H:i") }}</th>
                                    @for($i = 1; $i <= 14; $i++)
                                    @if(null !==\App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() ||  \App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first() || \Carbon\Carbon::now() > \Carbon\Carbon::today()->addDays($i-1)->addHours(8)->addMinutes($j*30+30) || null !==\App\BookingController::where('day_time', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() || null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->isoformat("YYYY年MM月DD日"))->first())
                                    <td>×</td>
                                    @else
                                    <td>〇</td>
                                    @endif
                                    @endfor
                                </tr>
                                @endfor
                                <tr>
                                    <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
                                    @for($i = 1; $i <= 14; $i++)
                                    <td>
                                        ×
                                    </td>

                                    @endfor
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
            @else


            <div id="tabBoxes">
                <div id="tabBox1">
                    <table class="table table-responsive table-striped table-hover align-middle mt-2 calender">
                        <thead class="thead-light">
                            <tr>
                            </tr>
                            <tr class="text-center">
                                <th class="row2" width="10%">Man</th>
                                @for ($i = 1; $i <= 14; $i++)
                                    <th class="row2" width="3%">{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("DD日")  }}<br>{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("(ddd)")  }}</th>
                                @endfor
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @for($j = 0; $j <= 18; $j++)
                            <tr>
                                <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
                                @for($i = 1; $i <= 14; $i++)
                                @if(null !== \App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() ||  \App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first() || \Carbon\Carbon::now() > \Carbon\Carbon::today()->addDays($i-1)->addHours(8)->addMinutes($j*30+30) || null !==\App\BookingController::where('day_time', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() || null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->isoformat("YYYY年MM月DD日"))->first())
                                <td>×</td>
                                @else
                                <td><a href="{{ action('HomeController@reservation', ['length_of_time' => '30分', 'price' => '2900円', 'cut' => 'カット',
                                    'booking_date_month' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n"),
                                    'booking_date_day' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("d"),
                                    'booking_date_hour' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("H"),
                                    'booking_date_minute' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("i")]) }}">〇</a></td>
                                @endif
                                @endfor
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>

                <form name="lady3">
                    <div id="tabBox2">
                        <table class="table table-responsive table-striped table-hover text-center align-middle mt-2 calender">
                            <thead class="thead-light">
                                <tr>
                                    {{--  <th colspan="16">SeaSons 空き状況 女性カットのみ</th>  --}}
                                </tr>
                                <tr>
                                    <th width="10%">Lady</th>
                                    @for ($i = 1; $i <= 14; $i++)
                                        <th width="3%">{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("DD日")  }}<br>{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("(ddd)")  }}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @for($j = 0; $j <= 17; $j++)
                                <tr>
                                    <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
                                    @for($i = 1; $i <= 14; $i++)
                                    @if(null !== \App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() ||  \App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first() || \Carbon\Carbon::now() > \Carbon\Carbon::today()->addDays($i-1)->addHours(8)->addMinutes($j*30+30) || null !==\App\BookingController::where('day_time', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() || null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->isoformat("YYYY年MM月DD日"))->first())
                                    <td>
                                        <input class="calender-cell" type="text" name="date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("mdHi")}}" value="×" size="1" disabled>
                                    </td>
                                    @else
                                    <td>
                                        <input class="calender-cell" type="button" onclick="location.href='{{ action('HomeController@reservation', ['booking_date' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月d日 H:i"),
                                        'length_of_time' => '30分', 'price' => '2900円', 'cut' => 'カット',
                                        'booking_date_month' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n"),
                                        'booking_date_day' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("d"),
                                        'booking_date_hour' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("H"),
                                        'booking_date_minute' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("i")]) }}'" name="date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("mdHi")}}" value="〇" size="1" >
                                    </td>
                                    @endif
                                    @endfor
                                </tr>
                                @endfor
                                <tr>
                                    <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
                                    @for($i = 1; $i <= 14; $i++)
                                    <td>
                                        ×
                                    </td>

                                    @endfor
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
            @endif
            @endguest



            <ul id="tabMenu" class="clearfix">
                <li><a class="man" href="#tabBox1">男性カットのみ</a></li>
                <li>
                      <span>&nbsp;&nbsp;||&nbsp;&nbsp;</span>

                </li>
                <li><a class="woman" href="#tabBox2">女性カットのみ</a></li>
            </ul>
            <div class="booking-btn-flame text-center">
                <div class="booking-btn-container">
                    <a class="justify-content-center" href="{{ action('HomeController@reservationPlan') }}"><button class="btn sub-button mt-3 text-center">予約へ進む</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="booking-btn-flame-sm text-center delete">
    <div class="booking-btn-container">
        <a class="justify-content-center" href="{{ action('HomeController@reservationPlanSM') }}"><button class="btn booking-btn mt-3 text-center">予約へ進む</button></a>
    </div>
</div>





    <style>
        .disabled {
            pointer-events: none;
            color: black;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
    <script>




    for (i=0; i< document.lady3.length-29; i++) {

        if(document.lady3.elements[i+14].value == "×") {
            document.lady3.elements[i].value = "×";
            document.lady3.elements[i].classList.add('disabled');

        }

    }


    for (i=0; i< document.lady1.length-29; i++) {

        if(document.lady1.elements[i+14].value == "×") {
            document.lady1.elements[i].value = "×";
            document.lady1.elements[i].classList.add('disabled');

        }

    }

    for (i=0; i< document.lady2.length-29; i++) {

        if(document.lady2.elements[i+14].value == "×") {
            document.lady2.elements[i].value = "×";
            document.lady2.elements[i].classList.add('disabled');

        }

    }





    </script>

{{-- <div>{{ \App\User::where('email', '123@gmail.com')->first()->id }}</div> --}}
{{--  {{ \App\User::where('latest_booking_date', '6月14日 10:00')->first()->id }}  --}}


@endsection

