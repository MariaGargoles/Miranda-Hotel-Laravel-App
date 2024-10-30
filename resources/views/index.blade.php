@extends('layouts.app')
@section('title','Home')
@section('content')
    <!-- SECTION MAIN -->
    <section class="main">
        <div class="main__container">
            <div class="main__container--text font--archivo">
                THE ULTIMATE LUXURY EXPERIENCE
            </div>

            <div class="main__container--title font--old">
                The Perfect
                Base For You
            </div>

            <div class="main__container--buttons ">
                <button class="button--color font--archivo">TAKE A TOUR</button>
                <button class="button--black btn font--archivo">LEARN MORE</button>
            </div>

        </div>

        <div class="main__form">
            <form action="" class="main__form__group">
                <div class="main__form--input font--roboto">
                    <p class="main__form--input--text">Arrival Date</p>
                    <input class="main__form--input--container" id="arrival-date" type="date">
                </div>

                <div class="main__form--input left font--roboto">
                    <p class="main__form--input--text">Departure Date</p>
                    <input class="main__form--input--container" id="departure-date" type="date">
                </div>

                <button class="button--color btn font--archivo">CHECK AVAILABILITY</button>
            </form>
        </div>
    </section>
    <!-- END SECTION MAIN -->

    <!-- SECTION ABOUT-US -->
     <div class="sectionAbout">
    <section class="about__us">
        <p class="about__us--title font--archivo">ABOUT US</p>
        <div class="about__us--container">

            <p class="about__us--container--title font--old">Discover Our Underground.</p>
            <p class="about__us--container--text font--archivo">Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            <button class="button--color">BOOK NOW</button>
        </div>

    </section>

    <!-- SECTION ABOUT US FEATURES -->
    <section class="about__us__features">
        <div class="about__us__features__employed">
            <img class="about__us__features--img" src="assets/imagenes/personal-hotel.jpg" alt="">
            <div class="about__us__features--feature">
                <img src="{{ asset('assets/img/group-color.svg') }}" alt="">
                <img src="{{ asset('assets/img/group-white.svg') }}" class="about__us__features--feature--img"  alt="">
                <p class="about__us__features--feature--title font--old">Strong Team</p>
                <p class="about__us__features--feature--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed
                    do eiusmod tempor.</p>
            </div>
        </div>

        <div class="about__us__features__luxuryRoom">
            <img class="about__us__features--imgLuxury" src="{{ asset('assets/img/hotel-luxury.jpg') }}"  alt="">
            <div class="about__us__features--luxury--container">
                <img class="about__us__features--luxury--container--icon" src="{{ asset('assets/img/calendar-luxury.jpg') }}" 
                    alt="">
                <p class="about__us__features--luxury--container--title font--old">Luxury Room</p>
                <p class="about__us__features--luxury--container--text font--roboto">Lorem ipsum dolor sit amet,
                    consectetur
                    adipisicing elit, sed do eiusmod tempor.</p>
            </div>
        </div>

    </section>
</div>

    <!-- END SECTION ABOUT US FEATURES -->

    <!-- END SECTION ABOUT-US -->

<!-- SECTION ROOMS -->
<section class="rooms">
    <div class="rooms__titles">
        <p class="rooms__titles--title font--archivo">ROOMS</p>
        <p class="rooms__titles--subtitle font--old">Hand Picked Rooms</p>
    </div>

    <!-- Slider main container -->
    <div class="swiper-arrowTests">
        <div class="swiper swiper-arrowFacilities">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="rooms__container">
                        <div class="rooms__container--iconGroup">
                            <img src="{{ asset('assets/img/room.svg') }}" alt="">
                            <img src="{{ asset('assets/img/wifi.svg') }}" alt="">
                            <img src="{{ asset('assets/img/car.svg') }}" alt="">
                            <img src="{{ asset('assets/img/winter.svg') }}" alt="">
                            <img src="{{ asset('assets/img/gym.svg') }}" alt="">
                            <img src="{{ asset('assets/img/smoke.svg') }}" alt="">
                            <img src="{{ asset('assets/img/cocktel.svg') }}" alt="">
                        </div>

                        <img class="rooms__container__doupleRoom" src="{{ asset('assets/img/doupleRoom.png') }}" alt="">

                        <div class="rooms__container--info">
                            <div class="rooms__container--info--description">
                                <h2 class="rooms__container--info--description--title font--old">Minimal Duplex Room</h2>
                                <p class="rooms__container--info--description--text font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>

                            <div class="rooms__container--info--price">
                                <h2 class="rooms__container--info--price--number font--archivo">$345</h2>
                                <p class="rooms__container--info--price--text">/Night</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rooms__container">
                        <div class="rooms__container--iconGroup">
                            <img src="{{ asset('assets/img/room.svg') }}" alt="">
                            <img src="{{ asset('assets/img/wifi.svg') }}" alt="">
                            <img src="{{ asset('assets/img/car.svg') }}" alt="">
                            <img src="{{ asset('assets/img/winter.svg') }}" alt="">
                            <img src="{{ asset('assets/img/gym.svg') }}" alt="">
                            <img src="{{ asset('assets/img/smoke.svg') }}" alt="">
                            <img src="{{ asset('assets/img/cocktel.svg') }}" alt="">
                        </div>

                        <img class="rooms__container__doupleRoom" src="{{ asset('assets/img/doupleRoom.png') }}" alt="">

                        <div class="rooms__container--info">
                            <div class="rooms__container--info--description">
                                <h2 class="rooms__container--info--description--title font--old">Minimal Duplex Room</h2>
                                <p class="rooms__container--info--description--text font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>

                            <div class="rooms__container--info--price">
                                <h2 class="rooms__container--info--price--number font--archivo">$345</h2>
                                <p class="rooms__container--info--price--text">/Night</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev swiper-button-prev--izq"></div>
            <div class="swiper-button-next swiper-button-prev--der"></div>
        </div>
    </div>
</section>
<!-- END SECTION ROOMS -->



    <!-- SECTION INTRO VIDEO -->
    <section class="introVideo">
        <div class="introVideo__flex">
            <div class="introVideo__text">
                <p class="introVideo__text--intro font--archivo">INTRO VIDEO</p>
                <h2 class="introVideo__text--title font--old">Meet With Our Luxury Place.</h2>
                <p class="introVideo__text--p font--archivo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat you have to understand this.</p>
            </div>
    
            <div class="introVideo__container">
                <iframe class="introVideo__container__video" height="315"
                    src="https://www.youtube.com/embed/Bu3Doe45lcU?si=rIg7_7zQ_E1CZcPt&amp;clip=Ugkxow2nTVqo59DJkHr6u3XrlVG9q_gKldk3&amp;clipt=EKjDARj4yQQ"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="video__video"></iframe>
    
                <button class="button--color">BOOK NOW</button>
            </div>
        </div>
       

    </section>
    <!-- END SECTION INTRO VIDEO -->






<!-- SECTION FACILITIES -->
<section class="facilities">
    <div class="facilities__titles">
        <p class="facilities__titles--title font--archivo">Facilities</p>
        <p class="facilities__titles--subtitle font--old">Core Features</p>
    </div>

    <!-- SLIDER PAGINATION - Visible only on mobile -->
    <div class="swiper__pagination swiper__pagination--facilities swiper-mobile">
        <div class="swiper swiper-pag menu__img__container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="facilities__container">
                        <div class="facilities__container--icons">
                            <img class="facilities__container--icons--icon" src="{{ asset('assets/img/icon-facilities.svg') }}" alt="">
                            <h2 class="facilities__container--icons--number font--archivo">01</h2>
                        </div>
                        <div class="facilities__container--text">
                            <p class="facilities__container--text--title font--old">Have High Rating</p>
                            <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="facilities__container">
                        <div class="facilities__container--icons">
                            <img class="facilities__container--icons--icon" src="{{ asset('assets/img/reloj.svg') }}" alt="">
                            <h2 class="facilities__container--icons--number font--archivo">02</h2>
                        </div>
                        <div class="facilities__container--text">
                            <p class="facilities__container--text--title font--old">Quiet Hours</p>
                            <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="facilities__container">
                        <div class="facilities__container--icons">
                            <img class="facilities__container--icons--icon" src="{{ asset('assets/img/locations.svg') }}" alt="">
                            <h2 class="facilities__container--icons--number font--archivo">03</h2>
                        </div>
                        <div class="facilities__container--text">
                            <p class="facilities__container--text--title font--old">Best Locations</p>
                            <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="facilities__container">
                        <div class="facilities__container--icons">
                            <img class="facilities__container--icons--icon" src="{{ asset('assets/img/cancellation.svg') }}" alt="">
                            <h2 class="facilities__container--icons--number font--archivo">04</h2>
                        </div>
                        <div class="facilities__container--text">
                            <p class="facilities__container--text--title font--old">Free Cancellation</p>
                            <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="facilities__container">
                        <div class="facilities__container--icons">
                            <img class="facilities__container--icons--icon" src="{{ asset('assets/img/payment.svg') }}" alt="">
                            <h2 class="facilities__container--icons--number font--archivo">05</h2>
                        </div>
                        <div class="facilities__container--text">
                            <p class="facilities__container--text--title font--old">Payment Options</p>
                            <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="facilities__container">
                        <div class="facilities__container--icons">
                            <img class="facilities__container--icons--icon" src="{{ asset('assets/img/special.svg') }}" alt="">
                            <h2 class="facilities__container--icons--number font--archivo">06</h2>
                        </div>
                        <div class="facilities__container--text">
                            <p class="facilities__container--text--title font--old">Special Offers</p>
                            <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Desktop Grid Version - Hidden on mobile -->
    <div class="facilities-grid-container">
        <div class="facilities-grid-item">
            <div class="facilities__container">
                <div class="facilities__container--icons">
                    <img class="facilities__container--icons--icon" src="{{ asset('assets/img/icon-facilities.svg') }}" alt="">
                    <h2 class="facilities__container--icons--number font--archivo">01</h2>
                </div>
                <div class="facilities__container--text">
                    <p class="facilities__container--text--title font--old">Have High Rating</p>
                    <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="facilities-grid-item">
            <div class="facilities__container">
                <div class="facilities__container--icons">
                    <img class="facilities__container--icons--icon" src="{{ asset('assets/img/reloj.svg') }}" alt="">
                    <h2 class="facilities__container--icons--number font--archivo">02</h2>
                </div>
                <div class="facilities__container--text">
                    <p class="facilities__container--text--title font--old">Quiet Hours</p>
                    <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="facilities-grid-item">
            <div class="facilities__container">
                <div class="facilities__container--icons">
                    <img class="facilities__container--icons--icon" src="{{ asset('assets/img/locations.svg') }}" alt="">
                    <h2 class="facilities__container--icons--number font--archivo">03</h2>
                </div>
                <div class="facilities__container--text">
                    <p class="facilities__container--text--title font--old">Best Locations</p>
                    <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="facilities-grid-item">
            <div class="facilities__container">
                <div class="facilities__container--icons">
                    <img class="facilities__container--icons--icon" src="{{ asset('assets/img/cancellation.svg') }}" alt="">
                    <h2 class="facilities__container--icons--number font--archivo">04</h2>
                </div>
                <div class="facilities__container--text">
                    <p class="facilities__container--text--title font--old">Free Cancellation</p>
                    <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="facilities-grid-item">
            <div class="facilities__container">
                <div class="facilities__container--icons">
                    <img class="facilities__container--icons--icon" src="{{ asset('assets/img/payment.svg') }}" alt="">
                    <h2 class="facilities__container--icons--number font--archivo">05</h2>
                </div>
                <div class="facilities__container--text">
                    <p class="facilities__container--text--title font--old">Payment Options</p>
                    <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="facilities-grid-item">
            <div class="facilities__container">
                <div class="facilities__container--icons">
                    <img class="facilities__container--icons--icon" src="{{ asset('assets/img/special.svg') }}" alt="">
                    <h2 class="facilities__container--icons--number font--archivo">06</h2>
                </div>
                <div class="facilities__container--text">
                    <p class="facilities__container--text--title font--old">Special Offers</p>
                    <p class="facilities__container--text--p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION FACILITIES -->




 <!-- SECTION MENU -->
<section class="menu">
    <div class="menu__img">
        <img src="{{ asset('assets/img/cookie.svg') }}" alt="">
    </div>

    <div class="menu__text">
        <p class="menu__title font--archivo">MENU</p>
        <p class="menu__subtitle font--old">Our Foods Menu</p>
    </div>

    <!-- SLIDER BUTTONS ARROWS -->
    <div class="swiper-arrows">
        <div class="swiper swiper-arrow">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="menu__container">
                        <div class="menu__container__menus">
                            <img class="menu__container__menus__img" src="{{ asset('assets/img/bacon.jpg') }}" alt="">
                            <div class="menu__container__menus__text">
                                <p class="menu__container__menus__text__title font--old">Eggs & Bacon</p>
                                <p class="menu__container__menus__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>

                        <div class="menu__container__menus">
                            <img class="menu__container__menus__img" src="{{ asset('assets/img/coffe.jpg') }}" alt="">
                            <div class="menu__container__menus__text">
                                <p class="menu__container__menus__text__title font--old">Tea or Coffee</p>
                                <p class="menu__container__menus__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>

                        <div class="menu__container__menus">
                            <img class="menu__container__menus__img" src="{{ asset('assets/img/chia2.jpg') }}" alt="">
                            <div class="menu__container__menus__text">
                                <p class="menu__container__menus__text__title font--old">Chia Oatmeal</p>
                                <p class="menu__container__menus__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ********* -->
                <div class="swiper-slide">
                    <div class="menu__container">
                        <div class="menu__container__menus">
                            <img class="menu__container__menus__img" src="{{ asset('assets/img/fruit2.jpg') }}" alt="">
                            <div class="menu__container__menus__text">
                                <p class="menu__container__menus__text__title font--old">Fruit Parfait</p>
                                <p class="menu__container__menus__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>

                        <div class="menu__container__menus">
                            <img class="menu__container__menus__img" src="{{ asset('assets/img/marmalade.jpg') }}" alt="">
                            <div class="menu__container__menus__text">
                                <p class="menu__container__menus__text__title font--old">Marmalade Selection</p>
                                <p class="menu__container__menus__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>

                        <div class="menu__container__menus">
                            <img class="menu__container__menus__img" src="{{ asset('assets/img/cheeeesse.jpg') }}" alt="">
                            <div class="menu__container__menus__text">
                                <p class="menu__container__menus__text__title font--old">Cheese Plate</p>
                                <p class="menu__container__menus__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev swiper-button-prev--disable"></div>
            <div class="swiper-button-next swiper-button-prev--menu"></div>
        </div>
    </div>

    <!-- SLIDER PAGINATION -->
    <div class="swiper__pagination">
        <div class="swiper__pagination__desktop">
            <div class="swiper swiper-pag menu__img__container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img class="menu__img__container__cheese" src="{{ asset('assets/img/cheese.webp') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="menu__img__container__cheese" src="{{ asset('assets/img/marmalade.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="menu__img__container__cheese" src="{{ asset('assets/img/yogurr.jpg') }}" alt="">
                    </div>
                    <!-- More slides can be added here -->
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- END SLIDER PAGINATION -->
</section>
<!-- END SECTION MENU -->



<!-- SECTION ICON FEATURES -->
<section class="iconFeatures">
    <div class="iconFeatures__container">
        <div class="iconFeatures__container__group">
            <img class="iconFeatures__container__group__img" src="{{ asset('assets/img/nave.svg') }}" alt="">
            <h1 class="iconFeatures__container__group__title font--roboto">84k+</h1>
            <p class="iconFeatures__container__group__subtitle font--roboto">Projects are Completed</p>
        </div>

        <div class="iconFeatures__container__group">
            <img class="iconFeatures__container__group__img" src="{{ asset('assets/img/persons.svg') }}" alt="">
            <h1 class="iconFeatures__container__group__title font--roboto">10M+</h1>
            <p class="iconFeatures__container__group__subtitle font--roboto">Active Backers Around World</p>
        </div>

        <div class="iconFeatures__container__group">
            <img class="iconFeatures__container__group__img" src="{{ asset('assets/img/person-price.svg') }}" alt="">
            <h1 class="iconFeatures__container__group__title font--roboto">02k+</h1>
            <p class="iconFeatures__container__group__subtitle font--roboto">Categories Served</p>
        </div>

        <div class="iconFeatures__container__group">
            <img class="iconFeatures__container__group__img" src="{{ asset('assets/img/book.svg') }}" alt="">
            <h1 class="iconFeatures__container__group__title font--roboto">100M+</h1>
            <p class="iconFeatures__container__group__subtitle font--roboto">Idea Raised Funds</p>
        </div>
    </div>
</section>
<!-- END SECTION ICON FEATURES -->


    @endsection