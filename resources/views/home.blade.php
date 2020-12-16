@extends('layouts.app')

@section('menu')
    @include('menu')
@endsection

@section('content')

    <div class="content">
        <div class="content__top">
            <div class="logo">GiftBox</div>
            <div class="logo_speach">make your friends happy with gifts they never expect!</div>
        </div>
        <div class="lights__top"></div>
        @guest
            Для участия требуется аутентификация!<br>
            Имеем трех юзеров LOGIN: user1@mail.ru PASS: 123 <br>
            LOGIN: user2@mail.ru PASS: 123 <br>
            LOGIN: user3@mail.ru PASS: 123

        @else

{{--            <h2>Коробка с подарками!</h2>--}}
{{--            <div class="box" style="display: flex; flex-direction: column;">--}}
{{--                <img src="https://www.ljplus.ru/img4/1/0/1001smile/_korobka.jpg" alt="" style="width: 100px;">--}}
{{--                @if($boxReady)--}}
{{--                    <a href="{{ route('boxOpen') }}">Открыть коробку!</a>--}}
{{--                @else--}}
{{--                    <span>В коробке мало подарков! Нужно хотя бы 3 для открытия.</span>--}}
{{--                @endif--}}
{{--            </div>--}}


            <div class="content__middle">
                <a href="#"><img src="img/giftbox_bg.png" alt="open!" class="box_main"></a>
                <!-- Нужен ли визуальный таймер? Бутстрап можно присунуть -->
                <div class="timer_open"></div>
                <!-- закидывание подарков в коробку -->
                <div class="button_addgift">
                    <a href="#">
                        Добавить подарок
                    </a>
                </div>
                @if($boxReady)
                    <a href="{{ route('boxOpen') }}">Открыть коробку!</a>
                @else
                    <span>В коробке мало подарков! Нужно хотя бы 3 для открытия.</span>
                @endif
            </div>


        @endguest
    </div>
@endsection
