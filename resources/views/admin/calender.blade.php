@extends('layouts.admin')

@section('content')
<div class="container">
    <form action="{{ action('AdminController@day_block') }}" method="POST">
        <label class="control-label" for="day[]">店休日</label>
            <div class="radio">
                <p>
                    <input type="checkbox" name="day[]" value="日" {{ (App\BookingController::find(1)->where('day', 'like', '%'."日". '%')->first())? "checked" : "" }}>日
                    <input type="checkbox" name="day[]" value="月" {{ (App\BookingController::find(1)->where('day', 'like', '%'."月". '%')->first())? "checked" : "" }}>月
                    <input type="checkbox" name="day[]" value="火" {{ (App\BookingController::find(1)->where('day', 'like', '%'."火". '%')->first())? "checked" : "" }}>火
                    <input type="checkbox" name="day[]" value="水" {{ (App\BookingController::find(1)->where('day', 'like', '%'."水". '%')->first())? "checked" : "" }}>水
                    <input type="checkbox" name="day[]" value="木" {{ (App\BookingController::find(1)->where('day', 'like', '%'."木". '%')->first())? "checked" : "" }}>木
                    <input type="checkbox" name="day[]" value="金" {{ (App\BookingController::find(1)->where('day', 'like', '%'."金". '%')->first())? "checked" : "" }}>金
                    <input type="checkbox" name="day[]" value="土" {{ (App\BookingController::find(1)->where('day', 'like', '%'."土". '%')->first())? "checked" : "" }}>土
                </p>
                <input type="hidden" class="form-control col-md-8" name="movie" value="{{ \App\BookingController::find(1)->first()->movie }}" required>
            </div>
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary mt-4" value="登録">
    </form>
</div>

<form name="Form">
<table class="table-responsive mt-2 calender text-center" border="5">
    <thead>
        <tr>
            <th width="10%"></th>
            @for ($i = 1; $i <= 14; $i++)
            @if(null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->format('nd'))->first())
                <th width="3%"><a href="{{ action('AdminController@day_of_the_week_unblock', ['day_of_the_week' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->format('nd')]) }}">{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("DD日")  }}<br>{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("(ddd)")  }}</a></th>
            @else
                <th width="3%"><a href="{{ action('AdminController@day_of_the_week_block', ['day_of_the_week' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->format('nd')]) }}">{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("DD日")  }}<br>{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("(ddd)")  }}</a></th>
            @endif
            @endfor
        </tr>
    </thead>
    <tbody>
        {{--  @for($j = 0; $j <= 18; $j++)
        <tr>
            <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
            @for($i = 1; $i <= 14; $i++)
                @if (\App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first())
                    <td class="align-middle text-center">
                        <input class="calender-cell text-center" type="text" name="" placeholder="{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")}}" value="×" size="1" disabled>
                    </td>
                @else
                <td class="align-middle text-center">
                    <a href="{{ action('AdminController@day_time_block', ['day_time' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")]) }}">〇</a>
                </td>
                @endif
            @endfor
        </tr>
        @endfor  --}}
        @for($j = 0; $j <= 18; $j++)
        <tr class="text-center">
            <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
            @for($i = 1; $i <= 14; $i++)
            {{--  予約がある場合×  --}}
            @if(null !== \App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->where('active', 1)->first())
            <td class="time{{ \App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->where('active', 1)->first()->length_of_time }}">
            <a class="text-secondry" href="{{ action('AdminController@profile', ['id' => \App\Booking::where('booking_date_number', Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first()->user_id]) }}">予約</a></td>
            {{--  定休日×  --}}
            @elseif(\App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first() || \Carbon\Carbon::now() > \Carbon\Carbon::today()->addDays($i-1)->addHours(8)->addMinutes($j*30+30))
            <td>×</td>

            @elseif(null !==\App\BookingController::where('day_time', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first())
            <td class="bg-danger"><a class="" href="{{ action('AdminController@day_time_unblock', ['day_time' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")]) }}">×</a></td>

            @elseif(null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("nd"))->first())
            <td class="bg-danger">×</a></td>

            @else
            <td><a href="{{ action('AdminController@day_time_block', ['day_time' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")]) }}">〇</a></td>
            @endif
            @endfor
        </tr>
        @endfor
    </tbody>
</table>
{{--  <input id="length_of_time" type="hidden" value="{{ $length_of_time }}">  --}}
</form>



    <script>
        const booking = @json($json);
        const twoHoursFromNow = {{ \Carbon\Carbon::now()->addHours(2)->format("ndHi") }};

    </script>
    <script src="{{ asset('js/admin_calender.js') }}" defer></script>
@endsection
