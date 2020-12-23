@extends('layouts.main')

@section('title')
    @parent Gifts
@endsection



@section('content')
    <div class="container">
        <div class="gifts" style="display: flex; justify-content: space-between;">
            @forelse($gifts as $gift)
                <div class="gift">
                    <img src="{{ $gift->image }}" alt="" style="width: 100px;">
                    <h5>{{ $gift->name }}</h5>

                </div>
            @empty
                Empty gifts-list, maybe "php artisan migrate --seed"
            @endforelse
        </div>
    </div>
@endsection
