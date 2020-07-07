@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{ asset('css/admin/PC/todaysbooking.css') }}">
<div class="container">
    <div class="row">
        <div class="list-news col-md-12 mx-auto">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th width="2%">ID</th>
                            <th width="6%">氏名</th>
                            <th width="2%">性別</th>
                            <th width="8%">予約時間</th>
                            <th width="2%">料金</th>
                            <th width="20%">プラン</th>
                            <th width="5%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($today_users as $today_user)
                            <tr>
                                <td class="align-middle"><a href="{{ action('AdminController@profile', ['id' => $today_user->id]) }}">{{ $today_user->id }}</a></td>
                                <td class="align-middle"><a href="{{ action('AdminController@profile', ['id' => $today_user->id]) }}">
                                    {{ \Str::limit($today_user->family_name, 100) }} {{ \Str::limit($today_user->first_name, 100) }}</a></td>
                                <td class="align-middle"><a href="{{ action('AdminController@profile', ['id' => $today_user->id]) }}">{{ \Str::limit($today_user->gender, 15) }}</a></td>

                                <td class="align-middle"><a href="{{ action('AdminController@profile', ['id' => $today_user->id]) }}">
                                    @if(null !== \App\Booking::where('user_id', $today_user->id)->where('active', 1)->first() &&
                                    \App\Booking::where('user_id', $today_user->id)->where('active', 1)->first()->booking_date_number > Carbon\Carbon::today()->format("ndHi"))
                                    {{ \Str::limit(\App\Booking::where('user_id', $today_user->id)->where('active', 1)->first()->booking_date, 15) }}@endif</a></td>

                                <td class="align-middle"><a href="{{ action('AdminController@profile', ['id' => $today_user->id]) }}">
                                    @if(null !== \App\Booking::where('user_id', $today_user->id)->where('active', 1)->first() &&
                                    \App\Booking::where('user_id', $today_user->id)->where('active', 1)->first()->booking_date_number > Carbon\Carbon::today()->format("ndHi"))
                                    {{ \Str::limit(\App\Booking::where('user_id', $today_user->id)->where('active', 1)->first()->price, 15) }}@endif</a></td>
                                <td class="align-middle"><a href="{{ action('AdminController@profile', ['id' => $today_user->id]) }}">
                                    @if(null !== \App\Booking::where('user_id', $today_user->id)->where('active', 1)->first() &&
                                    \App\Booking::where('user_id', $today_user->id)->where('active', 1)->first()->booking_date_number > Carbon\Carbon::today()->format("ndHi"))
                                    <span class="booking-plan">{{ \Str::limit(\App\Booking::where('user_id', $today_user->id)->where('active', 1)->first()->booking_plan, 100) }}</span>@endif</a></td>
                                <td class="align-middle">
                                    <div>
                                        <a href="{{ action('AdminController@profile', ['id' => $today_user->id]) }}">詳細</a>
                                    </div>
                                    <div>
                                        {{--  <a href="{{ action('Admin\UserController@delete', ['id' => $today_user->id]) }}">削除</a>  --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>
@endsection
