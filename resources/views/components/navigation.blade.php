<nav class="navbar-expand-lg navbar-light nav1 mt- mb-5">
    <div class="collapse navbar-collapse" id="Navber">
        <ul class="navbar-nav main-navi text-center">
            @guest
            <a class="nav-link p-4" href="{{ route('home') }}">トップ</a>
            <a class="nav-link p-4" href="{{ route('concept') }}">コンセプト</a>
            <a class="nav-link p-4" href="{{ route('menu') }}">メニュー</a>
            <a class="nav-link p-4" href="{{ route('reservationPC') }}">Web予約</a>
            <a class="nav-link p-4" href="{{ route('blog') }}">ブログ</a>
            <a class="nav-link  p-4" href="{{ route('access') }}">アクセス</a>
            <a class="nav-link  p-4" href="{{ route('login') }}">ログイン</a>
            @if (Route::has('register'))
            <a class="nav-link p-4" href="{{ route('register') }}">会員登録</a>
            @endif

            @else
            @if(Auth::user()->admin == true)
            <a class="nav-link p-4" href="{{ route('calender') }}">アドミン</a>
            <a class="nav-link p-4" href="{{ route('home') }}">トップ</a>
            @else
            <a class="nav-link p-4" href="{{ route('home') }}">トップ</a>
            @endif
            <a class="nav-link p-4" href="{{ route('concept') }}">コンセプト</a>
            <a class="nav-item p-4" href="{{ route('menu') }}">メニュー</a>
            <a class="nav-link p-4" href="{{ route('reservationPC') }}">Web予約</a>
            <a class="nav-item p-4" href="{{ route('blog') }}">ブログ</a>
            <a class="nav-link p-4" href="{{ route('access') }}">アクセス</a>

            <ul class="nav-item navbar-nav">
                <a id="navbarDropdown" class="nav-link dropdown-toggle p-4" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    　{{ Auth::user()->family_name }} {{ Auth::user()->first_name }}　様 <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if (null !== \App\Booking::where('user_id', Auth::user()->id)->where('booking_date_number', Auth::user()->latest_booking_date_number)->where('active', 1)->first() &&
                    \App\Booking::where('user_id', Auth::user()->id)->where('active', 1)->first()->booking_date_number > \Carbon\Carbon::now()->format("ndHi"))
                    <div id="bk-confirmation" class="delete"><a class="dropdown-item delete" href="{{ route('confirmation') }}">
                        予約確認
                    </a></div>
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
        @endguest
    </div>
</nav>
