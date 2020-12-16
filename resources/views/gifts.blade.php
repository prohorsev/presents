@extends('layouts.app')

@section('title')
    @parent Gifts
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="gifts" style="display: flex; justify-content: space-between;">
            @forelse($gifts as $gift)
                <div class="gift">
                    <img src="{{ $gift->image }}" alt="" style="width: 100px;">
                    <h5>{{ $gift->name }}</h5>
                    <span>{{ $gift->price }} RUB</span><br>
                    <a href="{{ route('addGift', $gift) }}">Положить в коробку</a>
                </div>
            @empty
                Empty gifts-list, maybe "php artisan migrate --seed"
            @endforelse
        </div>
    </div>
@endsection