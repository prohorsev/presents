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

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb20">
                    <label for="name" class="fs16 lhr tblack mb5">Имя</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name"
                               value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="mb20">
                    <label for="email" class="fs16 lhr tblack mb5">Адрес электроной почты</label>

                    <div class="">
                        <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') }}" required autocomplete="email">

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
                               name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="mb20">
                    <label for="password-confirm" class="fs16 lhr tblack mb5">Повторить пароль</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="input" name="password_confirmation" required
                               autocomplete="new-password">
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <button type="submit" class="btnfull">
                            Зарегестрироваться
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
