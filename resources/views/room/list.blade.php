@extends('layouts.main')

@section('content')
    <div class="congratulation">
        <div class="container">
            <h1 class="fs20 ">Мои группы</h1>
            <div class="congratulation__container">
                <div class="congratulation__left">
                    <h3 class="fs20">Активные группы</h3>
                    @forelse($rooms as $room)

                        <div class="d-flex aic mb20">
                            <a href="{{ route('room.show', $room) }}"
                               class="fs20 pt10 pb10 mr10 group__link">{{ $room->name }}</a>
                            @if(Auth::id() == $room->admin_id)
                                <div class="controls d-flex aic">
                                    <a href="{{ route('room.edit', $room) }}" class="mr10" style="color: orange">изменить</a>
                                    <form action="{{ route('room.destroy', $room) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="удалить" style="color: red; cursor: pointer">

                                    </form>
                                </div>
                            @endif
                        </div>
                    @empty
                        <h2 class="fs30">Вы еще не состоите ни в одной группе</h2>
                    @endforelse
                    <a href="{{ route('room.create') }}" class="home__btn">Создать группу</a>
                </div>

                <div class="congratulation__right">
                    @if($pastRooms)
                        <h3 class="fs20">Прошедшие поздравления</h3>
                        @forelse($pastRooms as $room)

                            <div class="d-flex aic mb20">
                                <a href="{{ route('room.show', $room) }}"
                                   class="fs20 pt10 pb10 mr10 group__link">{{ $room->name }}</a>
                            </div>
                        @empty

                        @endforelse
                    @else
                        <div class="congratulation__slider">
                            <slider-component></slider-component>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>

@endsection
