@extends('layouts.main')

@section('content')

    <div class="congratulation">
        <div class="container">
            <h1>Приглашение в команду {{ $room->name }}</h1>
            <div class="congratulation__container">
                <div class="congratulation__left">
                    <div class="congratulation__room">
                        <p> {{ $room->birthday_person }} отмечает свой день рождения {{ $room->birthday_date }}. <br><br>
                            {{ $userOrg->name }} собирает команду друзей, что бы организовать поздравление и приглашает Вас вступить в нее. </p>
                        <br>
                        @guest
                            <a href="{{ route('loginVK') }}" class="btn congratulation__room-btn">Войти</a>
                        @endguest

                        @auth
                            <a href="{{route('join', $room->id)}}" class="btn congratulation__room-btn">Присоединиться</a>
                        @endauth
                    </div>

                </div>
                <div class="congratulation__right">
                    <div class="congratulation__slider">
                        <slider-component></slider-component>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
