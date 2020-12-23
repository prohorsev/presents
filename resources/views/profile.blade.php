@extends('layouts.main')


@section('content')
<h1>Привет, {{ $user->name }}</h1>

<h3>Выберите ваши предпочтения</h3>


<form enctype="multipart/form-data" action="{{ route('create') }}" method="POST">
    @csrf
@foreach ($gifts as $gift)
<input @if (old('isPreferences') == $gift->id) checked @endif name="isPreferences" value="{{ $gift->id }}" type="checkbox" class="check">
<label for="preferences">{{ $gift->name }}</label>
@endforeach
<br>

<input type="submit" value="Сохранить изменения">
</form>



@endsection
