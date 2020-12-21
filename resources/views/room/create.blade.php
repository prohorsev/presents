@extends('layouts.main')

@section('content')

    <div class="congratulation">
        <div class="container">
            <h1>Поздравить близкого вам человека проще чем вы думаете</h1>
            <div class="congratulation__container">
                <div class="congratulation__left">
                    <div class="congratulation__forms">
                        <h3>Заполните форму для поздравления</h3>
                        <form action="" method="post" class="congratulation__form">
                            <div class="congratulation__user">
                                <input type="text" placeholder="Ваше имя" name="name">
                                @if($errors->has('name'))
                                    <div class="congratulation__validation" role="alert">
                                        @foreach($errors->get('name') as $err)
                                            <p>{{ $err }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                <input type="email" placeholder="Ваша почта" name="email">
                                @if($errors->has('email'))
                                    <div class="congratulation__validation" role="alert">
                                        @foreach($errors->get('email') as $err)
                                            <p>{{ $err }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                <input type="text" placeholder="Кого будем поздравля" name="birthday-person">
                                @if($errors->has('birthday-person'))
                                    <div class="congratulation__validation" role="alert">
                                        @foreach($errors->get('birthday-person') as $err)
                                            <p>{{ $err }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                <input type="date" placeholder="Когда поздравить" name="birthday-date">
                                @if($errors->has('birthday-date'))
                                    <div class="congratulation__validation" role="alert">
                                        @foreach($errors->get('birthday-date') as $err)
                                            <p>{{ $err }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                <input type="number" placeholder="Бюджет подарка" name="birthday-sum">
                                @if($errors->has('birthday-sum'))
                                    <div class="congratulation__validation" role="alert">
                                        @foreach($errors->get('birthday-sum') as $err)
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
