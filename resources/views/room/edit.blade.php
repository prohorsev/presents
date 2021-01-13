@extends('layouts.main')

@section('content')

    <div class="congratulation">
        <div class="container">
            <h1>Редактирование команды</h1>
            <div class="congratulation__container">
                <div class="congratulation__left">
                    <div class="congratulation__forms">
                        <form action="{{ route('room.update', $room) }}" method="post" class="congratulation__form">
                            @csrf
                            @method('PUT')
                            <div class="congratulation__user">
                                <label for="name">Название команды</label>
                                <input type="text" placeholder="Название команды" name="name" id="name" value="{{ old('name') ?? $room->name }}">
                                @if($errors->has('name'))
                                    <div class="congratulation__validation" role="alert">
                                        @foreach($errors->get('name') as $err)
                                            <p>{{ $err }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                <label for="birthday_person">Кого поздравляем?</label>
                                <input type="text" placeholder="Кого будем поздравлять?" name="birthday_person"
                                       id="birthday_person" value="{{ old('birthday_person') ?? $room->birthday_person }}">
                                @if($errors->has('birthday_person'))
                                    <div class="congratulation__validation" role="alert">
                                        @foreach($errors->get('birthday_person') as $err)
                                            <p>{{ $err }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                <label for="birthday_date">Дата поздравления</label>
                                <input type="date" placeholder="Когда поздравить?" name="birthday_date"
                                       id="birthday_date" value="{{ old('birthday_date') ?? $room->birthday_date }}">
                                @if($errors->has('birthday_date'))
                                    <div class="congratulation__validation" role="alert">
                                        @foreach($errors->get('birthday_date') as $err)
                                            <p>{{ $err }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                <label for="birthday_sum">Бюджет подарка</label>
                                <input type="number" placeholder="Бюджет подарка" name="birthday_sum"
                                       id="birthday_sum" value="{{ old('birthday_sum') ?? $room->birthday_sum }}">
                                @if($errors->has('birthday_sum'))
                                    <div class="congratulation__validation" role="alert">
                                        @foreach($errors->get('birthday_sum') as $err)
                                            <p>{{ $err }}</p>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <button class="btn congratulation__btn" type="submit">Сохранить изменения</button>
                        </form>
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