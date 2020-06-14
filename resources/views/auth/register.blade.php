@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">名前</label>

                            <div class="col-md-3">
                                <input id="family_name" type="text" class="form-control @error('family_name') is-invalid @enderror" name="family_name" value="{{ old('family_name') }}" placeholder="姓" required autocomplete="family_name" autofocus>
                            </div>
                            <div class="col-md-3">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" placeholder="名" required autocomplete="first_name" autofocus>

                                @error('family_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kana_name" class="col-md-4 col-form-label text-md-right">カナ</label>

                            <div class="col-md-3">
                                <input id="kana_family_name" type="text" class="form-control @error('kana_family_name') is-invalid @enderror" name="kana_family_name" value="{{ old('kana_family_name') }}" placeholder="セイ" required autocomplete="kana_family_name" autofocus>
                            </div>
                            <div class="col-md-3">
                                <input id="kana_first_name" type="text" class="form-control @error('kana_first_name') is-invalid @enderror" name="kana_first_name" value="{{ old('kana_first_name') }}" placeholder="メイ" required autocomplete="kana_first_name" autofocus>

                                @error('kana_family_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('kana_first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">メールアドレス</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">電話番号</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">パスワード</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">パスワード確認</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth" class="col-md-4 col-form-label text-md-right">生年月日</label>

                            <div class="col-md-2">
                                <select id="birth_year" class="form-control" name="birth_year">
                                    <option value="">年</option>
                                    @for ($i = 1980; $i <= 2005; $i++)
                                        <option value="{{ $i }}"
                                                @if(old('birth_year') == $i) selected @endif>{{ $i }}</option>
                                    @endfor
                                </select>
                                @if ($errors->has('birth_year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birth_year') }}</strong>
                                    </span>
                                @endif
                            </div><div class="pt-2"></div>

                            <div class="col-md-2">
                                <select id="birth_month" class="form-control" name="birth_month">
                                    <option value="">月</option>
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ $i }}"
                                            @if(old('birth_month') == $i) selected @endif>{{ $i }}</option>
                                    @endfor
                                </select>
                                @if ($errors->has('birth_month'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birth_month') }}</strong>
                                    </span>
                                @endif
                            </div><div class="pt-2"></div>

                            <div class="col-md-2">
                                <select id="birth_day" class="form-control" name="birth_day">
                                    <option value="">日</option>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <option value="{{ $i }}"
                                            @if(old('birth_day') == $i) selected @endif>{{ $i }}</option>
                                    @endfor
                                </select>

                                @if ($errors->has('birth_day'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birth_day') }}</strong>
                                    </span>
                                @endif
                            </div><div class="pt-2"></div>
                        </div>

                        <div class="row col-md-6 col-md-offset-4">
                            @if ($errors->has('birth'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('birth') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">性別</label>
                            <div class="col-md-6">
                                <div class="radio pt-2" name="gender">
                                    <label><input class="mr-2" type="radio" name="gender" value="男性">男性</label>
                                    <label><input class="mr-2 ml-2" type="radio" name="gender" value="女性">女性</label>
                                    <label><input class="mr-2 ml-2" type="radio" name="gender" value="その他" checked>その他</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mail_magazine" class="col-md-4 col-form-label text-md-right">メールマガジン</label>
                            <div class="checkbox col-md-6 pt-2">
                                <label><input class="mr-2" type="radio" name="mail_magazine" value="受け取る" checked>受け取る</label>
                                <label><input class="mr-2 ml-2" type="radio" name="mail_magazine" value="受け取らない">受け取らない</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        次回から自動ログイン
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary w-50" col="5">
                                    登録
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
