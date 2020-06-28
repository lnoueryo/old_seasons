
@extends('layouts.admin')

<link rel="stylesheet" href="{{ asset('css/contents/word.css') }}">

@section('title', 'ニュースの新規作成')

@section('content')

<div class="container col-md-11 offset-md-1">
<h3 class="">プロフィール</h3>
<div class="row" style="margin-top: 30px;">

<table class="table table-striped col-md-6 float-left">
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
        <th>メモ</th>
        <td>{{ $user_form->memo }}</td>
    </tr>
    <tr>
    {{--  <th>memo</th>
            <td class="col-md-4 float-right"><a type="button" class="btn btn-primary" href="{{ action('Admin\UserController@edit', ['id' => $user_form->id]) }}">編集</a>  --}}
            <td><a type="button" class="btn btn-danger" href="{{ action('AdminController@calender') }}">戻る</a></td>
    </tr>

</table>
    {{-- <div class="col-md-4">
       <h2>編集履歴</h2>
      <ul class="list-group">
        @if ($user_activities != NULL)
          @foreach ($user_activities as $user_activity)
            <li class="list-group-item">{{ $user_activity->user_activity }} {{ date('Y年n月j日 G時i分', strtotime($user_activity->created_at))}}</li>
          @endforeach
        @endif
      </ul>
    </div> --}}
</div>
</div>

@endsection('content')
