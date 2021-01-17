@extends('layouts.main')

@section('content')
    @auth
        <div class="congratulation">
            <div class="container">
                <h1>{{ $room->name }}</h1>
                <div class="congratulation__container">
                    <div class="congratulation__left">
                        <div class="congratulation__room">
                            <h3>Организатор: <br> <a href="#">{{ $organisator->name }}</a></h3>
                            @if(Auth::id() == $room->admin_id)
                                <h4><a href="{{ route('room.edit', $room) }}">[edit]</a></h4>
                                <form action="{{ route('room.destroy', $room) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="[delete]" style="cursor: pointer">
                                </form>
                            @endif
                            <p>Поздравляем: <br>{{ $room->birthday_person }}</p>
                            <p>День рождения: <br>{{ $room->birthday_date }}</p>
                            <budget-component :room_sum="{{ $room->birthday_sum }}" :budget="{{ $room->budget }}"
                             :user_sum="{{ $user_sum }}" :room_id="{{ $room->id }}" :user_id="{{ Auth::id() }}"></budget-component>
                            <p>Для приглашения друзей отправьте им ссылку: <br>
                                <strong>http://presents.local/rooms/{{ $room->id }}/invite</strong>
                            </p>

                            <p>Список участников:</p>
                            <users-budget-component :friends="{{ $friends }}" ref="usersBudgetComponent">
                            </users-budget-component>

                            @if(Auth::id() != $room->admin_id)
                                <a href="{{ route('exit', $room) }}">Выйти</a>
                            @endif

                        </div>

                    </div>
                    <div class="congratulation__right">
                        <chat-component :room_id="{{ $room->id }}" :user_id="{{ Auth::id() }}" :user_name="'{{ Auth::user()->name }}'">
                        </chat-component>
                    </div>
                    </div>
            </div>
        </div>
    @endauth
@endsection
