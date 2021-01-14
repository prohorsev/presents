@extends('layouts.main')

@section('content')
    <div class="home container">
        <div class="home__wrapper">
            <div class="home__text">
                <h1 class="home__title">Дарите подарки!</h1>
                <ul>
                    <li>MyGift - это онлайн-генератор для организаций поздравлений</li>
                    <li>Встречайте праздник бесконтактно</li>
                    <li>Найдите идеи для личных подарков</li>
                    <li>Задавайте вопросы о списке желаний анонимно</li>
                </ul>
                <a href="{{ route('room.create') }}" class="home__btn">Создать группу</a>
            </div>
            <div class="home__img">
                <img src="{{asset("storage/images/bg-home.svg")}}" alt="">
            </div>
        </div>
    </div>
@endsection
