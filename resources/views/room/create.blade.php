@extends('layouts.main')

@section('content')

    <div class="congratulation">
        <div class="container">
            <div class="congratulation__container">
                <div class="congratulation__left">
                    <div class="congratulation__forms">
                        <h1 class="fs30">Создайте группу для поздравления</h1>

                        <form action="{{ route('room.store') }}" method="post" class="congratulation__form">
                            @csrf
                            <div class="congratulation__user">
                                <div class="mb20">
                                    <label for="name">Название группы</label>
                                    <input type="text" placeholder="Название" name="name" id="name"
                                           value="{{ old('name') }}">
                                    @if($errors->has('name'))
                                        <div class="congratulation__validation" role="alert">
                                            @foreach($errors->get('name') as $err)
                                                <p>{{ $err }}</p>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>

                                <div class="mb20">
                                    <label for="birthday_person">Кого поздравляем?</label>
                                    <input type="text" placeholder="Имя" name="birthday_person" id="birthday_person"
                                           value="{{ old('birthday_person') }}">
                                    @if($errors->has('birthday_person'))
                                        <div class="congratulation__validation" role="alert">
                                            @foreach($errors->get('birthday_person') as $err)
                                                <p>{{ $err }}</p>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>

                                <div class="mb20">
                                    <label for="birthday_date">Дата поздравления</label>
                                    <input type="date" placeholder="Дата" name="birthday_date" id="birthday_date"
                                           value="{{ old('birthday_date') }}">
                                    @if($errors->has('birthday_date'))
                                        <div class="congratulation__validation" role="alert">
                                            @foreach($errors->get('birthday_date') as $err)
                                                <p>{{ $err }}</p>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>

                                <div class="mb20">
                                    <label for="birthday_sum">Бюджет подарка</label>
                                    <input type="number" placeholder="Бюджет подарка" name="birthday_sum"
                                           id="birthday_sum" value="{{ old('birthday_sum') }}">
                                    @if($errors->has('birthday_sum'))
                                        <div class="congratulation__validation" role="alert">
                                            @foreach($errors->get('birthday_sum') as $err)
                                                <p>{{ $err }}</p>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <button class="btn300" type="submit">Создать поздравление</button>
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
