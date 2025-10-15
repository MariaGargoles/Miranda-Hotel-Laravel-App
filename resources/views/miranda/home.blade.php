@extends('layouts.app')
@section('title', 'Home')
@section('content')

<header class="banner">
    <div class="banner__inner --max-width">
        <p class="font__title font__title--dark  upper__case">The Ultimate Luxury Experience</p>
        <h2 class="font__subtitle font__subtitle--dark font__subtitle--banner-home">The Perfect<br />Base For You</h2>
        <button class="button button__banner upper__case"><a href="{{ route('about') }}">Take a Tour</a></button>
        <button class="button button__banner button--transparent upper__case"><a href="{{ route('contact') }}">Learn
                More</a></button>
    </div>
</header>
<section class="checking">
    <form class="checking__inner form --max-width" action="{{ route('rooms') }}" method="GET" id="availabilityForm"
        novalidate>
        <div class="form__control">
            <div class="form__control-input">
                <label class="checking__label" for="checkIn">Arrival Date</label>
                <input class="checking__input" type="date" name="checkIn" id="checkIn" required
                    min="{{ date('Y-m-d') }}">
                <span class="error-message" id="checkInError"
                    style="display: none; color: #d32f2f; font-size: 0.875rem;"></span>
            </div>
            <div class="form__control-input">
                <label class="checking__label" for="checkOut">Departure Date</label>
                <input class="checking__input" type="date" name="checkOut" id="checkOut" required
                    min="{{ date('Y-m-d') }}">
                <span class="error-message" id="checkOutError"
                    style="display: none; color: #d32f2f; font-size: 0.875rem;"></span>
            </div>
        </div>
        <button class="button button--big upper__case" type="submit">Check availability</button>
    </form>
</section>
<section class="about-us">
    <div class="about-us__background"></div>
    <div class="about-us__inner --max-width">
        <section class="about-us__info">
            <h2 class="font__title font__title--weight-700 upper__case">About Us </h2>
            <p class="font__subtitle font__subtitle--height">Discover Our Underground.</p>
            <p class="font__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
            </p>

            <button class="button upper__case"><a href="{{ route('rooms') }}">Book Now</a></button>
        </section>
        <section class="about-us__features">
            <img class="about-us__features-img" src="{{ asset('assets/img/team.jpg') }}"
                alt="Equipo profesional del Hotel Miranda" loading="lazy" width="500" height="500">
            <div class="about-us__features-feature">
                <img class="about-us__features-feature-img" src="{{ asset('assets/icon/strong-team.svg') }}"
                    alt="imagen con la silueta de tres personas" loading="lazy" width="64" height="64">
                <p class="about-us__features-feature-title">Strong Team</p>
                <p class="about-us__features-feature-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor.</p>
            </div>
            <img class="about-us__features-img" src="{{ asset('assets/img/luxury-room-2.jpg') }}"
                alt="Habitación de lujo del Hotel Miranda" loading="lazy" width="500" height="500">
            <div class="about-us__features-feature about-us__features-feature--dark">
                <img class="about-us__features-feature-img" src="{{ asset('assets/icon/luxury-room.svg') }}"
                    alt="imagen de un calendario con una flecha saliendo del mismo a la dirección izquierda"
                    loading="lazy" width="64" height="64">
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
            <img src="{{ asset('assets/icon/bed.svg') }}" alt="icono de una cama" loading="lazy" width="32" height="32">
        </span>
        <span class="rooms__menu-item">
            <img src="{{ asset('assets/icon/wifi.svg') }}" alt="icono de conexión wifi" loading="lazy" width="32"
                height="32">
        </span>
        <span class="rooms__menu-item">
            <img src="{{ asset('assets/icon/car.svg') }}" alt="icono de un coche" loading="lazy" width="32" height="32">
        </span>
        <span class="rooms__menu-item">
            <img src="{{ asset('assets/icon/snowflake.svg') }}" alt="icono de un copo de nieve" loading="lazy"
                width="32" height="32">
        </span>
        <span class="rooms__menu-item">
            <img src="{{ asset('assets/icon/gym.svg') }}" alt="icono de una mancuerna" loading="lazy" width="32"
                height="32">
        </span>
        <span class="rooms__menu-item">
            <img src="{{ asset('assets/icon/no-smoking.svg') }}" alt="icono de prohibido fumar" loading="lazy"
                width="32" height="32">
        </span>
        <span class="rooms__menu-item">
            <img src="{{ asset('assets/icon/cocktail.svg') }}" alt="icono de un coctel" loading="lazy" width="32"
                height="32">
        </span>
    </menu>
    <div class="rooms__swiper swiper">
        <!-- Additional required wrapper -->
        <div class="rooms__swiper-wrapper swiper-wrapper">
            <!-- Slides -->
            <div class="rooms__swiper-slide swiper-slide"
                style="background-image: url({{ asset('assets/img/luxury-room.jpg') }});">
            </div>
            <div class="rooms__swiper-slide swiper-slide"
                style="background-image: url({{ asset('assets/img/luxury-room-3.jpg') }});">
            </div>
            <div class="rooms__swiper-slide swiper-slide"
                style="background-image: url({{ asset('assets/img/luxury-room-2.jpg') }});">
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
        <iframe id="player" class="intro-video__video" data-src="https://www.youtube.com/embed/Bu3Doe45lcU"
            title="Hotel Miranda in Bayahibe Dom. Rep. 4K" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; picture-in-picture" allowfullscreen loading="lazy"
            sandbox="allow-scripts allow-same-origin allow-presentation"></iframe>
        <button class="intro-video__button button upper__case"><a href="{{ route('offers') }}">Book Now</a></button>
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
                    <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/high-rating.svg') }}"
                        alt="Alta calificación" loading="lazy" width="80" height="80">
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
                    <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/quiet-hours.svg') }}"
                        alt="Horas tranquilas" loading="lazy" width="80" height="80">
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
                    <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/location.svg') }}"
                        alt="Mejores ubicaciones" loading="lazy" width="80" height="80">
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
                    <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/free-cancelation.svg') }}"
                        alt="Cancelación gratuita" loading="lazy" width="80" height="80">
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
                    <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/payment.svg') }}"
                        alt="Opciones de pago" loading="lazy" width="80" height="80">
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
                    <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/special-offers.svg') }}"
                        alt="Ofertas especiales" loading="lazy" width="80" height="80">
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
        <img class="menu__display-img" src="{{ asset('assets/img/donut.svg') }}" alt="donut" loading="lazy" width="200"
            height="200">
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
                        <img class="menu__article-img" src="{{ asset('assets/img/eggs-bacon.jpg') }}"
                            alt="Huevos con tocino" loading="lazy" width="300" height="200">
                        <div class="menu__article-text">
                            <p>Eggs & Bacon</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt=""
                            loading="lazy" width="24" height="24">
                    </article>
                    <article class="menu__article">
                        <img class="menu__article-img" src="{{ asset('assets/img/tea-coffe.jpg') }}" alt="Té o café"
                            loading="lazy" width="300" height="200">
                        <div class="menu__article-text">
                            <p>Tea or Coffe</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt=""
                            loading="lazy" width="24" height="24">
                    </article>
                    <article class="menu__article">
                        <img class="menu__article-img" src="{{ asset('assets/img/chia-outmeal.jpg') }}"
                            alt="Avena con chía" loading="lazy" width="300" height="200">
                        <div class="menu__article-text">
                            <p>Chia Oatmeal</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt=""
                            loading="lazy" width="24" height="24">
                    </article>
                </div>
                <div class="menu-foods__swiper-slide swiper-slide">
                    <article class="menu__article">
                        <img class="menu__article-img" src="{{ asset('assets/img/fruit-par.jpg') }}"
                            alt="Parfait de frutas" loading="lazy" width="300" height="200">
                        <div class="menu__article-text">
                            <p>Fruit Parfait</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt=""
                            loading="lazy" width="24" height="24">
                    </article>
                    <article class="menu__article">
                        <img class="menu__article-img" src="{{ asset('assets/img/marmalade.jpg') }}"
                            alt="Selección de mermeladas" loading="lazy" width="300" height="200">
                        <div class="menu__article-text">
                            <p>Marmalade Selection</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt=""
                            loading="lazy" width="24" height="24">
                    </article>
                    <article class="menu__article">
                        <img class="menu__article-img" src="{{ asset('assets/img/chesse.jpg') }}" alt="Plato de quesos"
                            loading="lazy" width="300" height="200">
                        <div class="menu__article-text">
                            <p>Cheese Plate</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt=""
                            loading="lazy" width="24" height="24">
                    </article>
                </div>
                <div class="menu-foods__swiper-slide swiper-slide">
                    <article class="menu__article">
                        <img class="menu__article-img" src="{{ asset('assets/img/eggs-bacon.jpg') }}"
                            alt="Huevos con tocino" loading="lazy" width="300" height="200">
                        <div class="menu__article-text">
                            <p>Eggs & Bacon</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt=""
                            loading="lazy" width="24" height="24">
                    </article>
                    <article class="menu__article">
                        <img class="menu__article-img" src="{{ asset('assets/img/tea-coffe.jpg') }}" alt="Té o café"
                            loading="lazy" width="300" height="200">
                        <div class="menu__article-text">
                            <p>Tea or Coffe</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt=""
                            loading="lazy" width="24" height="24">
                    </article>
                    <article class="menu__article">
                        <img class="menu__article-img" src="{{ asset('assets/img/chia-outmeal.jpg') }}"
                            alt="Avena con chía" loading="lazy" width="300" height="200">
                        <div class="menu__article-text">
                            <p>Chia Oatmeal</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <img class="menu__article-arrow" src="{{ asset('assets/icon/arrow-hover.svg') }}" alt=""
                            loading="lazy" width="24" height="24">
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
            <div class="menu__swiper-slide swiper-slide"
                style="background-image: url({{ asset('assets/img/cooked-food.jpg') }});">
            </div>
            <div class="menu__swiper-slide swiper-slide"
                style="background-image: url({{ asset('assets/img/food-photography.jpg') }});">
            </div>
            <div class="menu__swiper-slide swiper-slide"
                style="background-image: url({{ asset('assets/img/grilled-steak.jpg') }});">
            </div>
        </div>
    </div>
    <div class="menu__swiper-pagination swiper-pagination"></div>
</section>
<section class="stats --max-width">
    <div class="stats__inner">
        <article class="stats__article">
            <img class="stats__article-img" src="{{ asset('assets/img/rocket.svg') }}" alt="cohete" loading="lazy"
                width="64" height="64">
            <p class="stats__article-title">84k<span class="stats__article-title-plus">+</span></p>
            <p class="stats__article-text">Projects are Completed</p>
        </article>
        <article class="stats__article">
            <img class="stats__article-img" src="{{ asset('assets/img/persons.svg') }}" alt="tres siluetas de personas"
                loading="lazy" width="64" height="64">
            <p class="stats__article-title">10M<span class="stats__article-title-plus">+</span></p>
            <p class="stats__article-text">Active Backers Around World</p>
        </article>
        <article class="stats__article">
            <img class="stats__article-img" src="{{ asset('assets/img/currency.svg') }}"
                alt="icono de una tabla de ganancias" loading="lazy" width="64" height="64">
            <p class="stats__article-title">02k<span class="stats__article-title-plus">+</span></p>
            <p class="stats__article-text">Categories Served</p>
        </article>
        <article class="stats__article">
            <img class="stats__article-img" src="{{ asset('assets/img/book.svg') }}" alt="icono de un libro abierto"
                loading="lazy" width="64" height="64">
            <p class="stats__article-title">100M<span class="stats__article-title-plus">+</span></p>
            <p class="stats__article-text">Idea Raised Funds</p>
        </article>
    </div>
</section>


@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
<script src="https://www.youtube.com/iframe_api" defer></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Validación del formulario de disponibilidad
        const form = document.getElementById('availabilityForm');
        const checkInInput = document.getElementById('checkIn');
        const checkOutInput = document.getElementById('checkOut');
        const checkInError = document.getElementById('checkInError');
        const checkOutError = document.getElementById('checkOutError');

        if (form && checkInInput && checkOutInput) {
            // Validación en tiempo real
            checkInInput.addEventListener('change', function() {
                validateDates();
            });

            checkOutInput.addEventListener('change', function() {
                validateDates();
            });

            function validateDates() {
                let isValid = true;
                const today = new Date();
                today.setHours(0, 0, 0, 0);

                checkInError.style.display = 'none';
                checkOutError.style.display = 'none';

                if (checkInInput.value) {
                    const checkInDate = new Date(checkInInput.value + 'T00:00:00');

                    if (checkInDate < today) {
                        checkInError.textContent = 'La fecha de llegada no puede ser anterior a hoy';
                        checkInError.style.display = 'block';
                        isValid = false;
                    }
                }

                if (checkInInput.value && checkOutInput.value) {
                    const checkInDate = new Date(checkInInput.value + 'T00:00:00');
                    const checkOutDate = new Date(checkOutInput.value + 'T00:00:00');

                    if (checkOutDate <= checkInDate) {
                        checkOutError.textContent = 'La fecha de salida debe ser posterior a la fecha de llegada';
                        checkOutError.style.display = 'block';
                        isValid = false;
                    }
                }

                return isValid;
            }

            // Validación al enviar el formulario
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                if (!checkInInput.value || !checkOutInput.value) {
                    if (!checkInInput.value) {
                        checkInError.textContent = 'Por favor, seleccione una fecha de llegada';
                        checkInError.style.display = 'block';
                    }
                    if (!checkOutInput.value) {
                        checkOutError.textContent = 'Por favor, seleccione una fecha de salida';
                        checkOutError.style.display = 'block';
                    }
                    return false;
                }

                if (!validateDates()) {
                    return false;
                }

                if (typeof toastr !== 'undefined') {
                    toastr.success('Redirigiendo a habitaciones disponibles...', {
                        timeOut: 1000,
                    });
                }

                setTimeout(function() {
                    event.target.submit();
                }, 1000);
            });
        }

        // Carga lazy del iframe de YouTube
        const iframe = document.getElementById('player');
        if (iframe && iframe.hasAttribute('data-src')) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        iframe.src = iframe.getAttribute('data-src');
                        iframe.removeAttribute('data-src');
                        observer.disconnect();
                    }
                });
            }, {
                rootMargin: '50px'
            });

            observer.observe(iframe);
        }
    });
</script>
@endsection