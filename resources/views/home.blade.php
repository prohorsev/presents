@extends('layouts.main')

@section('content')
    <div class="home container">
        <div class="home__wrapper">
            <div class="home__text">
                <h1 class="home__title">Дарите подарки!</h1>
                <ul>
                    <li style="list-style-image: url({{ asset('storage/images/icon-checkmark.svg') }})">MyGift - это онлайн-генератор для организаций поздравлений</li>
                    <li style="list-style-image: url({{ asset('storage/images/icon-checkmark.svg') }})">Встречайте праздник бесконтактно</li>
                    <li style="list-style-image: url({{ asset('storage/images/icon-checkmark.svg') }})">Найдите идеи для личных подарков</li>
                    <li style="list-style-image: url({{ asset('storage/images/icon-checkmark.svg') }})">Задавайте вопросы о списке желаний анонимно</li>
                </ul>
                <a href="{{ route('room.create') }}" class="home__btn">Создать группу</a>
            </div>
            <div class="home__img">
                <img src="{{ asset("storage/images/bg-home.svg") }}" alt="">
            </div>
        </div>
    </div>
@endsection
