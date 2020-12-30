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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flex.css') }}" rel="stylesheet">
    <link href="{{ asset('css/text.css') }}" rel="stylesheet">
    <link href="{{ asset('css/spaces.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <div class="wrapper">
        <header class="header">
            <div class="container header__container">
                <nav class="menu">
                    <ul class="menu__list">
                        <li class="menu__li"><a href="{{ route('home') }}">
                                <div class="logo">
                                    <p>MyGIFT</p>
                                </div>
                            </a></li>
                        @auth
                            <li class="menu__li"><a href="{{ route('catalog') }}">Каталог подарков</a></li>
                            <li class="menu__li"><a href="{{ route('room.create') }}">Организовать поздравление</a></li>
                            <li class="menu__li"><a href="{{ route('person-account') }}">Личный кабинет</a></li>
                            <li class="menu__li"><a href="{{ route('room.index') }}">Мои команды</a></li>
                        @endauth
                    </ul>
                    <ul class="menu__list">
                        @guest
                            <li class="menu__li"><a href="{{ route('loginVK') }}">
                                    <div class="menu__login">
                                        <p>войти</p>
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path d="M20.0187 39C30.5027 39 39.0017 30.4934 39.0017 20C39.0017 9.50659 30.5027 1 20.0187 1C9.53465 1 1.03564 9.50659 1.03564 20C1.03564 30.4934 9.53465 39 20.0187 39Z"
                                                      fill="white" stroke="#757575" stroke-width="2"/>
                                                <path d="M9.05981 34.2128C9.05981 16.5098 30.9757 16.5098 30.9757 34.2128C26.512 41 14.0232 41 9.05981 34.2128Z"
                                                      fill="#757575"/>
                                                <path d="M20.0176 24.8063C23.8698 24.8063 26.818 21.3684 26.818 17.3547C26.818 15.4833 26.4851 13.6095 25.4058 12.1877C24.2856 10.712 22.5031 9.90308 20.0176 9.90308C17.5321 9.90308 15.7497 10.712 14.6294 12.1877C13.5501 13.6095 13.2173 15.4833 13.2173 17.3547C13.2173 21.3684 16.1655 24.8063 20.0176 24.8063Z"
                                                      fill="#757575" stroke="white" stroke-width="2"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="39.9643" height="40" fill="white"
                                                          transform="translate(0.0356445)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </div>
                                </a></li>
                        @else
                            <li class="menu__li">
                                <a class="" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </nav>
            </div>
        </header>

        <main class="main">
            @yield('content')
        </main>

        <footer class="footer">
            <div class="container footer__container">
                <p>Copyright © 2020 MyGift</p>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
