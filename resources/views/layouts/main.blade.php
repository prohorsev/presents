<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MyGift') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap"
          rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flex.css') }}" rel="stylesheet">
    <link href="{{ asset('css/text.css') }}" rel="stylesheet">
    <link href="{{ asset('css/spaces.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <div class="wrapper">
        <header class="header container">
            <div class="d-flex jcsb aic">
                <div class="logo">
                    <a href="{{ route('home') }}" class="d-flex aic tgreyd fs16">
                        <svg class="ic50 mr10" viewBox="0 0 50 50">
                            <use xlink:href="{{asset("storage/icons/main.svg#logo")}}"></use>
                        </svg>
                        MyGIFT
                    </a>
                </div>

                <nav class="menu">
                    <ul class="d-flex aic">
                        @auth
                            <li class="menu__li"><a href="{{ route('room.index') }}">Мои группы</a></li>
                        @endauth
                    </ul>
                </nav>
                @guest
                    <a href="{{ route('login') }}" class="menu__login d-flex aic">
                        <span class="mr10 tgreyd fs16">Войти</span>
                        <img src="{{asset("storage/images/user.svg")}}" alt="">
                    </a>
                @else

                    <a class="mr10 tgreyd fs16" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Выйти') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                @endguest

            </div>
        </header>

        <main class="main">
            @yield('content')
        </main>

        <footer class="footer">
            <div class="container footer__container">
                <p>Copyright © 2021 MyGift</p>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
