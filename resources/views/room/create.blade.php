@extends('layouts.main')

@section('content')

    <div class="congratulation">
        <div class="container">
            <h1>Поздравить близкого вам человека проще чем вы думаете</h1>
            <div class="congratulation__container">
                <div class="congratulation__left">
                    <div class="congratulation__forms">
                        <h3>Заполните форму для поздравления</h3>
                        <form action="{{ route('room.store') }}" method="post" class="congratulation__form">
                            @csrf
                            <div class="congratulation__user">
{{--                                <input type="text" placeholder="Ваше имя" name="name">--}}
{{--                                @if($errors->has('name'))--}}
{{--                                    <div class="congratulation__validation" role="alert">--}}
{{--                                        @foreach($errors->get('name') as $err)--}}
{{--                                            <p>{{ $err }}</p>--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                @endif--}}
{{--                                <input type="email" placeholder="Ваша почта" name="email">--}}
{{--                                @if($errors->has('email'))--}}
{{--                                    <div class="congratulation__validation" role="alert">--}}
{{--                                        @foreach($errors->get('email') as $err)--}}
{{--                                            <p>{{ $err }}</p>--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                @endif--}}
                                <input type="text" placeholder="Кого будем поздравля" name="birthday_person">
                                @if($errors->has('birthday_person'))
                                    <div class="congratulation__validation" role="alert">
                                        @foreach($errors->get('birthday_person') as $err)
                                            <p>{{ $err }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                <input type="date" placeholder="Когда поздравить" name="birthday_date">
                                @if($errors->has('birthday_date'))
                                    <div class="congratulation__validation" role="alert">
                                        @foreach($errors->get('birthday_date') as $err)
                                            <p>{{ $err }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                <input type="number" placeholder="Бюджет подарка" name="birthday_sum">
                                @if($errors->has('birthday_sum'))
                                    <div class="congratulation__validation" role="alert">
                                        @foreach($errors->get('birthday_sum') as $err)
                                            <p>{{ $err }}</p>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <button class="btn congratulation__btn" type="submit">Создать поздравление</button>
                        </form>
                    </div>
                </div>
                <div class="congratulation__right">
                    какие нибудь слайды
                </div>
            </div>
        </div>
    </div>

@endsection