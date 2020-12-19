@extends('layouts.app')

@section('title')
    @parent Friends
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="friends" style="display: flex; flex-direction: column;">
            @forelse($friends as $friend)
                <div class="friend" style="display: flex;margin-bottom: 20px;">
                    <img src="{{ $friend['photo_100'] }}" alt="" style="width: 70px; border-radius: 35px; margin-right: 20px;">
                    <h5>{{ $friend['first_name'] . ' ' .  $friend['last_name'] }}</h5>
                </div>
            @empty
                Empty friends
            @endforelse
        </div>
    </div>
@endsection