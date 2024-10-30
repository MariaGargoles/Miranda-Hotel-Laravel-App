
@extends('layouts.app')
@section('title','Offers')
@section('content')
    <!-- SECTION OFFERS -->
    <section class="offers">
        <div class="roomsPage__content">
            <p class="roomsPage__content__title font--archivo">THE ULTIMATE LUXURY</p>
            <p class="roomsPage__content__subtitle font--old">Our Offers</p>
        </div>

        <div class="roomsPage__select ">
            <p class="roomsPage__select__container font--archivo">Home | Offers</p>
        </div>

        <div class="offers__grid">
    @foreach($offers as $offer)
        <!-- Mostrar solo si price y offer_price son diferentes -->
        @if($offer->price != $offer->offer_price)
            <div class="offers__roomsCards">
                <!-- Imagen de la habitación -->
                <img class="offers__roomsCards__imgHotel" src="{{ asset( $offer->image) }}" alt="{{ $offer->name }}">

                <div class="offers__roomsCards__price">
                    <!-- Mostrar precios -->
                    <img src="{{ asset('assets/img/priceYellow.svg') }}" alt="Precio original">
                    <img class="offers__roomsCards__price__img" src="{{ asset('assets/img/priceRed.svg') }}" alt="Precio de oferta">
                </div>

                <div class="offers__roomsCards__info">
                    <div class="offers__roomsCards__info__titles">
                        <!-- Nombre de la habitación -->
                        <h2 class="offers__roomsCards__info__titles__title font--archivo">{{ $offer->name }}</h2>
                        <!-- Descripción corta -->
                        <p class="offers__roomsCards__info__titles__subtitle font--old">{{ $offer->description_short }}</p>
                    </div>

                    <p class="offers__roomsCards__info__p font--roboto">{{ $offer->description }}</p>

                    <div class="offers__flex">
                        <!-- Lista de características  -->
                        <ul class="offers__roomsCards__info__ul">
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/airDetail.svg') }}" alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Air conditioner</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/breakDetail.svg') }}" alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Breakfast</p>
                            </li>
                            <!-- Añade más características según sea necesario -->
                        </ul>

                        <ul class="offers__roomsCards__info__ul">
                            <!-- Más características -->
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/cleanDetail.svg') }}" alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Cleaning</p>
                            </li>
                            <li class="offers__roomsCards__info__ul__li">
                                <img class="offers__roomsCards__info__ul__li__img" src="{{ asset('assets/img/groceryDetail.svg') }}" alt="">
                                <p class="offers__roomsCards__info__ul__li__p font--roboto">Grocery</p>
                            </li>
                            <!-- Añade más características según sea necesario -->
                        </ul>
                    </div>

                    <!-- Botón para reservar -->
                    <button class="button--color offers__roomsCards__btn">BOOK NOW</button>
                </div>
            </div>
        @endif
    @endforeach
</div>
    </section>


    <!-- END SECTION OFFERS -->

    @endsection