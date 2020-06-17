@extends('layouts.admin')

@section('content')
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
                            <th width="10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($today_users as $today_user)
                            <tr>
                                <th>{{ $today_user->id }}</th>
                                <td>{{ \Str::limit($today_user->family_name, 100) }} {{ \Str::limit($today_user->first_name, 100) }}</td>
                                <td>{{ \Str::limit($today_user->booking_counter, 3) }}</td>
                                <td>{{ \Str::limit($today_user->latest_booking_date, 15) }}</td>
                                <td>{{ \Str::limit($today_user->last_booking_date, 15) }}</td>
                                <td class="text-center">
                                    <div>
                                        <a href="{{ action('AdminController@profile', ['id' => $today_user->id]) }}">詳細</a>
                                    </div>
                                    <div>
                                        {{--  <a href="{{ action('Admin\UserController@delete', ['id' => $user->id]) }}">削除</a>  --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
