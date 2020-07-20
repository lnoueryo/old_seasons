<table class="table-responsive mt-2 calender" border="5" v-cloak>
    <thead>
        <tr class="text-center">
            <th width="15%">{{ Carbon\Carbon::now()->format('n月') }}</th>
            <th v-for="date in dates" width="3%">@{{ date.date }}<br>@{{ date.date2 }}</th>
        </tr>
    </thead>
    <tbody>
        @for($j = 0; $j <= 18; $j++)
        <tr>
            <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
            @for($i = 1; $i <= 14; $i++)
                @if (\App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first())
                    <td class="align-middle text-center">
                        <input class="calender-cell text-center" type="text" placeholder="{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")}}" value="×" size="1" disabled>
                    </td>
                @else
                <td class="align-middle text-center">
                    @if (null !== $user_booking && $user_booking->booking_date_number > \Carbon\Carbon::now()->format("ndHi"))
                    <input class="calender-cell" type="button"
                    value="〇" placeholder="{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")}}" size="1">
                    @else
                    <input class="calender-cell" type="button"
                    onclick="location.href='{{ action('HomeController@reservation', ['booking_date' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月d日 H:i"),
                    'cut' => $cut, 'perm' => $perm, 'color' => $color, 'treatment' => $treatment, 'spa' => $spa,
                    'price' => $price, 'length_of_time' => $length_of_time,
                    'booking_date_month' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n"),
                    'booking_date_day' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("d"),
                    'booking_date_hour' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("H"),
                    'booking_date_minute' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("i")]) }}'"
                    value="〇" placeholder="{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")}}" size="1" >
                    @endif
                </td>
                @endif
            @endfor
        </tr>
        @endfor
    </tbody>
</table>
<input id="length_of_time" type="hidden" value="{{ $length_of_time }}">

