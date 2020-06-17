
@extends('layouts.front')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <ul class="address col-md-6 offset-md-3 text-center mt-2">
                <li>福岡市中央区六本松</li>
                <li><p>4-9-7ジャパンパル101</p></li>
                <li class="tel">TEL.092-775-1821</li>
            </ul>
            <ul class="introduction col-md-12 text-center mt-4 mb-5">
                <li class="mt-2">美容室SesSons(シーズン)はお客様の四季折々のヘアースタイルを常に提供させて頂けたらいいな、と言う思いでオープンしました。</li>
                <li>誰でも来やすいアットホームな店つくりを心がけておりますので気軽に立ち寄っていただけたら幸いです。</li>
                <li><span class="name">代表　道下 雅巳</span></li>
            </ul>
            <table class="table table-responsive table-striped table-hover text-center align-middle mt-5 ml-3 calender">
                <thead class="thead-light">
                    <tr>
                        <th colspan="16">SeaSons 空き状況</th>
                    </tr>
                    <tr>
                        <th width="10%"></th>
                        @for ($i = 1; $i <= 14; $i++)
                            <th width="3%">{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("DD日")  }}<br>{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("(ddd)")  }}</th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    @for($j = 0; $j <= 18; $j++)
                    <tr>
                        <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
                        @for($i = 1; $i <= 14; $i++)
                        @if(null !==\App\User::where('latest_booking_date', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月j日 H:i"))->first() ||  \App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first() || \Carbon\Carbon::now() > \Carbon\Carbon::today()->addDays($i-1)->addHours(8)->addMinutes($j*30+30) || null !==\App\BookingController::where('day_time', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月j日 H:i"))->first() || null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->isoformat("YYYY年MM月DD日"))->first())
                        <td>×</td>
                        @else
                        <td><a href="{{ action('HomeController@reservation', ['time' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月j日 H:i")]) }}">〇</a></td>
                        @endif
                        @endfor
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>

{{-- <div>{{ \App\User::where('email', '123@gmail.com')->first()->id }}</div> --}}
{{--  {{ \App\User::where('latest_booking_date', '6月14日 10:00')->first()->id }}  --}}


@endsection

