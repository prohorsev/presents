@extends('layouts.app')

@section('menu')
    @include('menu')
@endsection

@section('content')
    @guest
        Для участия требуется аутентификация!<br>
        Имеем трех юзеров LOGIN: user1@mail.ru PASS: 123 <br>
        LOGIN: user2@mail.ru PASS: 123 <br>
        LOGIN: user3@mail.ru PASS: 123

    @else
        <div class="container">
            <h2>Коробка с подарками!</h2>
            <div class="box" style="display: flex; flex-direction: column;">
                <img src="https://www.ljplus.ru/img4/1/0/1001smile/_korobka.jpg" alt="" style="width: 100px;">
                @if($boxReady)
                    <a href="{{ route('boxOpen') }}">Открыть коробку!</a>
                @else
                    <span>В коробке мало подарков! Нужно хотя бы 3 для открытия.</span>
                @endif
            </div>

        </div>
    @endguest
@endsection
