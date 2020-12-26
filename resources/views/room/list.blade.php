@extends('layouts.main')

@section('content')
    <div class="congratulation">
        <div class="container">
            <h1>Мои команды</h1>
            <div class="congratulation__container">
                <div class="congratulation__left">
                    <ul>
                        @forelse($rooms as $room)
                            <li><div class="team-item" style="display: flex;">
                                    <a href="{{ route('room.show', $room) }}">{{ $room->name }}</a>
                                    @if(DB::table('room_user')->where('room_id', '=', $room->id)->where('user_id', '=', Auth::id())->select('is_admin')->first()->is_admin)
                                        <div class="controls" style="display: flex; margin-left: 20px;">
                                            <a href="{{ route('room.edit', $room) }}">[edit]</a>
                                            <form action="{{ route('room.destroy', $room) }}" method="post" style="margin-left: 20px;">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="[delete]" style="cursor: pointer">
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </li>
                        @empty
                            Пока вы не состоите ни в одной команде
                        @endforelse
                    </ul>


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
