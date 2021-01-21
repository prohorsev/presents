@extends('layouts.main')

@section('content')
    <div class="congratulation">
        <div class="container">
            <div class="congratulation__container mt30">
                <div class="congratulation__left">
                    <h3 class="fs24">Активные группы</h3>

                    @forelse($rooms as $room)
                        <div class="d-flex aifs mb20 jcsb">
                            <a href="{{ route('room.show', $room) }}"
                               class="fs20 mr10 group__link d-block lhr">{{ $room->name }}</a>
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
                        <h2 class="fs24">Вы еще не состоите ни в одной группе</h2>
                    @endforelse
                    <a href="{{ route('room.create') }}" class="congratulation__btn">Создать группу</a>

                    <div class="mt30">
                        @if($pastRooms)
                            <h3 class="fs20">Прошедшие поздравления</h3>
                            @forelse($pastRooms as $room)

                                <div class="d-flex aic mb10">
                                    <a href="{{ route('room.show', $room) }}"
                                       class="fs20 mr10 group__link">{{ $room->name }}</a>
                                </div>
                            @empty

                            @endforelse
                        @endif
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
