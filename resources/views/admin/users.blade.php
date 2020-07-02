@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <h2>単語一覧</h2>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="" role="button" class="btn btn-primary">新規作成</a>
            <p><br>{{ $cc }}<span>件</span></p>
        </div>
        <div class="col-md-8">
            <form action="{{ action('AdminController@users') }}" method="get">
                <div class="form-group row">

                </div>
                <div class="form-group row">
                    <label class="col-md-2">性別</label>
                    <div class="col-md-6">
                        <select class="form-control" id="cond_user_country" name="gender" value=""  placeholder="なし">
                            　<option value="" {{ ($gender == '')? "selected" : "" }}></option>
                            　<option value="男性" {{ ($gender == '男性')? "selected" : "" }}>男性</option>
                            　<option value="女性" {{ ($gender == '女性')? "selected" : "" }}>女性</option>
                        </select>
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-md-2">フリーワード</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="cond_user" value="{{ $cond_user }}">
                    </div>
                    <div class="col-md-2">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="検索">
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('users') }}" role="button" class="btn btn-danger">リセット</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="list-news col-md-12 mx-auto">
            <div class="row">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th width="5%">@sortablelink('id','ID')</th>
                            <th width="10%">@sortablelink('kana_family_name','氏名')</th>
                            <th width="8%">@sortablelink('booking_counter','予約回数')</th>
                            <th width="10%">@sortablelink('latest_booking_date','最新の予約日時')</th>
                            <th width="10%">@sortablelink('last_booking_date','前回の予約日時')</th>
                            <th width="10%">@sortablelink('review_customer_gives','お客様がつける評価')</th>
                            <th width="10%">@sortablelink('review_to_customer','お客様の評価')</th>
                            <th width="5%"></th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td><a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">{{ $user->id }}</a></td>
                                <td><a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">
                                    {{ \Str::limit($user->family_name, 100) }} {{ \Str::limit($user->first_name, 100) }}</a></td>
                                <td><a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">{{ \Str::limit($user->booking_counter, 3) }}</a></td>
                                <td><a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">{{ \Str::limit($user->latest_booking_date, 15) }}</a></td>
                                <td><a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">{{ \Str::limit($user->last_booking_date, 15) }}</a></td>
                                <td><a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">{{ \Str::limit($user->review_customer_gives, 5) }}</a></td>
                                <td><a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">{{ \Str::limit($user->review_to_customer, 5) }}</a></td>
                                <td class="text-center">
                                    {{--  <div>
                                        <a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">詳細</a>
                                    </div>  --}}
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
{{--  {!! $users->appends([])->render() !!}@endif
@if($users->count())  --}}
