@extends('layouts.app')

@section('content')
    <div class="auth container d-flex aic jcc">
        <div class="auth__wrapper d-flex flexcol aic">
            <div class="d-flex aic mb30 mr5">
                <svg width="50" height="50" class="d-block">
                    <use xlink:href="{{asset("storage/icons/main.svg#logo")}}"></use>
                </svg>
                <p class="fs30">MyGift</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb20">
                    <label for="email" class="fs16 lhr tblack mb5">Адрес электроной почты</label>

                    <div class="">
                        <input id="email" type="email" class="input @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="mb20">
                    <label for="password" class="fs16 lhr tblack mb5">Пароль</label>

                    <div class="">
                        <input id="password" type="password" class="input @error('password') is-invalid @enderror"
                               name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="mb10">
                    <div class="mb5">
                        <div class="">
                            <input class="" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="" for="remember">
                                Запомнить меня
                            </label>
                        </div>
                    </div>
                    <div class="">
                        <button type="submit" class="btnfull">
                            Войти в систему
                        </button>
                    </div>
                </div>

                <div class="tac">
                    <div class="">
                        @if (Route::has('password.request'))
                            <a class="tdef mb10" href="{{ route('password.request') }}">
                                Забыли пароль?
                            </a>
                        @endif
                    </div>
                    <div>
                        <a class="tdef" href="{{ route('register') }}">
                            Зарегестрироваться
                        </a>
                    </div>
                </div>
            </form>
            <a href="{{ route('loginVK') }}">
                <div class="menu__login">
                    <img src="{{asset("storage/images/vk-circled.png")}}"/>
                </div>
            </a>
        </div>
    </div>
@endsection
