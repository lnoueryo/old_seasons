
@extends('layouts.admin')

<link rel="stylesheet" href="{{ asset('css/contents/word.css') }}">

@section('title', 'ニュースの新規作成')

@section('content')

<div class="row">
    <div class="col-sm-6 offset-md-1">
      <div class="panel panel-default">
        <div class="panel-heading strong"><h3 class="">プロフィール</h3></div>
            <table class="table table-striped">
                <tr>
                    <th>氏名</th>
                    <td>{{ $user_form->family_name }} {{ $user_form->first_name }}</td>
                </tr>
                <tr>
                    <th>カタカナ</th>
                    <td>{{ $user_form->kana_family_name }} {{ $user_form->kana_first_name }}</td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>{{ $user_form->email }}</td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>{{ $user_form->phone_number }}</td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>{{ $user_form->gender }}</td>
                </tr>
                <tr>
                    <th>生年月日</th>
                    <td>{{ $user_form->birth_year }}年{{ $user_form->birth_month }}月{{ $user_form->birth_day }}日</td>
                </tr>
                <tr>
                    <th>当サイトからの通知</th>
                    <td>{{ $user_form->mail_magazine }}</td>
                </tr>
                <tr>
                    <th>登録日時</th>
                    <td>{{ date('Y年n月j日 G時i分', strtotime($user_form->created_at)) }}</td>
                </tr>
                <tr>
                    <th>最新予約</th>
                    <td>@if ($booking != NULL && Carbon\Carbon::now()->format("ndHi") < $booking->date_number){{ $booking->booking_date }} @else なし @endif</td>
                </tr>
                <tr>
                    <th>最新予約プラン</th>
                    <td>@if ($booking != NULL && Carbon\Carbon::now()->format("ndHi") < $booking->date_number){{ $booking->booking_plan }} @else なし @endif</td>
                </tr>
                <tr>
                    <th>料金</th>
                    <td>@if ($booking != NULL && Carbon\Carbon::now()->format("ndHi") < $booking->date_number){{ $booking->price }} @else なし @endif</td>
                </tr>
                <tr>
                    <th>メモ</th>
                    <td>{{ $user_form->memo }}</td>
                </tr>
                <tr>
                <th></th>
                        <td class="float-right"><a type="button" class="btn btn-primary" href="">編集</a><a type="button" class="btn btn-danger" href="{{ action('AdminController@calender') }}">戻る</a></td>
                </tr>

            </table>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading strong"><h3>編集履歴</h3></div>
            <ul class="list-group items">
                @if ($activities != NULL)
                  @foreach ($activities as $activity)
                    <li class="list-group-item item"><span>{{ date('Y年n月j日 G時i分', strtotime($activity->created_at))}}</span><br>
                        {{ $activity->booking_date }} {{ $activity->price }} {{ $activity->plan }}<br>
                        {{ $activity->booking_plan }}<br>
                        @if($activity->active==1)<span>予約確定</span>
                        @elseif($activity->active==0){{ date('Y年n月j日 G時i分', strtotime($activity->updated_at))}}<br><span>キャンセル</span>
                        @else{{ date('Y年n月j日 G時i分', strtotime($activity->updated_at))}}<br><span>予約変更</span>@endif
                         </li>
                  @endforeach
                @endif
              </ul>
        </div>
    </div>
</div>



@endsection('content')
