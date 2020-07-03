@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{ asset('css/admin/PC/bookings.css') }}">
<div class="container">
    <div class="row">
        <h2>予約一覧</h2>
    </div>
    <div class="row">
        <div class="list-news col-md-12 mx-auto">
            <div class="row">
                <table class="table table-dark booking-table">
                    <thead>
                        <tr>
                            <th width="1%">ID</th>
                            <th class="text-center" width="11%">@sortablelink('updated_at','予約した時間')</th>
                            <th width="9%">@sortablelink('first_name','氏名')</th>
                            <th width="10%">@sortablelink('active','ステータス')</th>
                            <th width="5%">性別</th>
                            <th width="6%">@sortablelink('booking_date_number','予約日')</th>
                            <th width="7%">@sortablelink('price','料金')</th>
                            <th width="17%">プラン</th>
                        </tr>
                    </thead>
                    @if ( $bookings->hasPages() )
                    @if ($bookings->lastPage() > 1)
                    <ul class="pagination">
                        <li class="page-item {{ ($bookings->currentPage() == 1) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $bookings->url(1) }}">First Page</a>
                         </li>
                        <li class="page-item {{ ($bookings->currentPage() == 1) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $bookings->url(1) }}">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        @for ($i = 1; $i <= $bookings->lastPage(); $i++)
                            <li class="page-item {{ ($bookings->currentPage() == $i) ? ' active' : '' }}">
                                <a class="page-link" href="{{ $bookings->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="page-item {{ ($bookings->currentPage() == $bookings->lastPage()) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $bookings->url($bookings->currentPage()+1) }}" >
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                        <li class="page-item {{ ($bookings->currentPage() == $bookings->lastPage()) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $bookings->url($bookings->lastPage()) }}">Last Page</a>
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
                        @if($bookings->count())
                        @foreach($bookings as $booking)
                            <tr>
                                <td class="align-middle"><a href="{{ action('AdminController@profile', ['id' => $booking->user_id]) }}">{{ $booking->user_id }}</a></td>
                                <td class="align-middle text-center"><a href="{{ action('AdminController@profile', ['id' => $booking->user_id]) }}">
                                    {{ \Str::limit($booking->updated_at->format('n月d日 H:i'), 15) }}</a></td>
                                <td class="align-middle"><a href="{{ action('AdminController@profile', ['id' => $booking->user_id]) }}">
                                    {{ \Str::limit(\App\User::find($booking->user_id)->family_name, 100) }} {{ \Str::limit(\App\User::find($booking->user_id)->first_name, 100) }}</a></td>
                                <td class="align-middle"><a href="{{ action('AdminController@profile', ['id' => $booking->user_id]) }}">
                                    @if($booking->active==1)<span>予約確定</span>
                                    @elseif($booking->active==0)<span>キャンセル</span>
                                    @else<span>予約変更</span>@endif
                                </a></td>
                                <td class="align-middle"><a href="{{ action('AdminController@profile', ['id' => $booking->user_id]) }}">{{ \Str::limit(\App\User::find($booking->user_id)->gender, 5) }}</a></td>
                                <td class="align-middle"><a href="{{ action('AdminController@profile', ['id' => $booking->user_id]) }}">
                                    {{ \Str::limit($booking->booking_date, 15) }}</a></td>
                                <td class="align-middle"><a href="{{ action('AdminController@profile', ['id' => $booking->user_id]) }}">{{ \Str::limit($booking->price, 12) }}</a></td>
                                <td class="align-middle"><a href="{{ action('AdminController@profile', ['id' => $booking->user_id]) }}"><span class="booking-plan">{{ \Str::limit($booking->booking_plan, 100) }}</span></a></td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
