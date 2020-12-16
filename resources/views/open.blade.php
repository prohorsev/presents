@extends('layouts.app')

@section('title')
    @parent Congratulation
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <p>Поздравляем, Вы открыли коробку и получили в подарок {{ $received }}! Ваш подарок {{ $donated }} осчастливил кого-то другого (но это не точно).</p>
    </div>
@endsection