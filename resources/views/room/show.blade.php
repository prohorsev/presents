@extends('layouts.main')

@section('content')
    @auth
        <div class="congratulation">
            <div class="container">
                <div class="congratulation__container">
                    <div class="congratulation__left">
                        <h1 class="fs24 mt30">{{ $room->name }}</h1>
                        <div class="congratulation__room">


                            <p>{{ $isActive ? 'Поздравляем' : 'Поздравляли'}}: {{ $room->birthday_person }}</p>

                            <hr class="mt20 mb20">

                            <div>
                                <div>
                                    <p class="d-flex aic">
                                        <svg class="ic20 mr10">
                                            <use xlink:href="{{ asset("storage/icons/sprite.svg#user") }}"></use>
                                        </svg>
                                        Участники
                                    </p>
                                    <p>{{ $organisator->name }} (организатор)</p>
                                    <users-budget-component :friends="{{ $friends }}" ref="usersBudgetComponent">
                                    </users-budget-component>
                                </div>
                                <hr class="mt20 mb20">
                                <div>
                                    <p class="d-flex aic">
                                        <svg class="ic20 mr10">
                                            <use
                                                    xlink:href="{{ asset("storage/icons/sprite.svg#calendar-clock") }}"></use>
                                        </svg>
                                        Дата поздравления
                                    </p>
                                    <p>{{ $room->birthday_date }}</p>
                                </div>
                                <hr class="mt20 mb20">
                                <div id="budget">
                                    <p class="d-flex aic">
                                        <svg class="ic20 mr10">
                                            <use xlink:href="{{ asset("storage/icons/sprite.svg#budget") }}"></use>
                                        </svg>
                                        Бюджет
                                    </p>
                                    @csrf
                                    <budget-component :room_sum="{{ $room->birthday_sum }}"
                                                      :budget="{{ $room->budget }}"
                                                      :user_sum="{{ $user_sum }}" :room_id="{{ $room->id }}"
                                                      :user_id="{{ Auth::id() }}" {{ $isActive ? ":room_is_active='true'" : '' }}
                                    />
                                </div>


                            </div>

                            @if($isActive)

                                <hr class="mt20 mb20">

                                <div>
                                    <p class="mb10">Для приглашения друзей отправьте им ссылку: </p>

                                    <clipboard-component

                                            :link="`{{url('rooms')}}/{{ $room->id }}/invite`"
                                    >
                                    </clipboard-component>

                                </div>

                                <hr class="mt20 mb20">

                                <div>
                                    <p>Здесь вы можете выбрать и купить подарок</p>
                                    <div class="market-place d-flex aic jcsb">
                                        <a target="_blank" href="https://www.ozon.ru" class="link__site">
                                            <img src="{{ asset('storage/images/ozon.png') }}" alt="">
                                        </a>
                                        <a target="_blank" href="https://www.wildberries.ru" class="link__site">
                                            <img src="{{ asset('storage/images/wildberries.png') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            @endif

                        </div>

                    </div>
                    <div class="congratulation__right" id="chat">
                        @csrf
                        <chat-component :room_id="{{ $room->id }}"
                                        :user_id="{{ Auth::id() }}"
                                        :user_name="'{{ Auth::user()->name }}'">
                        </chat-component>
                    </div>
                </div>
            </div>
{{--            <passport-clients></passport-clients>--}}
{{--            <passport-authorized-clients></passport-authorized-clients>--}}
{{--            <passport-personal-access-tokens></passport-personal-access-tokens>--}}
        </div>
    @endauth
@endsection
