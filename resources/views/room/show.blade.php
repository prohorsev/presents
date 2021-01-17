@extends('layouts.main')

@section('content')
    @auth
        <div class="congratulation">
            <div class="container">
{{--                @dd($isActive)--}}
                <h1 class="fs30">{{ $room->name }}</h1>
                <div class="congratulation__container">
                    <div class="congratulation__left">
                        <div class="congratulation__room">
                            <h3>Организатор: <br> <a href="#">{{ $organisator->name }}</a></h3>
                            @if(Auth::id() == $room->admin_id && $isActive)
                                <div class="admin-control">
                                    <h4><a href="{{ route('room.edit', $room) }}">[edit]</a></h4>
                                    <form action="{{ route('room.destroy', $room) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="[delete]" style="cursor: pointer">
                                    </form>
                                </div>
                            @endif
                            <p>{{ $isActive ? 'Поздравляем' : 'Поздравляли'}}: <br>{{ $room->birthday_person }}</p>
                            <p>Дата поздравления: <br>{{ $room->birthday_date }}</p>
                            <budget-component :room_sum="{{ $room->birthday_sum }}" :budget="{{ $room->budget }}"
                                              :user_sum="{{ $user_sum }}" :room_id="{{ $room->id }}"
                                              :user_id="{{ Auth::id() }}" {{ $isActive ? ":room_is_active='true'" : '' }}></budget-component>
                            @if($isActive)
                                <p>Здесь вы можете выбрать и купить подарок</p>
                                <div class="market-place">
                                    <a target="_blank" href="https://www.ozon.ru"><img src="{{ asset('storage/images/ozon.png') }}" alt=""></a>
                                    <a target="_blank" href="https://www.wildberries.ru"><img src="{{ asset('storage/images/wildberries.png') }}" alt=""></a>
                                </div>
                                <p>Для приглашения друзей отправьте им ссылку: <br>
                                    <strong>http://presents.local/rooms/{{ $room->id }}/invite</strong>
                                </p>
                            @endif

                            <p>Список участников:</p>
                            <users-budget-component :friends="{{ $friends }}">
                            </users-budget-component>
                            <ul>
                                @forelse($friends as $friend)
                                    <li>{{ $friend->name }}</li>
                                @empty
                                    <li>Пока никто не вступил в команду</li>
                                @endforelse
                            </ul>

                            @if(Auth::id() != $room->admin_id)
                                <a href="{{ route('exit', $room) }}">Выйти</a>
                            @endif

                        </div>

                    </div>
                    <div class="congratulation__right">
                        <chat-component :room_id="{{ $room->id }}" :user_id="{{ Auth::id() }}"
                                        :user_name="'{{ Auth::user()->name }}'">
                        </chat-component>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection
