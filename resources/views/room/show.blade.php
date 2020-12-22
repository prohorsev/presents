@extends('layouts.main')

@section('content')
@auth
    <div class="congratulation">
        <div class="container">
            <h1>Команда друзей-поздравителей</h1><br><br><br>
            <h3>Организатор <a href="#">{{ $organisator->name }}</a></h3>
            <h3>Поздравляем {{ $room->birthday_person }}, день рождения {{ $room->birthday_date }},
                бюджет на подарок {{ $room->birthday_sum }} руб.</h3><br><br><br>
            Для приглашения друзей отправьте им ссылку: http://presents.local/rooms/{{ $room->id }}/invite <br><br><br>
            Список участников: <br>
            @forelse($friends as $friend)
                {{ $friend->name }}<br>
            @empty
                Пока никто не вступил в команду
            @endforelse
        </div>
    </div>
@endauth
@endsection