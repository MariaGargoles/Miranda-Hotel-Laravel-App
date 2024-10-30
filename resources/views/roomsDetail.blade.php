@extends('layouts.app')
@section('title','RoomsDetail')
@section('content')
   <!-- SECTION ROOMS DETAIL -->
<section class="roomsDetail">
    <div class="roomsPage__content">
        <p class="roomsPage__content__title font--archivo">THE ULTIMATE LUXURY</p>
        <p class="roomsPage__content__subtitle font--old">Ultimate Room</p>
    </div>

    <div class="roomsPage__select">
        <p class="roomsPage__select__container font--archivo">Home | Room Details</p>
    </div>
    <div class="roomsDetail__flex">
        <div class="roomsDetail__info">
            <div class="roomsDetail__info__container">
                <p class="roomsDetail__info__container__title font--archivo">DOUBLE BED</p>
                <h2 class="roomsDetail__info__container__subtitle font--old">Luxury Double Bed</h2>
                <p class="roomsDetail__info__container__number font--archivo">$345</p>
                <p class="roomsDetail__info__container__p font--archivo">/Night</p>
            </div>
            <img class="roomsDetail__info__img" src="{{ asset('assets/img/hotel-luxury.jpg') }}" alt="">
        </div>

        <form class="roomsDetail__check">
            <p class="roomsDetail__check__p font--archivo">Check Availability</p>
            <div class="roomsDetail__check__container">
                <p class="roomsDetail__check__container__p font--archivo">Check In</p>
                <input class="roomsDetail__check__container__input" type="date" name="" id="">
            </div>

            <div>
                <p class="roomsDetail__check__container__p font--archivo">Check Out</p>
                <input class="roomsDetail__check__container__input" type="date" name="" id="">
            </div>

            <button class="button--color roomsDetail__check__btn">Check Availability</button>
        </form>
    </div>

    <div class="roomsDetail__text">
        <p class="roomsDetail__text__p font--roboto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
            perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
            explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
            dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
            incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
    </div>

    <div class="roomsDetail__amenities">
        <h4 class="roomsDetail__amenities__title">Amenities</h4>
        <hr class="apart">

        <div class="roomsDetail__amenities__info">
            <ul class="roomsDetail__amenities__info__ul">
                <li class="roomsDetail__amenities__info__ul__li">
                    <img src="{{ asset('assets/img/airDetail.svg') }}" alt="">
                    <p class="roomsDetail__amenities__info__ul__li__p font--roboto">Air conditioner</p>
                </li>
                <li class="roomsDetail__amenities__info__ul__li">
                    <img src="{{ asset('assets/img/breakDetail.svg') }}" alt="">
                    <p class="roomsDetail__amenities__info__ul__li__p">Breakfast</p>
                </li>
                <li class="roomsDetail__amenities__info__ul__li">
                    <img src="{{ asset('assets/img/cleanDetail.svg') }}" alt="">
                    <p>Cleaning</p>
                </li>
                <li class="roomsDetail__amenities__info__ul__li">
                    <img src="{{ asset('assets/img/groceryDetail.svg') }}" alt="">
                    <p class="roomsDetail__amenities__info__ul__li__p">Grocery</p>
                </li>
                <li class="roomsDetail__amenities__info__ul__li">
                    <img src="{{ asset('assets/img/shopDetail.svg') }}" alt="">
                    <p class="roomsDetail__amenities__info__ul__li__p">Shop near</p>
                </li>
                <li class="roomsDetail__amenities__info__ul__li">
                    <img src="{{ asset('assets/img/onlineDetail.svg') }}" alt="">
                    <p class="roomsDetail__amenities__info__ul__li__p">24/7 Online Support</p>
                </li>
                <li class="roomsDetail__amenities__info__ul__li">
                    <img src="{{ asset('assets/img/smartDetail.svg') }}" alt="">
                    <p class="roomsDetail__amenities__info__ul__li__p">Smart Security</p>
                </li>
            </ul>

            <ul class="roomsDetail__amenities__info__ul">
                <li class="roomsDetail__amenities__info__ul__li">
                    <img src="{{ asset('assets/img/wifiDetail.svg') }}" alt="">
                    <p class="roomsDetail__amenities__info__ul__li__p">High speed WiFi</p>
                </li>
                <li class="roomsDetail__amenities__info__ul__li">
                    <img src="{{ asset('assets/img/kitchenDetail.svg') }}" alt="">
                    <p class="roomsDetail__amenities__info__ul__li__p">Kitchen</p>
                </li>
                <li class="roomsDetail__amenities__info__ul__li">
                    <img src="{{ asset('assets/img/showerDetail.svg') }}" alt="">
                    <p class="roomsDetail__amenities__info__ul__li__p">Shower</p>
                </li>
                <li class="roomsDetail__amenities__info__ul__li">
                    <img src="{{ asset('assets/img/singleDetail.svg') }}" alt="">
                    <p class="roomsDetail__amenities__info__ul__li__p">Single bed</p>
                </li>
                <li class="roomsDetail__amenities__info__ul__li">
                    <img src="{{ asset('assets/img/towelDetail.svg') }}" alt="">
                    <p class="roomsDetail__amenities__info__ul__li__p">Towels</p>
                </li>
                <li class="roomsDetail__amenities__info__ul__li">
                    <img src="{{ asset('assets/img/stronDetail.svg') }}" alt="">
                    <p class="roomsDetail__amenities__info__ul__li__p">Strong Locker</p>
                </li>
                <li class="roomsDetail__amenities__info__ul__li">
                    <img src="{{ asset('assets/img/teamDetail.svg') }}" alt="">
                    <p class="roomsDetail__amenities__info__ul__li__p">Expert Team</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="roomsDetail__founder">
        <div class="roomsDetail__founder__container">
            <div class="roomsDetail__founder__container__img">
                <img class="roomsDetail__founder__container__img__photo" src="{{ asset('assets/img/circleDetail.svg') }}" alt="">
                <span class="roomsDetail__founder__container__img__check">✓</span>
            </div>

            <div class="roomsDetail__founder__container__name">
                <h4 class="roomsDetail__founder__container__name__title font--old">Lucia Macho Sánchez</h4>
                <p class="roomsDetail__founder__container__name__subtitle font--archivo">Founder, Qux Co.</p>
                <p class="roomsDetail__founder__container__name__p font--archivo">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </div>
    </div>

    <div class="roomsDetail__cancellation">
        <h4 class="roomsDetail__cancellation__title font--old">Cancellation</h4>
        <hr class="apart">
        <p class="roomsDetail__cancellation__p font--roboto">Phasellus volutpat neque a tellus venenatis, a euismod
            augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis
            hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
    </div>

    <div class="roomsDetail__related">
        <h4 class="roomsDetail__related__title font--old">Related Rooms</h4>
        <hr class="apart">
    </div>

    <!-- Slider main container -->
    <div class="swiper-arrowTests">
        <div class="swiper swiper-arrowFacilities">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="roomsPage__cards">
                        <img class="roomsPage__cards__img" src="{{ asset('assets/img/room-counter.jpg') }}" alt="">

                        <div class="roomsPage__cards__iconGroup">
                            <img src="{{ asset('assets/img/room.svg') }}" alt="">
                            <img src="{{ asset('assets/img/wifi.svg') }}" alt="">
                            <img src="{{ asset('assets/img/car.svg') }}" alt="">
                            <img src="{{ asset('assets/img/winter.svg') }}" alt="">
                            <img src="{{ asset('assets/img/gym.svg') }}" alt="">
                            <img src="{{ asset('assets/img/smoke.svg') }}" alt="">
                            <img src="{{ asset('assets/img/cocktel.svg') }}" alt="">
                        </div>

                        <div class="roomsPage__cards__info">
                            <div class="roomsPage__cards__info__description">
                                <h2 class="roomsPage__cards__info__description__title font--old">Minimal Duplex Room</h2>
                                <p class="roomsPage__cards__info__description__p font--roboto">Lorem ipsum dolor sit
                                    amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>

                            <div class="roomsPage__cards__info__price">
                                <h2 class="roomsPage__cards__info__price__number font--archivo">$345/Night</h2>
                                <a href="">
                                    <button class="roomsPage__cards__info__price__btn font--archivo">Booking
                                        now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="roomsPage__cards">
                        <img class="roomsPage__cards__img" src="{{ asset('assets/img/room-counter.jpg') }}" alt="">

                        <div class="roomsPage__cards__iconGroup">
                            <img src="{{ asset('assets/img/room.svg') }}" alt="">
                            <img src="{{ asset('assets/img/wifi.svg') }}" alt="">
                            <img src="{{ asset('assets/img/car.svg') }}" alt="">
                            <img src="{{ asset('assets/img/winter.svg') }}" alt="">
                            <img src="{{ asset('assets/img/gym.svg') }}" alt="">
                            <img src="{{ asset('assets/img/smoke.svg') }}" alt="">
                            <img src="{{ asset('assets/img/cocktel.svg') }}" alt="">
                        </div>

                        <div class="roomsPage__cards__info">
                            <div class="roomsPage__cards__info__description">
                                <h2 class="roomsPage__cards__info__description__title font--old">Minimal Duplex Room</h2>
                                <p class="roomsPage__cards__info__description__p font--roboto">Lorem ipsum dolor sit
                                    amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>

                            <div class="roomsPage__cards__info__price">
                                <h2 class="roomsPage__cards__info__price__number font--archivo">$345/Night</h2>
                                <a href="">
                                    <button class="roomsPage__cards__info__price__btn font--archivo">Booking
                                        now</button>
                                </a>
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
<!-- END SECTION ROOMS DETAIL -->
@endsection