@extends('layouts.app')
@section('title','About')
@section('content')
    <!-- SECTION ABOUT -->
    <section class="about">
        <div class="about__content">
            <p class="about__content__title font--archivo">THE ULTIMATE LUXURY</p>
            <p class="about__content__subtitle font--old">About Us</p>
        </div>

        <div class="about__select">
            <p class="about__select__container font--archivo">Home | About</p>
        </div>

        <div class="about__video">
            <iframe class="introVideo__container__video" height="315"
            src="https://www.youtube.com/embed/Bu3Doe45lcU?si=rIg7_7zQ_E1CZcPt&amp;clip=Ugkxow2nTVqo59DJkHr6u3XrlVG9q_gKldk3&amp;clipt=EKjDARj4yQQ"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="video__video"></iframe>
            
        </div>
        <p class="about__video__text font--old">Hello. Our hotel has been present for over 20 years. We make the
            best for all our customers.</p>

        <div class="about__squares">
            <div class="about__squares__item">
                <img class="about__squares__item__img" src="{{ asset('assets/img/coffe-about.svg') }}" alt="">
                <p class="about__squares__item__text font--archivo">BREAKFAST</p>
            </div>

            <div class="about__squares__item">
                <img class="about__squares__item__img" src="{{ asset('assets/img/airport.png') }}" alt="">
                <p class="about__squares__item__text font--archivo">AIRPORT PICKUP</p>
            </div>

            <div class="about__squares__item">
                <img class="about__squares__item__img" src="{{ asset('assets/img/gps-about.svg') }}"  alt="">
                <p class="about__squares__item__text font--archivo">CITY GUIDE</p>
            </div>

            <div class="about__squares__item">
                <img class="about__squares__item__img"  src="{{ asset('assets/img/room-about.svg') }}" alt="">
                <p class="about__squares__item__text font--archivo">LUXURY ROOM</p>
            </div>
        </div>
    </section>
    <!-- END SECTION ABOUT-->


    <!-- SECTION RESTAURANT -->
    <section class="restaurant">
        <div class="restaurant__img">
            <img class="restaurant__img__container" src="{{ asset('assets/img/food-restaurant.jpg') }}"  alt="">
        </div>

        <div class="restaurant__container">
            <p class="restaurant__container__title font--archivo">RESTAURANT</p>
            <h3 class="restaurant__container__subtitle font--old">Get Restaurant Facilities & Many Other More</h3>
            <p class="restaurant__container__text font--archivo">Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do
                eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip.</p>
            <button class="button--color restaurant__btn">Take a Tour</button>
        </div>
    </section>
    <!-- END SECTION RESTAURANT -->


    <!-- SECTION FACILITIES -->
    <section class="facilitiesAbout">
        <div class="facilitiesAbout__titles">
            <p class="facilitiesAbout__titles__title font--archivo">FACILITIES</p>
            <p class="facilitiesAbout__titles__subtitle font--old">Core Features</p>
        </div>


        <!-- SLIDER PAGINATION -->
         <div class="swiper-facilities">
        <div class="swiper swiper-pag-abouts ">
            <div class="swiper swiper-pag-about ">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="facilitiesAbout__container">
                            <div class="facilitiesAbout__container__icons">
                                <img class="facilitiesAbout__container__icons__icon"
                                src="{{ asset('assets/img/icon-facilities.svg') }}" alt="">
                                <img class="facilitiesAbout__container__icons__01"
                                src="{{ asset('assets/img/icon01-about.svg') }}" alt="">
                            </div>
    
                            <div class="facilitiesAbout__container__text">
                                <p class="facilitiesAbout__container__text__title font--old">Have High Rating</p>
                                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna..</p>
    
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="facilitiesAbout__container">
                            <div class="facilitiesAbout__container__icons">
                                <img class="facilitiesAbout__container__icons__icon"
                                src="{{ asset('assets/img/reloj.svg') }}">

                                <img class="facilitiesAbout__container__icons__01"
                                src="{{ asset('assets/img/02.svg') }}"

                                    alt="">
                            </div>
    
                            <div class="facilitiesAbout__container__text">
                                <p class="facilitiesAbout__container__text__title font--old">Quiet Hours</p>
                                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna..</p>
    
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="facilitiesAbout__container">
                            <div class="facilitiesAbout__container__icons">
                                <img class="facilitiesAbout__container__icons__icon"
                                src="{{ asset('assets/img/locations.svg') }}">
                                <img class="facilitiesAbout__container__icons__01" 
                                src="{{ asset('assets/img/03.svg') }}"
                                    alt="">
                            </div>
    
                            <div class="facilitiesAbout__container__text">
                                <p class="facilitiesAbout__container__text__title font--old">Best Locations</p>
                                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna..</p>
    
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="facilitiesAbout__container">
                            <div class="facilitiesAbout__container__icons">
                                <img class="facilitiesAbout__container__icons__icon"
                                src="{{ asset('assets/img/cancellation.svg') }}" alt="">
                                <img class="facilitiesAbout__container__icons__01" 
                                src="{{ asset('assets/img/04.svg') }}"

                                    alt="">
                            </div>
    
                            <div class="facilitiesAbout__container__text">
                                <p class="facilitiesAbout__container__text__title font--old">Free Cancellation</p>
                                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna..</p>
    
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="facilitiesAbout__container">
                            <div class="facilitiesAbout__container__icons">
                                <img class="facilitiesAbout__container__icons__icon"
                                src="{{ asset('assets/img/payment.svg') }}" alt="">
                                <img class="facilitiesAbout__container__icons__01" 
                                src="{{ asset('assets/img/05.svg') }}"
                                    alt="">
                            </div>
    
                            <div class="facilitiesAbout__container__text">
                                <p class="facilitiesAbout__container__text__title font--old">Payment Options</p>
                                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna..</p>
    
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="facilitiesAbout__container">
                            <div class="facilitiesAbout__container__icons">
                                <img class="facilitiesAbout__container__icons__icon"
                                src="{{ asset('assets/img/special.svg') }}" alt="">
                                <img class="facilitiesAbout__container__icons__01" 
                                src="{{ asset('assets/img/06.svg') }}"
                                    alt="">
                            </div>
    
                            <div class="facilitiesAbout__container__text">
                                <p class="facilitiesAbout__container__text__title font--old">Special Offers</p>
                                <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna..</p>
    
                            </div>
                        </div>
                    </div>
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </div>
        <!-- END SLIDER PAGINATION -->

 <!-- GRID FOR DESKTOP -->
<div class="facilitiesGrid">
    <!-- Card 1 -->
    <div class="facilitiesAbout__container">
        <div class="facilitiesAbout__container__icons">
            <img class="facilitiesAbout__container__icons__icon" src="{{ asset('assets/img/icon-facilities.svg') }}" alt="">
            <img class="facilitiesAbout__container__icons__01" src="{{ asset('assets/img/icon01-about.svg') }}" alt="">
        </div>
        <div class="facilitiesAbout__container__text">
            <p class="facilitiesAbout__container__text__title font--old">Have High Rating</p>
            <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="facilitiesAbout__container">
        <div class="facilitiesAbout__container__icons">
            <img class="facilitiesAbout__container__icons__icon" src="{{ asset('assets/img/reloj.svg') }}" alt="">
            <img class="facilitiesAbout__container__icons__01" src="{{ asset('assets/img/02.svg') }}" alt="">
        </div>
        <div class="facilitiesAbout__container__text">
            <p class="facilitiesAbout__container__text__title font--old">Quiet Hours</p>
            <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="facilitiesAbout__container">
        <div class="facilitiesAbout__container__icons">
            <img class="facilitiesAbout__container__icons__icon" src="{{ asset('assets/img/locations.svg') }}" alt="">
            <img class="facilitiesAbout__container__icons__01" src="{{ asset('assets/img/03.svg') }}" alt="">
        </div>
        <div class="facilitiesAbout__container__text">
            <p class="facilitiesAbout__container__text__title font--old">Best Locations</p>
            <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="facilitiesAbout__container">
        <div class="facilitiesAbout__container__icons">
            <img class="facilitiesAbout__container__icons__icon" src="{{ asset('assets/img/cancellation.svg') }}" alt="">
            <img class="facilitiesAbout__container__icons__01" src="{{ asset('assets/img/04.svg') }}" alt="">
        </div>
        <div class="facilitiesAbout__container__text">
            <p class="facilitiesAbout__container__text__title font--old">Free Cancellation</p>
            <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
        </div>
    </div>

    <!-- Card 5 -->
    <div class="facilitiesAbout__container">
        <div class="facilitiesAbout__container__icons">
            <img class="facilitiesAbout__container__icons__icon" src="{{ asset('assets/img/payment.svg') }}" alt="">
            <img class="facilitiesAbout__container__icons__01" src="{{ asset('assets/img/05.svg') }}" alt="">
        </div>
        <div class="facilitiesAbout__container__text">
            <p class="facilitiesAbout__container__text__title font--old">Payment Options</p>
            <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
        </div>
    </div>

    <!-- Card 6 -->
    <div class="facilitiesAbout__container">
        <div class="facilitiesAbout__container__icons">
            <img class="facilitiesAbout__container__icons__icon" src="{{ asset('assets/img/special.svg') }}" alt="">
            <img class="facilitiesAbout__container__icons__01" src="{{ asset('assets/img/06.svg') }}" alt="">
        </div>
        <div class="facilitiesAbout__container__text">
            <p class="facilitiesAbout__container__text__title font--old">Special Offers</p>
            <p class="facilitiesAbout__container__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
        </div>
    </div>
</div>
<!-- END GRID -->


</section>
<!-- END SECTION FACILITIES -->


<!-- SECTION COUNTER -->
<section class="counter">
    <div class="counter__text">
        <p class="counter__text__title font--archivo">COUNTER</p>
        <h3 class="counter__text__subtitle font--old">Some Fun Facts</h3>
    </div>

    <div class="counter__facts">
        <div class="counter__facts__fact">
            <img class="counter__facts__fact__img" src="{{ asset('assets/img/person-counter.svg') }}" alt="">
            <div class="counter__facts__fact__text">
                <h2 class="counter__facts__fact__text__number font--old">8000</h2>
                <p class="counter__facts__fact__text__p font--roboto"> Happy Users</p>
            </div>
            <img class="counter__facts__imgFlecha" src="{{ asset('assets/img/flecha-counter.svg') }}" alt="">
        </div>

        <div class="counter__facts__fact">
            <img class="counter__facts__fact__img" src="{{ asset('assets/img/star-counter.svg') }}" alt="">
            <div class="counter__facts__fact__text">
                <h2 class="counter__facts__fact__text__number font--old">10M</h2>
                <p class="counter__facts__fact__text__p font--roboto"> Reviews & Appriciate</p>
            </div>
            <img class="counter__facts__imgFlecha" src="{{ asset('assets/img/flecha-counter.svg') }}" alt="">
        </div>

        <div class="counter__facts__fact">
            <img class="counter__facts__fact__img" src="{{ asset('assets/img/world-counter.svg') }}" alt="">
            <div class="counter__facts__fact__text">
                <h2 class="counter__facts__fact__text__number font--old">100</h2>
                <p class="counter__facts__fact__text__p font--roboto"> Country Coverage</p>
            </div>
            <img class="counter__facts__imgFlecha" src="{{ asset('assets/img/flecha-counter.svg') }}" alt="">
        </div>
    </div>

    <!-- SLIDER PAGINATION - SOLO MOVIL -->
    <div class="swiper__pagination__about swiper-pag-abouts">
        <div class="swiper swiper-pag-about">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="counter__img__room" src="{{ asset('assets/img/room-counter.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="counter__img__room" src="{{ asset('assets/img/room-counter.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="counter__img__room" src="{{ asset('assets/img/room-counter.jpg') }}" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- END SLIDER PAGINATION -->

    <!-- IMAGENES - DESKTOP -->
    <div class="counter__images">
        <img class="counter__images__img" src="{{ asset('assets/img/room-counter.jpg') }}" alt="Room Image 1">
        <img class="counter__images__img" src="{{ asset('assets/img/room-counter.jpg') }}" alt="Room Image 2">
    </div>
</section>
<!-- END SECTION COUNTER -->
@endsection