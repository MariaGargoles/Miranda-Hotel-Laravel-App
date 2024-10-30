<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','hotelmiranda')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/swiper.js') }}" defer></script>
    <script src="{{ asset('assets/js/navbarHamb.js') }}" defer></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>



</head>

    <body class="font-sans antialiased">
        <!-- NAVBAR MOBILE -->
<nav class="header__nav mobile">
    <div class="flex">
        <div class='header__nav--container' id="OpenButtonMenu">
            <span class="material-symbols-outlined">
                menu
            </span>
        </div>

        <div class="header__nav__logo--container font--archivo">
            <a href="./index.html" class="contents">
                <img class="header__nav__logo--container--a--img" src="{{ asset('assets/img/logoHotel.JPG') }}" alt="logo"> 
            </a>
            <div class="header__nav__logo--container--text">
                <h2 class="header__nav__logo--container--text--title">HOTEL</h2>
                <h2 class="header__nav__logo--container--text--subtitle">MIRANDA</h2>
            </div>
        </div>

        <div class="header__nav--icons">
            <img src="{{ asset('assets/img/Vector.svg') }}" alt="">
            <img class="header__nav--icons--search" src="{{ asset('assets/img/search.svg') }}" alt="">
        </div>
    </div>

    <div class="header__nav__menuDesplegable" id="HamburguerMenu">
        <ul class="header__nav__menuDesplegable__list">
            <li class="header__nav__menuDesplegable__item">
                <a href="about.html" class="header__nav__menuDesplegable__link font--archivo">About Us</a>
            </li>
            <li class="header__nav__menuDesplegable__item">
                <a href="rooms.html" class="header__nav__menuDesplegable__link font--archivo">Rooms</a>
            </li>
            <li class="header__nav__menuDesplegable__item">
                <a href="offers.html" class="header__nav__menuDesplegable__link font--archivo">Offers</a>
            </li>
            <li class="header__nav__menuDesplegable__item">
                <a href="contact.html" class="header__nav__menuDesplegable__link font--archivo">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<!-- END NAVBAR MOBILE -->

<!-- ********************************* -->

<!-- NAVBAR DESKTOP -->
<nav class="header__nav desktop">
    <div class="header__nav-content flex">
        <div class="space">
            <a href="./index.html" class="contents">
                <img class="header__nav__logo--container--a--img" src="{{ asset('assets/img/logoHotel.JPG') }}" alt="logo">
            </a>
        </div>
        <div class="header__nav__logo--container--text">
            <h2 class="header__nav__logo--container--text--title">HOTEL</h2>
            <h2 class="header__nav__logo--container--text--subtitle">MIRANDA</h2>
        </div>
        <ul class="header__nav__menuDesplegable__list flex">
            <li class="header__nav__menuDesplegable__item">
                <a href="about.html" class="header__nav__menuDesplegable__link font--archivo">About Us</a>
            </li>
            <li class="header__nav__menuDesplegable__item">
                <a href="rooms.html" class="header__nav__menuDesplegable__link font--archivo">Rooms</a>
            </li>
            <li class="header__nav__menuDesplegable__item">
                <a href="offers.html" class="header__nav__menuDesplegable__link font--archivo">Offers</a>
            </li>
            <li class="header__nav__menuDesplegable__item">
                <a href="contact.html" class="header__nav__menuDesplegable__link font--archivo">Contact</a>
            </li>
        </ul>

        <div class="header__nav--icons">
            <img class="icon" src="{{ asset('assets/img/Vector.svg') }}" alt="">
            <img class="icon header__nav--icons--search" src="{{ asset('assets/img/search.svg') }}" alt="">
        </div>
    </div>
</nav>
<!-- END NAVBAR DESKTOP -->




            <!-- Page Content -->
            <main>
            @yield('content')
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
            </main>


            <!-- FOOTER -->
<footer class="footer">
    <div class="footer__background">
        <div class="footer__group">
            <div>
                <div class="footer__container">
                    <img class="footer__container__logo" src="{{ asset('assets/img/logo-footer.JPG') }}" alt="">
                    <div class="footer__container__text">
                        <h2 class="footer__container__text__title font--archivo">HOTEL</h2>
                        <h2 class="footer__container__text__subtitle font--archivo">MIRANDA</h2>
                    </div>
                </div>

                <p class="footer__p font--archivo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doing eius
                    mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi.</p>

                <div class="footer__logoIcons">
                    <img class="footer__logoIcons__container" src="{{ asset('assets/img/facebook.svg') }}" alt="Facebook">
                    <img class="footer__logoIcons__container twitter" src="{{ asset('assets/img/twitter.svg') }}" alt="Twitter">
                    <img class="footer__logoIcons__container" src="{{ asset('assets/img/be.svg') }}" alt="Behance">
                    <img class="footer__logoIcons__container" src="{{ asset('assets/img/linkedin.svg') }}" alt="LinkedIn">
                    <img class="footer__logoIcons__container" src="{{ asset('assets/img/youtube.svg') }}" alt="YouTube">
                </div>
            </div>

            <div class="footer__services">
                <h2 class="footer__services__title font--old">Services.</h2>
                <div class="footer__services__container">
                    <ul class="footer__services__container__ul font--roboto">
                        <li class="footer__services__container__ul__item">+ Restaurant & Bar</li>
                        <li class="footer__services__container__ul__item">+ Swimming Pool</li>
                        <li class="footer__services__container__ul__item">+ Wellness & Spa</li>
                        <li class="footer__services__container__ul__item">+ Conference Room</li>
                        <li class="footer__services__container__ul__item">+ Cocktail Party House</li>
                    </ul>

                    <ul class="footer__services__container__ul margin font--roboto">
                        <li class="footer__services__container__ul__item">+ Gaming Zone</li>
                        <li class="footer__services__container__ul__item">+ Marriage Party</li>
                        <li class="footer__services__container__ul__item">+ Party Planning</li>
                        <li class="footer__services__container__ul__item">+ Tour Consultancy</li>
                    </ul>
                </div>
            </div>

            <div class="footer__contact">
                <h2 class="footer__contact__title">Contact Us.</h2>

                <div class="footer__contact__container">
                    <div class="footer__contact__container__flex">
                        <img src="{{ asset('assets/img/phone-footer.svg') }}" alt="Phone">
                        <div class="footer__contact__container__info">
                            <p class="footer__contact__container__info__text font--old">Phone Number</p>
                            <p class="footer__contact__container__info__number font--roboto">+987 876 765 76 577</p>
                        </div>
                    </div>

                    <div class="footer__contact__container__flex">
                        <img src="{{ asset('assets/img/mail-footer.svg') }}" alt="Email">
                        <div class="footer__contact__container__info">
                            <p class="footer__contact__container__info__text font--old">Email address</p>
                            <p class="footer__contact__container__info__number font--roboto">contacto@hotelmiranda.com</p>
                        </div>
                    </div>

                    <div class="footer__contact__container__flex">
                        <img src="{{ asset('assets/img/gps-footer.svg') }}" alt="Location">
                        <div class="footer__contact__container__info">
                            <p class="footer__contact__container__info__text font--old">Location</p>
                            <p class="footer__contact__container__info__number font--roboto">Lorem ipsum dolor sit amet, 8</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__copyright">
        <div class="footer__copyright__desktop">
            <p class="footer__copyright__text font--roboto">Copyright By@Example - 2020</p>
            <p class="footer__copyright__text font--roboto">Terms of use | Privacy Environmental Policy</p>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
        </div>

      

    </body>
</html>
