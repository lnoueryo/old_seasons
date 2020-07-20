<div class="header">
    @guest
    <nav class="global-nav">
    <ul class="global-nav__list delete">
        <li class="nav-item p-3 active">
        <a class="nav-link mx-2" href="{{ route('home') }}">トップページ</a>
        </li>
        <li class="nav-item p-3">
        <a class="nav-link mx-2" href="{{ route('blog') }}">ブログ</a>
        </li>
        <li class="nav-item p-3">
        <a class="nav-link mx-2" href="{{ route('concept') }}">コンセプト</a>
        </li>
        <li class="nav-item p-3">
        <a class="nav-link mx-2" href="{{ route('menu') }}">メニュー</a>
        </li>
        <li class="nav-item p-3">
        <a class="nav-link mx-2" href="{{ route('contact') }}">お問い合わせ</a>
        </li>
        <li class="nav-item p-3">
        <a class="nav-link mx-2" href="{{ route('access') }}">アクセス</a>
        </li>
        <li class="nav-item p-3 ml-4">
        <ul class="navbar-nav float-left">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        </ul>
    </li>
    </ul>
    </nav>
    @else
    <nav class="global-nav">
        <ul class="global-nav__list delete">
            @if(Auth::user()->admin == true)
            <li class="nav-item p-3 active">
                <a class="nav-link mx-2" href="{{ route('calender') }}">アドミンユーザー</a>
            </li>
            <li class="nav-item p-3 active">
                <a class="nav-link mx-2" href="{{ route('home') }}">トップページ</a>
            </li>
            @else
            <li class="nav-item p-3 active">
                <a class="nav-link mx-2" href="{{ route('home') }}">トップページ</a>
            </li>
            @endif

            @if (null !== \App\Booking::where('user_id', Auth::user()->id)->where('booking_date_number', Auth::user()->latest_booking_date_number)->where('active', 1)->first() &&
            \App\Booking::where('user_id', Auth::user()->id)->where('active', 1)->first()->booking_date_number > \Carbon\Carbon::now()->format("ndHi"))
            <li class="nav-item p-3 active">
                <a class="nav-link mx-2" href="{{ route('confirmation') }}">予約詳細・変更</a>
            </li>
            @else
            <li class="nav-item p-3 active">
                <a class="nav-link mx-2" href="{{ route('reservationSM') }}">Web予約</a>
            </li>
            @endif
            <li class="nav-item p-3">
            <a class="nav-link mx-2" href="{{ route('blog') }}">ブログ</a>
            </li>
            <li class="nav-item p-3">
            <a class="nav-link mx-2" href="{{ route('concept') }}">コンセプト</a>
            </li>
            <li class="nav-item p-3">
            <a class="nav-link mx-2" href="{{ route('menu') }}">メニュー</a>
            </li>
            <li class="nav-item p-3">
            <a class="nav-link mx-2" href="{{ route('contact') }}">お問い合わせ</a>
            </li>
            <li class="nav-item p-3">
            <a class="nav-link mx-2" href="{{ route('access') }}">アクセス</a>
            </li>
            <li class="nav-item p-3 ml-4">
                <ul class="navbar-nav float-left">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->family_name }} {{ Auth::user()->first_name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu">
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
                        </li>
                    @endguest
                </ul>
            </li>
        </ul>
    </nav>

    @endguest
    <div class="hamburger" id="js-hamburger">
        <span class="hamburger__line hamburger__line--1"></span>
        <span class="hamburger__line hamburger__line--2"></span>
        <span class="hamburger__line hamburger__line--3"></span>
    </div>
    <div class="black-bg" id="js-black-bg"></div>
</div>
