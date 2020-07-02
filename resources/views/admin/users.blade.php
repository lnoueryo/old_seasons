@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{ asset('css/admin/PC/users.css') }}">
<div class="container">
    <div class="row">
        <h2>顧客一覧</h2>
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
                        <select class="form-control" id="cond_user_country" name="gender" value="{{ $gender }}"  placeholder="なし">
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
                <table class="table table-dark user-table">
                    <thead>
                        <tr>
                            <th width="5%">@sortablelink('id','ID')</th>
                            <th width="10%">@sortablelink('kana_family_name','氏名')</th>
                            <th width="8%">@sortablelink('booking_counter','予約回数')</th>
                            <th width="6%">@sortablelink('gender','性別')</th>
                            <th width="12%">@sortablelink('booking_date_number','最新の予約日時')</th>
                            <th width="10%">@sortablelink('updated_at','予約した時間')</th>
                            <th width="10%">@sortablelink('mail_magazine','メルマガ')</th>
                            <th width="5%"></th>
                        </tr>
                    </thead>
                    @if ( $users->hasPages() )
                    @if ($users->appends(['gender' => $gender, 'cond_user' => $cond_user])->lastPage() > 1)
                    <ul class="pagination">
                        <li class="page-item {{ ($users->currentPage() == 1) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $users->url(1) }}">First Page</a>
                         </li>
                        <li class="page-item {{ ($users->currentPage() == 1) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $users->url(1) }}">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        @for ($i = 1; $i <= $users->appends(['gender' => $gender, 'cond_user' => $cond_user])->lastPage(); $i++)
                            <li class="page-item {{ ($users->currentPage() == $i) ? ' active' : '' }}">
                                <a class="page-link" href="{{ $users->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="page-item {{ ($users->currentPage() == $users->lastPage()) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $users->url($users->currentPage()+1) }}" >
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                        <li class="page-item {{ ($users->currentPage() == $users->lastPage()) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $users->url($users->lastPage()) }}">Last Page</a>
                        </li>
                    </ul>
                    @endif
                    @else
                    <ul class="pagination">
                        <li class="page-item  disabled"><a href="" class="page-link">First Page</a></li>
                        <li class="page-item  disabled"><a href="" class="page-link"><span aria-hidden="true">«</span></a></li>
                        <li class="page-item  disabled"><a href="" class="page-link">1</a></li>
                        <li class="page-item disabled"><a href="" class="page-link"><span aria-hidden="true">»</span></a></li>
                        <li class="page-item disabled"><a href="" class="page-link">Last Page</a></li></ul>
                    @endif
                    <tbody>
                        @if($users->count())
                        @foreach($users as $user)
                            <tr>
                                <td><a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">{{ $user->id }}</a></td>
                                <td><a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">
                                    {{ \Str::limit($user->family_name, 100) }} {{ \Str::limit($user->first_name, 100) }}</a></td>
                                <td><a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">{{ \Str::limit($user->booking_counter, 3) }}</a></td>
                                <td><a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">{{ \Str::limit($user->gender, 15) }}</a></td>
                                <td><a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">
                                    @if(null !== \App\Booking::where('user_id', $user->id)->where('active', 1)->first() &&
                                    \App\Booking::where('user_id', $user->id)->where('active', 1)->first()->booking_date_number > Carbon\Carbon::now()->format("ndHi"))
                                    {{ \Str::limit(\App\Booking::where('user_id', $user->id)->where('active', 1)->first()->booking_date, 15) }}@endif</a></td>
                                <td><a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">
                                    @if(null !== \App\Booking::where('user_id', $user->id)->where('active', 1)->first() &&
                                    \App\Booking::where('user_id', $user->id)->where('active', 1)->first()->booking_date_number > Carbon\Carbon::now()->format("ndHi"))
                                    {{ \Str::limit(\App\Booking::where('user_id', $user->id)->where('active', 1)->first()->created_at->format("n月d日 H:i"), 15) }}@endif</a></td>
                                <td><a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">{{ \Str::limit($user->mail_magazine, 12) }}</a></td>
                                {{--  <td><a href="{{ action('AdminController@profile', ['id' => $user->id]) }}">{{ \Str::limit($user->mail_magazine, 5) }}</a></td>  --}}
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
                        {{--  {!! $users->appends(['gender' => $gender, 'cond_user' => $cond_user])->links() !!}  --}}
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
{{--  {!! $users->appends([])->render() !!}@endif
@if($users->count())  --}}
