@extends('layouts.main')

@section('content')
@auth
    <div class="congratulation">
        <div class="container">
            <h1>Команда друзей-поздравителей</h1>
            <div class="congratulation__container">
                <div class="congratulation__left">
                    <div class="congratulation__room">
                        <h3>Организатор: <br> <a href="#">{{ $organisator->name }}</a></h3>
                        <p>Поздравляем: <br>{{ $room->birthday_person }}</p>
                        <p>День рождения: <br>{{ $room->birthday_date }}</p>
                        <p>Бюджет подарка: <br>{{ $room->birthday_sum }}руб.</p>
                        <p>Для приглашения друзей отправьте им ссылку: <br>
                            <strong>http://presents.local/rooms/{{ $room->id }}/invite</strong>
                        </p>

                        <p>Список участников:</p>
                        <ul>
                            @forelse($friends as $friend)
                                <li>{{ $friend->name }}</li>
                            @empty
                                <li>Пока никто не вступил в команду</li>
                            @endforelse
                        </ul>

                    </div>

                </div>
                <div class="congratulation__right">
                    <chat-component></chat-component>
                </div>
            </div>
        </div>
    </div>
@endauth
@endsection
