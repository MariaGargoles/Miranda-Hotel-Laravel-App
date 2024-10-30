@extends('layouts.app')
@section('title','Rooms')
@section('content')

    <!-- SECTION ROOMS PAGE -->
    <section class="roomsPage">

     <!-- Formulario de búsqueda -->
     <form action="{{ route('rooms.search') }}" method="GET" class="roomsPage__searchForm">
        <input type="text" name="query" placeholder="Search rooms..." value="{{ request('query') }}">
        <button type="submit">Search</button>
    </form>

        <div class="roomsPage__content">
            <p class="roomsPage__content__title font--archivo">THE ULTIMATE LUXURY</p>
            <p class="roomsPage__content__subtitle font--old">Ultimate Room</p>
        </div>

        <div class="roomsPage__select">
            <p class="roomsPage__select__container font--archivo">Home | Rooms</p>
        </div>

        <div class="roomsPage__grid">
            @foreach($rooms as $room)
                <div class="roomsPage__cards">
                    <img class="roomsPage__cards__img" src="{{ asset($room->image) }}" alt="{{ $room-> room_number }}">

                    <div class="roomsPage__cards__iconGroup">
                        <img src="{{ asset('assets/img/room.svg') }}" alt="Room Icon">
                        <img src="{{ asset('assets/img/wifi.svg') }}" alt="WiFi Icon">
                        <img src="{{ asset('assets/img/car.svg') }}" alt="Parking Icon">
                        <img src="{{ asset('assets/img/winter.svg') }}" alt="Heating Icon">
                        <img src="{{ asset('assets/img/gym.svg') }}" alt="Gym Icon">
                        <img src="{{ asset('assets/img/smoke.svg') }}" alt="No Smoking Icon">
                        <img src="{{ asset('assets/img/cocktel.svg') }}" alt="Cocktail Icon">
                    </div>

                    <div class="roomsPage__cards__info">
                        <div class="roomsPage__cards__info__description">
                    
                            <h2 class="roomsPage__cards__info__description__title font--old">{{ $room-> room_number }}</h2>
                
                            <p class="roomsPage__cards__info__description__p font--roboto">{{ $room->room_type }}</p>
                        </div>

                        <div class="roomsPage__cards__info__price">
                    
                            <h2 class="roomsPage__cards__info__price__number font--archivo">${{ $room->price }}/Night</h2>
                            
                            <a href="{{ url('rooms/' . $room->id) }}">
                                <button class="roomsPage__cards__info__price__btn font--archivo">Booking now</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="roomsPage__pagination">
            <img src="{{ asset('assets/img/Pagination.svg') }}"  alt="">
        </div>

    </section>

    <!-- END SECTION ROOMS PAGE -->
    @endsection