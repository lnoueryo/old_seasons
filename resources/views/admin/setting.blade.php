@extends('layouts.admin')

@section('content')
{{--  <div class="container">
    <div class="row">
        <form class="col-md-12" action="{{ action('AdminController@day_block') }}" method="POST">
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
                    <label class="control-label" for="day[]">動画URL</label>
                    <input type="text" class="form-control col-md-8" name="movie" value="{{ \App\BookingController::find(1)->first()->movie }}" required>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary mt-4" value="登録">
        </form>
    </div>
</div>  --}}
@endsection
