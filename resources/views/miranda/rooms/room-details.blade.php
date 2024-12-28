@extends('layouts.app')
@section('title', 'Rooms Details')
@section('content')

    <header class="banner">
        <div class="banner__inner banner__inner--rooms --max-width">
            <p class="font__title font__title--dark upper__case">The Ultimate Luxury</p>
            <h2 class="font__subtitle font__subtitle--banner font__subtitle--dark">Ultimate<br> Room</h2>
        </div>
        <div class="banner__pagination">
            <span>Home</span><span>|</span><span>Rooms Details</span>
        </div>
    </header>
    <section class="room-details__details --max-width">
        <div class="room-details__details-info">
            <div class="details-info__text">
                <div>
                    <p class="room-details__details-informative-text upper__case">{{ $room->roomType }}</p>
                    <p class="room-details__details-title">{{ $room->name }}</p>
                </div>
                <p class="room-details__details-price">
                    <span>$</span>
                    <span>{{ $room->price }}</span>
                    <span>/Night</span>
                </p>
            </div>
            <img class="room-details__details-img" src="{{  asset($room->photoUrl())  }}" alt="{{ $room->name }}">
        </div>

        <form class="room-details__form" method="POST" action="{{ route('rooms.book', $room->id) }}">
            @csrf
            <div class="room-details__form-title">
                <span>Check Availability</span>
            </div>
            <div class="room-details__form-control">
                <label for="checkIn">Check In</label>
                <input id="checkIn" name="checkIn" type="date" required>
            </div>
            <div class="room-details__form-control">
                <label for="checkOut">Check Out</label>
                <input id="checkOut" name="checkOut" type="date" required>
            </div>
            <div class="room-details__form-control">
                <label for="fullName">Full Name</label>
                <input id="fullName" name="fullName" type="text" required>
            </div>
            <div class="room-details__form-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" required>
            </div>
            <div class="room-details__form-control">
                <label for="phone">Phone</label>
                <input id="phone" name="phone" type="text" required>
            </div>
            <div class="room-details__form-control">
                <label for="specialRequest">Special Request</label>
                <input id="specialRequest" name="specialRequest" type="text">
            </div>
            <button class="button upper__case" type="submit">Check Availability</button>
        </form>

        <p class="room-details__text">
            {{ $room->description }}
        </p>
    </section>
    <section class="room-details__amenities --max-width">
        <p class="room-details__amenities-title">Amenities</p>
        <ul class="room-details__amenities-list">
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="{{ asset('assets/icon/amenities-air-conditioner.svg') }}"
                    alt="">
                <span class="room-details__amenities-list-item-text">Air conditioner </span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="{{ asset('assets/icon/amenities-breakfast.svg') }}" alt="">
                <span class="room-details__amenities-list-item-text">Breakfast</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="{{ asset('assets/icon/amenities-cleaning.svg') }}" alt="">
                <span class="room-details__amenities-list-item-text">Cleaning</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="{{ asset('assets/icon/amenities-grocery.svg') }}" alt="">
                <span class="room-details__amenities-list-item-text">Grocery</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="{{ asset('assets/icon/amenities-shop.svg') }}" alt="">
                <span class="room-details__amenities-list-item-text">Shop near</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="{{ asset('assets/icon/amenities-online-support.svg') }}"
                    alt="">
                <span class="room-details__amenities-list-item-text">24/7 Online Support</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="{{ asset('assets/icon/amenities-smart-security.svg') }}"
                    alt="">
                <span class="room-details__amenities-list-item-text">Smart Security</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="{{ asset('assets/icon/amenities-wifi.svg') }}" alt="">
                <span class="room-details__amenities-list-item-text">High speed WiFi</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="{{ asset('assets/icon/amenities-kitchen.svg') }}" alt="">
                <span class="room-details__amenities-list-item-text">Kitchen</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="{{ asset('assets/icon/amenities-shower.svg') }}" alt="">
                <span class="room-details__amenities-list-item-text">Shower</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="{{ asset('assets/icon/amenities-single-bed.svg') }}" alt="">
                <span class="room-details__amenities-list-item-text">Single bed</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="{{ asset('assets/icon/amenities-towels.svg') }} alt="">
                <span class="room-details__amenities-list-item-text">Towels</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="{{ asset('assets/icon/amenities-strong-locker.svg') }}" alt="">
                <span class="room-details__amenities-list-item-text">Strong Locker</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="{{ asset('assets/icon/amenities-expert.svg') }}" alt="">
                <span class="room-details__amenities-list-item-text">Expert Team</span>
            </li>
        </ul>
    </section>
    <section class="room-details__founder --max-width">
        <div class="room-details__founder-content">
            <div class="room-details__founder-img" style="background-image: url({{ asset('assets/img/bg-footer.png') }});">
                <div class="room-details__founder-elipsis">
                    <img class="room-details__founder-check" src="{{ asset('assets/icon/check.svg') }}" alt="">
                </div>
            </div>
            <p class="room-details__founder-title">Rosalina D. William</p>
            <p class="room-details__founder-subtitle">Founder, Qux Co.</p>
            <p class="room-details__founder-text">
                Lorem ipsum dolor sit amet, consectetur
                adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore.
            </p>
        </div>
    </section>
    <section class="room-details__cancellation --max-width">
        <p class="room-details__cancellation-title">Cancellation</p>
        <p class="room-details__cancellation-text">
            Phasellus volutpat neque a tellus venenatis,
            a euismod augue facilisis. Fusce ut metus
            mattis, consequat metus nec, luctus lectus.
            Pellentesque orci quis hendrerit sed eu dolor.
            Cancel up to 14 days to get a full refund.
        </p>
    </section>
    <section class="offers__popular-rooms offers__popular-rooms--ligth room-details__related-rooms --max-width">
        <p class="offers__popular-rooms-title offers__popular-rooms-title--related-rooms">Related Rooms</p>
       
        <div class="offers__swiper swiper --max-width">
            <!-- Additional required wrapper -->
            <div class="offers__swiper-wrapper swiper-wrapper">
            @foreach ($rooms as $room)
                <div class="offers__swiper-slide rooms__grid-item swiper-slide">
                    <img src="{{  asset($room->photoUrl())  }}" alt="{{ $room->roomType }}">
                    <menu class="rooms__grid-item-menu rooms__menu offers__menu">
                        <span class="rooms__menu-item">
                            <img src="{{ asset('assets/icon/bed.svg')}}" alt="icono de una cama">
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
                    <div class="rooms__grid-item-details offers__details">
                        <p class="rooms__grid-item-details-title">{{ $room->roomType }}</p>
                        <p class="rooms__grid-item-details-text">{{ $room->description }}</p>
                        <p class="rooms__grid-item-details-price">
                            <span>${{ $room->price }}/Night</span><span><a href="{{ route('room-details', ['id' => $room->id]) }}"></a></span>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if (session('success'))
            toastr.success('{{ session('success') }}', '¡Thank you!', {
                timeOut: 5000
            });
        @endif

        @if (session('error'))
            toastr.error('{{ session('error') }}', 'Sorry', {
                timeOut: 5000
            });
        @endif
    });
</script>