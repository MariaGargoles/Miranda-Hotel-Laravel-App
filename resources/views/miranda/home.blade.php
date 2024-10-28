@extends('layouts.app')
@section('title', 'Home')
@section('content')

    <header class="banner">
        <div class="banner__inner --max-width">
            <p class="font__title font__title--dark  upper__case">The Ultimate Luxury Experience</p>
            <h2 class="font__subtitle font__subtitle--dark font__subtitle--banner-home">The Perfect<br />Base For You</h2>
            <button class="button button__banner upper__case"><a href="{{ route('about') }}">Take a Tour</a></button>
            <button class="button button__banner button--transparent upper__case"><a href="{{ route('contact') }}">Learn More</a></button>
        </div>
    </header>
    <section class="checking">
        <form class="checking__inner form --max-width" action="{{ route('rooms') }}" method="GET" id="availabilityForm">
            <div class="form__control">
                <div class="form__control-input">
                    <label class="checking__label" for="checkIn">Arrival Date</label>
                    <input class="checking__input" type="date" name="checkIn" id="checkIn">
                </div>
                <div class="form__control-input">
                    <label class="checking__label" for="checkOut">LeDeparture Date</label>
                    <input class="checking__input" type="date" name="checkOut" id="checkOut">
                </div>
            </div>
            <button class="button button--big upper__case" type="submit">Check availability</button>
        </form>
    </section>
    <section class="about-us">
        <div class="about-us__background"></div>
        <div class="about-us__inner --max-width">
            <section class="about-us__info">
                <h2 class="font__title font__title--weight-700 upper__case">About Us</h2>
                <p class="font__subtitle font__subtitle--height">Discover Our Underground.</p>
                <p class="font__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.
                </p>
                <button class="button upper__case"><a href="rooms.html">Book Now</a></button>
            </section>
            <section class="about-us__features">
                <img class="about-us__features-img" src="{{ asset('assets/img/team.jpg') }}" alt="">
                <div class="about-us__features-feature">
                    <img class="about-us__features-feature-img" src="{{ asset('assets/icon/strong-team.svg') }}"
                        alt="imagen con la silueta de tres personas">
                    <p class="about-us__features-feature-title">Strong Team</p>
                    <p class="about-us__features-feature-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor.</p>
                </div>
                <img class="about-us__features-img" src="{{ asset('assets/img/luxury-room-2.jpg') }}" alt="">
                <div class="about-us__features-feature about-us__features-feature--dark">
                    <img class="about-us__features-feature-img" src="{{ asset('assets/icon/luxury-room.svg') }}"
                        alt="imagen de un calendario con una flecha saliendo del mismo a la dirección izquierda">
                    <p class="about-us__features-feature-title about-us__features-feature-title--dark">Luxury Room</p>
                    <p class="about-us__features-feature-text about-us__features-feature-text--dark">Lorem ipsum dolor
                        sit
                        amet, consectetur adipisicing elit,
                        sed do eiusmod tempor.</p>
                </div>
            </section>
        </div>
    </section>
    <section class="rooms">
        <p class="font__title  upper__case">Rooms</p>
        <p class="font__subtitle">Hand Picked Rooms</p>
        <menu class="rooms__menu">
            <span class="rooms__menu-item">
                <img src="{{ ('assets/icon/bed.svg') }}" alt="icono de una cama">
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
        <div class="rooms__swiper swiper">
            <!-- Additional required wrapper -->
            <div class="rooms__swiper-wrapper swiper-wrapper">
                <!-- Slides -->
                <div class="rooms__swiper-slide swiper-slide"
                    style="background-image: url(assets/img/luxury-room.jpg);">
                </div>
                <div class="rooms__swiper-slide swiper-slide"
                    style="background-image: url(assets/img/luxury-room-3.jpg);">
                </div>
                <div class="rooms__swiper-slide swiper-slide"
                    style="background-image: url(assets/img/luxury-room-2.jpg);">
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="rooms__swiper-button-prev swiper-button-prev"></div>
            <div class="rooms__swiper-button-next swiper-button-next"></div>
        </div>
        <div class="rooms__details">
            <div class="rooms__details-info">
                <p class="rooms__details-title">Minimal Duplex Room</p>
                <p class="rooms__details-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore.
                </p>
            </div>
            <p class="rooms__details-price">
                <span>$</span>
                <span>345</span>
                <span>/Night</span>
            </p>
        </div>
    </section>
    <section class="intro-video">
        <div class="intro-video__background"></div>
        <div class="intro-video__inner --max-width">
            <p class="intro-video__informative-text upper__case">Intro Video</p>
            <p class="intro-video__title">Meet With Our Luxury Place.</p>
            <p class="intro-video__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat you have to understand this.
            </p>
            <iframe id="player" class="intro-video__video" src="https://www.youtube.com/embed/Bu3Doe45lcU" 
            title="Hotel Miranda in Bayahibe Dom. Rep. 4K" frameborder="0" allow="accelerometer; autoplay; encrypted-media; picture-in-picture;" allowfullscreen></iframe>
            <button class="intro-video__button button upper__case"><a href="offers.html">Book Now</a></button>
        </div>
    </section>
    <section class="facilities --max-width">
        <div class="facilities__inner ">
            <p class="facilities__informative-text upper__case">Facilities</p>
            <p class="facilities__title">Core Features</p>
            <div class="facilities__swiper swiper --max-width">
                <!-- Additional required wrapper -->
                <div class="facilities__swiper-wrapper swiper-wrapper">
                    <!-- Slides -->
                    <div class="facilities__swiper-slide swiper-slide">
                        <p class="facilities__swiper-slide-number">
                            01
                        </p>
                        <img class="facilities__swiper-slide-img" src="{{ ('assets/img/high-rating.svg') }}" alt="">
                        <p class="facilities__swiper-slide-title">Have High Rating</p>
                        <p class="facilities__swiper-slide-text">
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="facilities__swiper-slide swiper-slide">
                        <p class="facilities__swiper-slide-number">
                            02
                        </p>
                        <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/quiet-hours.svg') }}" alt="">
                        <p class="facilities__swiper-slide-title">Quiet Hours</p>
                        <p class="facilities__swiper-slide-text">
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="facilities__swiper-slide swiper-slide">
                        <p class="facilities__swiper-slide-number">
                            03
                        </p>
                        <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/location.svg') }}" alt="">
                        <p class="facilities__swiper-slide-title">Best Locations</p>
                        <p class="facilities__swiper-slide-text">
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="facilities__swiper-slide swiper-slide">
                        <p class="facilities__swiper-slide-number">
                            04
                        </p>
                        <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/free-cancelation.svg') }}" alt="">
                        <p class="facilities__swiper-slide-title">Free Cancellation</p>
                        <p class="facilities__swiper-slide-text">
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="facilities__swiper-slide swiper-slide">
                        <p class="facilities__swiper-slide-number">
                            05
                        </p>
                        <img class="facilities__swiper-slide-img" src="{{ ('assets/img/payment.svg') }}" alt="">
                        <p class="facilities__swiper-slide-title">Payment Options</p>
                        <p class="facilities__swiper-slide-text">
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="facilities__swiper-slide swiper-slide">
                        <p class="facilities__swiper-slide-number">
                            06
                        </p>
                        <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/special-offers.svg') }}" alt="">
                        <p class="facilities__swiper-slide-title">Special Offers</p>
                        <p class="facilities__swiper-slide-text">
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna..
                        </p>
                    </div>
                </div>
                <!-- If we need pagination -->
            </div>
            <div class="facilities__swiper-pagination swiper-pagination"></div>
        </div>
    </section>
    <section class="menu --max-width">
        <div class="menu__display">
            <img class="menu__display-img" src="{{ asset('assets/img/donut.svg') }}" alt="donut">
        </div>
        <div class="menu__inner">
            <p class="menu__informative-text upper__case">Menu</p>
            <h2 class="menu__title">Our Foods Menu</h2>
            <div class="menu-foods__swiper swiper">
                <!-- Additional required wrapper -->
                <div class="menu-foods__swiper-wrapper swiper-wrapper">
                    <!-- Slides -->
                    <div class="menu-foods__swiper-slide swiper-slide">
                        <article class="menu__article">
                            <img class="menu__article-img" src="{{ asset('assets/img/eggs-bacon.jpg') }}" alt="">
                            <div class="menu__article-text">
                                <p>Eggs & Bacon</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="menu__article-arrow" src="{{ ('assets/icon/arrow-hover.svg') }}" alt="">
                        </article>
                        <article class="menu__article">
                            <img class="menu__article-img" src="{{ ('assets/img/tea-coffe.jpg') }}" alt="">
                            <div class="menu__article-text">
                                <p>Tea or Coffe</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt="">
                        </article>
                        <article class="menu__article">
                            <img class="menu__article-img" src="{{ asset('assets/img/chia-outmeal.jpg') }}" alt="">
                            <div class="menu__article-text">
                                <p>Chia Oatmeal</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt="">
                        </article>
                    </div>
                    <div class="menu-foods__swiper-slide swiper-slide">
                        <article class="menu__article">
                            <img class="menu__article-img" src="{{ asset('assets/img/fruit-par.jpg') }}" alt="">
                            <div class="menu__article-text">
                                <p>Fruit Parfait</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt="">
                        </article>
                        <article class="menu__article">
                            <img class="menu__article-img" src="{{ asset('assets/img/marmalade.jpg') }}" alt="">
                            <div class="menu__article-text">
                                <p>Marmalade Selection</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt="">
                        </article>
                        <article class="menu__article">
                            <img class="menu__article-img" src="{{ asset('assets/img/chesse.jpg') }}" alt="">
                            <div class="menu__article-text">
                                <p>Cheese Plate</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt="">
                        </article>
                    </div>
                    <div class="menu-foods__swiper-slide swiper-slide">
                        <article class="menu__article">
                            <img class="menu__article-img" src="{{ asset('assets/img/eggs-bacon.jpg') }}" alt="">
                            <div class="menu__article-text">
                                <p>Eggs & Bacon</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt="">
                        </article>
                        <article class="menu__article">
                            <img class="menu__article-img" src="{{ asset('assets/img/tea-coffe.jpg') }}" alt="">
                            <div class="menu__article-text">
                                <p>Tea or Coffe</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt="">
                        </article>
                        <article class="menu__article">
                            <img class="menu__article-img" src="{{ asset('assets/img/chia-outmeal.jpg') }}" alt="">
                            <div class="menu__article-text">
                                <p>Chia Oatmeal</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt="">
                        </article>
                    </div>
                </div>
            </div>
            <div class="menu-foods__swiper-button-prev swiper-button-prev"></div>
            <div class=" menu-foods__swiper-button-next swiper-button-next"></div>
        </div>
        <div class="menu__swiper swiper">
            <!-- Additional required wrapper -->
            <div class="menu__swiper-wrapper swiper-wrapper">
                <!-- Slides -->
                <div class="menu__swiper-slide swiper-slide" style="background-image: url(assets/img/cooked-food.jpg);">
                </div>
                <div class="menu__swiper-slide swiper-slide"
                    style="background-image: url(assets/img/food-photography.jpg);">
                </div>
                <div class="menu__swiper-slide swiper-slide"
                    style="background-image: url(assets/img/grilled-steak.jpg);">
                </div>
            </div>
        </div>
        <div class="menu__swiper-pagination swiper-pagination"></div>
    </section>
    <section class="stats --max-width">
        <div class="stats__inner">
            <article class="stats__article">
                <img class="stats__article-img" src="{{ asset('assets/img/rocket.svg') }}" alt="cohete">
                <p class="stats__article-title">84k<span class="stats__article-title-plus">+</span></p>
                <p class="stats__article-text">Projects are Completed</p>
            </article>
            <article class="stats__article">
                <img class="stats__article-img" src="{{ asset('assets/img/persons.svg') }}" alt="tres siluetas de personas">
                <p class="stats__article-title">10M<span class="stats__article-title-plus">+</span></p>
                <p class="stats__article-text">Active Backers Around World</p>
            </article>
            <article class="stats__article">
                <img class="stats__article-img" src="{{ asset('assets/img/currency.svg') }}" alt="icono de una tabla de ganancias">
                <p class="stats__article-title">02k<span class="stats__article-title-plus">+</span></p>
                <p class="stats__article-text">Categories Served</p>
            </article>
            <article class="stats__article">
                <img class="stats__article-img" src="{{ asset('assets/img/book.svg') }}" alt="icono de un libro abierto">
                <p class="stats__article-title">100M<span class="stats__article-title-plus">+</span></p>
                <p class="stats__article-text">Idea Raised Funds</p>
            </article>
        </div>
    </section>
   

@endsection
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('availabilityForm').addEventListener('submit', function(event) {
            event.preventDefault();
            toastr.success('Redirecting to available rooms...' , {
                timeOut: 5000,
            });
            setTimeout(function() {
                event.target.submit();
            }, 1000);
        });
    });
</script>

    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
