<ul class="navbar-nav mr-auto">
    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home')?'active':'' }}" href="{{ route('home') }}">Главная</a></li>
    <li class="nav-item"><a class="nav-link {{ request()->routeIs('gifts')?'active':'' }}" href="{{ route('gifts') }}">Подарки</a></li>
</ul>

