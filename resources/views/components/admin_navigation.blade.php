<nav class="navbar-expand-lg navbar-light nav1 mt- mb-5">
    <div class="collapse navbar-collapse" id="Navber">
        <ul class="navbar-nav main-navi text-center">
            <a class="nav-link p-4" href="{{ route('home') }}">トップ</a>
            <a class="nav-link p-4" href="{{ route('calender') }}">コントローラー</a>
            <a class="nav-link p-4" href="{{ route('users') }}">顧客管理</a>
            <a class="nav-link p-4" href="{{ route('todaysbooking') }}">本日の予約一覧</a>
            <a class="nav-link  p-4" href="{{ route('bookings') }}">予約管理</a>
            <a class="nav-link  p-4" href="{{ route('admin-blog') }}">ブログ</a>
            <a class="nav-link  p-4" href="{{ route('setting') }}">設定</a>
            <ul class="nav-item navbar-nav">
                <a id="navbarDropdown" class="nav-link dropdown-toggle p-4" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    　{{ Auth::user()->family_name }} {{ Auth::user()->first_name }}　様 <span class="caret"></span>
                </a>
                <div class="dropdown-menu  drop-down-container" aria-labelledby="navbarDropdown">
                    @if (null !== \App\Booking::where('user_id', Auth::user()->id)->where('booking_date_number', Auth::user()->latest_booking_date_number)->where('active', 1)->first() && \App\Booking::where('user_id', Auth::user()->id)->where('active', 1)->first()->booking_date_number > \Carbon\Carbon::now()->format("ndHi"))
                    <a class="dropdown-item" href="{{ route('confirmation') }}">
                        予約確認
                    </a>
                    @endif
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        ログアウト
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </ul>
        </ul>
    </div>
</nav>
