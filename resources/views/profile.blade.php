@extends('layouts.app')

@section('menu')
    @include('menu')
@endsection

@section('content')
<h1>Привет, {{ $user->name }}</h1>
@endsection
