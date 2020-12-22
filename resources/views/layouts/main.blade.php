<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
                                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M40.5796 25.3515L35.8335 23.6229C35.687 23.5644 35.5112 23.5351 35.3355 23.5351H4.9253C4.10488 23.5351 3.46045 24.1795 3.46045 24.9999V45.6055C3.46045 48.037 5.42325 50 7.85499 50H37.1519C39.5837 50 41.5465 48.037 41.5465 45.6055V26.7284C41.5465 26.1132 41.1655 25.5566 40.5796 25.3515Z"
                                              fill="#FC1A40"/>
                                        <path d="M41.5464 26.7284V45.6055C41.5464 48.037 39.5836 50 37.1519 50H22.5034V23.5351H35.3355C35.5113 23.5351 35.687 23.5644 35.8334 23.6229L40.5795 25.3515C41.1655 25.5566 41.5464 26.1132 41.5464 26.7284Z"
                                              fill="#C60034"/>
                                        <path d="M41.0192 9.54964C40.5212 7.52815 39.027 5.94621 37.0055 5.30158C35.0133 4.68625 32.8745 5.1258 31.3219 6.53196L27.9234 9.52034L27.2496 5.03801C26.9274 2.98723 25.609 1.25861 23.6462 0.438392C23.2653 0.29181 22.8845 0.174622 22.5036 0.116028C20.8923 -0.206238 19.2224 0.145325 17.8746 1.14152C16.0875 2.43058 15.1794 4.59856 15.4723 6.76643C15.7946 8.9344 17.2595 10.7801 19.3394 11.5125L22.5036 12.6551L26.4001 14.0907C26.4294 14.0907 26.4294 14.0907 26.4294 14.0907L33.197 16.5808C33.8707 16.8153 34.5739 16.9326 35.2477 16.9326C36.6834 16.9326 38.0896 16.405 39.2029 15.409C40.8434 13.9442 41.5465 11.6882 41.0192 9.54964Z"
                                              fill="#FE9923"/>
                                        <path d="M39.2027 15.409C38.0894 16.405 36.6831 16.9325 35.2475 16.9325C34.5737 16.9325 33.8706 16.8153 33.1968 16.5808L26.4292 14.0906C26.4292 14.0906 26.4292 14.0906 26.3999 14.0906L22.5034 12.6551V0.115906C22.8843 0.174597 23.2651 0.291687 23.646 0.43827C25.6088 1.25849 26.9273 2.9871 27.2494 5.03789L27.9232 9.52022L31.3217 6.53184C32.8743 5.12568 35.0131 4.68613 37.0053 5.30146C39.0268 5.94609 40.5209 7.52803 41.019 9.54952C41.5464 11.6882 40.8433 13.9442 39.2027 15.409Z"
                                              fill="#FE8821"/>
                                        <path d="M46.5563 22.8612L44.5641 28.369C44.3296 28.9549 43.7729 29.3065 43.187 29.3065C43.0112 29.3065 42.8354 29.2772 42.6891 29.2187L27.5424 23.7109L26.1656 19.1698L22.5035 19.9901L19.2809 20.7225L4.1343 15.2147C3.37258 14.9218 2.99182 14.0721 3.25539 13.3397L5.27688 7.83204C5.65774 6.71876 6.47815 5.83966 7.53284 5.34171C8.58753 4.84376 9.78861 4.78507 10.9019 5.19522L22.5036 9.41398L23.2947 9.70685C23.2947 9.70685 26.4587 15.4491 26.5466 15.4491C26.6053 15.4491 27.865 14.746 29.0955 14.0721C30.3257 13.3983 31.5562 12.6952 31.5562 12.6952L43.9194 17.2069C45.0327 17.617 45.9116 18.4374 46.4096 19.4921C46.9078 20.5467 46.9663 21.748 46.5563 22.8612Z"
                                              fill="#FF3E75"/>
                                        <path d="M46.5562 22.8612L44.564 28.369C44.3295 28.9549 43.7729 29.3065 43.187 29.3065C43.0112 29.3065 42.8354 29.2772 42.689 29.2187L27.5424 23.7109L26.1655 19.1699L22.5034 19.9901V9.414L23.2945 9.70687C23.2945 9.70687 26.4585 15.4492 26.5465 15.4492C26.6052 15.4492 27.8649 14.746 29.0953 14.0721C30.3256 13.3983 31.5562 12.6953 31.5562 12.6953L43.9194 17.2069C45.0327 17.617 45.9116 18.4374 46.4095 19.4921C46.9078 20.5467 46.9663 21.748 46.5562 22.8612Z"
                                              fill="#FC1A40"/>
                                        <path d="M18.1089 23.5351V50H26.898V23.5351H18.1089Z" fill="#FCBF29"/>
                                        <path d="M23.2944 9.70685L22.5033 11.8748L19.2808 20.7226L22.5033 21.8946L26.1654 23.2129L27.5423 23.7109L31.5562 12.6952L23.2944 9.70685Z"
                                              fill="#FCBF29"/>
                                        <path d="M26.8983 23.5351H22.5038V50H26.8983V23.5351Z" fill="#FE9923"/>
                                        <path d="M31.5562 12.6952L27.5424 23.7109L26.1655 23.2128L22.5034 21.8945V11.8748L23.2944 9.70685L31.5562 12.6952Z"
                                              fill="#FE9923"/>
                                    </svg>
                                    <p>MyGIFT</p>
                                </div>
                            </a></li>
                        @auth
                            @php
                                $room = DB::table('room_user')->where('user_id', '=', Auth::id())->first();
                                $roomOrg = \App\Room::query()->where('org_user_id', '=', Auth::user()->id)->first();
                                if ($room) {
                                    $roomId = $room->room_id;
                                } elseif ($roomOrg) {
                                    $roomId = $roomOrg->id;
                                } else {
                                    $roomId = null;
                                }

                            @endphp
                            <li class="menu__li"><a href="#">Каталог подарков</a></li>
                            <li class="menu__li"><a href="{{ route('room.create') }}">Организовать поздравление</a></li>
                            @if($roomId)
                                <li class="menu__li"><a
                                            href="{{ route('room.show', ['room' => $roomId]) }}">Команда</a>
                                </li>
                            @endif
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
                                <a class="" href="#">
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
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
