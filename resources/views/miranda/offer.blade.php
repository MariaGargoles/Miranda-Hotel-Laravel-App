@extends('layouts.app')
@section('title', 'Offer')
@section('content')
    <header class="banner">
        <div class="banner__inner banner__inner--rooms --max-width">
            <p class="font__title font__title--dark upper__case">The Ultimate Luxury </p>
            <h2 class="font__subtitle font__subtitle--banner font__subtitle--dark">Our Offers</h2>
        </div>
        <div class="banner__pagination">
            <span>Home</span><span>|</span><span>Offers</span>
        </div>
    </header>
    <section class="offers rooms__grid offers__cards --max-width">
        @foreach($rooms as $room)
            <div class="offers__card">
                @if($room->offer)
                    <a href="{{ route('room-details', ['id' => $room->id]) }}">
                        <img class="offers__img" src="{{ asset($room->photoUrl()) }}" alt="{{ $room->roomType }}">
                    </a>
                    <div class="offers__inner">
                        <header class="offers__card-header">
                            <div>
                                <p class="offers__informative-text upper__case">{{ $room->roomType }}</p>
                                <p class="offers__title">
                                    <a href="{{ route('room-details', ['id' => $room->id]) }}">{{ $room->roomType }}</a>
                                </p>
                            </div>
                            <div class="offers__prices">
                                <p class="offers__price offers__price--crossed">
                                    <span>${{ $room->price }}</span>
                                    <span>/Night</span>
                                </p>
                                <p class="offers__price">
                                    <span>${{ $room-> price - ($room -> price * $room -> discount / 100) }}</span>
                                    <span>/Night</span>
                                </p>
                            </div>
                        </header>
                        <div class="offers__card-body">
                            <p class="offers__text">
                                {{ $room->description }}
                            </p>
                            <section class="offers__amenities">
                                <ul class="offers__amenities-list room-details__amenities-list">
                                    <li class="room-details__amenities-list-item">
                                        <img class="room-details__amenities-list-item-img"
                                            src="assets/icon/amenities-air-conditioner.svg" alt="">
                                        <span class="room-details__amenities-list-item-text">Air conditioner </span>
                                    </li>
                                    <li class="room-details__amenities-list-item">
                                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-breakfast.svg"
                                            alt="">
                                        <span class="room-details__amenities-list-item-text">Breakfast</span>
                                    </li>
                                    <li class="room-details__amenities-list-item">
                                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-cleaning.svg"
                                            alt="">
                                        <span class="room-details__amenities-list-item-text">Cleaning</span>
                                    </li>
                                    <li class="room-details__amenities-list-item">
                                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-grocery.svg"
                                            alt="">
                                        <span class="room-details__amenities-list-item-text">Grocery</span>
                                    </li>
                                    <li class="room-details__amenities-list-item">
                                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-shop.svg"
                                            alt="">
                                        <span class="room-details__amenities-list-item-text">Shop near</span>
                                    </li>
                                </ul>
                                <ul class="offers__amenities-list room-details__amenities-list">
                                    <li class="room-details__amenities-list-item">
                                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-wifi.svg"
                                            alt="">
                                        <span class="room-details__amenities-list-item-text">High speed WiFi</span>
                                    </li>
                                    <li class="room-details__amenities-list-item">
                                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-kitchen.svg"
                                            alt="">
                                        <span class="room-details__amenities-list-item-text">Kitchen</span>
                                    </li>
                                    <li class="room-details__amenities-list-item">
                                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-shower.svg"
                                            alt="">
                                        <span class="room-details__amenities-list-item-text">Shower</span>
                                    </li>
                                    <li class="room-details__amenities-list-item">
                                        <img class="room-details__amenities-list-item-img"
                                            src="assets/icon/amenities-single-bed.svg" alt="">
                                        <span class="room-details__amenities-list-item-text">Single bed</span>
                                    </li>
                                    <li class="room-details__amenities-list-item">
                                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-towels.svg"
                                            alt="">
                                        <span class="room-details__amenities-list-item-text">Towels</span>
                                    </li>
                                </ul>
                            </section>
                            <button class="offers__button upper__case">
                                <a href="{{ route('room-details', ['id' => $room->id]) }}">Book Now</a>
                            </button>   
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </section>    
    <section class="offers__popular-rooms">
        <p class="offers__popular-rooms-informative-text upper__case">Popular List</p>
        <p class="offers__popular-rooms-title">Popular Rooms</p>
        <div class="offers__swiper swiper --max-width">
            <div class="offers__swiper-wrapper swiper-wrapper">
                @foreach($rooms as $room)
                    <div class="offers__swiper-slide rooms__grid-item swiper-slide">
                        <img src="{{ asset($room->photoUrl()) }}" alt="{{ $room->title }}">
                        <menu class="rooms__grid-item-menu rooms__menu offers__menu">
                                <span class="rooms__menu-item">
                                    <img src="assets/icon/bed.svg" alt="icono de una cama">
                                </span>
                                <span class="rooms__menu-item">
                                    <img src="assets/icon/wifi.svg" alt="icono de conexión wifi">
                                </span>
                                <span class="rooms__menu-item">
                                    <img src="assets/icon/car.svg" alt="icono de un coche">
                                </span>
                                <span class="rooms__menu-item">
                                    <img src="assets/icon/snowflake.svg" alt="icono de un copo de nieve">
                                </span>
                                <span class="rooms__menu-item">
                                    <img src="assets/icon/gym.svg" alt="icono de una mancuerna">
                                </span>
                                <span class="rooms__menu-item">
                                    <img src="assets/icon/no-smoking.svg" alt="icono de prohibido fumar">
                                </span>
                                <span class="rooms__menu-item">
                                    <img src="assets/icon/cocktail.svg" alt="icono de un coctel">
                                </span>
                        </menu>
                        <div class="rooms__grid-item-details offers__details">
                            <p class="rooms__grid-item-details-title">{{ $room->roomType }}</p>
                            <p class="rooms__grid-item-details-text">
                                {{ $room->description }}
                            </p>
                            <p class="rooms__grid-item-details-price">
                                <span>${{ $room->price - ($room->price * $room->discount / 100) }}/Night</span>
                                <span><a href="{{ route('room-details', ['id' => $room->id]) }}">More Details</a></span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection