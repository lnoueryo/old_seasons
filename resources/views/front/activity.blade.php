@extends('layouts.front2')

@section('content')

<div class="col-md-4">

    <ul class="list-group">
      @if ($user_activities != NULL)
        @foreach ($user_activities as $user_activity)
          <li class="list-group-item">{{ $user_activity->user_activity }} {{ date('Y年n月j日 G時i分', strtotime($user_activity->created_at))}}</li>
        @endforeach
      @endif
    </ul>
  </div>

@endsection('content')
