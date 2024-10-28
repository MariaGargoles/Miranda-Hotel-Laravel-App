@extends('layouts.app')
@section('title', 'Rooms')
@section('content')

    <header class="banner">
        <div class="banner__inner banner__inner--rooms --max-width">
            <p class="font__title font__title--dark upper__case">The Ultimate Luxury</p>
            <h2 class="font__subtitle font__subtitle--banner font__subtitle--dark">Ultimate<br> Room</h2>
        </div>
        <div class="banner__pagination">
            <span>Home</span><span>|</span><span>Rooms</span>
        </div>
    </header>
    <section class="rooms__grid --max-width">
        <div class="rooms-grid__swiper swiper">
            <div class="swiper-wrapper">
                @foreach($rooms as $room)
                    <div class="rooms swiper-slide">
                        <div class="rooms__grid-item">
                            
                        <img class="rooms__grid-item-img" src="{{  asset($room->photoUrl())  }}" alt="{{ $room->roomType }}">
                            
                            <menu class="rooms__grid-item-menu rooms__menu">
                            <span class="rooms__menu-item">
                                <img src="{{ asset('assets/icon/bed.svg') }}" alt="icono de una cama">
                            </span>
                            <span class="rooms__menu-item">
                                <img src="{{ asset('assets/icon/wifi.svg') }}" alt="icono de conexión wifi">
                            </span>
                            <span class="rooms__menu-item">
                                <img src="{{ asset('assets/icon/car.svg') }}" alt="icono de un coche">
                            </span>
                            <span class="rooms__menu-item">
                                <img src="{{ asset('assets/icon/snowflake.svg') }}" alt="icono de un copo de nieve">
                            </span>
                            <span class="rooms__menu-item">
                                <img src="{{ asset('assets/icon/gym.svg') }}" alt="icono de una mancuerna">
                            </span>
                            <span class="rooms__menu-item">
                                <img src="{{ asset('assets/icon/no-smoking.svg') }}" alt="icono de prohibido fumar">
                            </span>
                            <span class="rooms__menu-item">
                                <img src="{{ asset('assets/icon/cocktail.svg') }}" alt="icono de un coctel">
                            </span>
                            </menu>
                            <div class="rooms__grid-item-details">
                                <p class="rooms__grid-item-details-title">{{ $room->roomType }}</p>
                                <p class="rooms__grid-item-details-text">{{ $room->description }}</p>
                                <p class="rooms__grid-item-details-price"><span>${{ $room->price }}/Night</span><span><a href="{{ route('room-details', ['id' => $room->id]) }}" > View Details</a></span></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="rooms-grid__swiper-pagination swiper-pagination">
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection
