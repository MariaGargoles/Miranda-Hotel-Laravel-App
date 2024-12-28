@extends('layouts.app')
@section('title', 'About')
@section('content')
<header class="banner">
        <div class="banner__inner banner__inner--about --max-width">
            <p class="font__title font__title--dark upper__case">The Ultimate Luxury </p>
            <h2 class="font__subtitle font__subtitle--dark font__subtitle--banner">About Us</h2>
        </div>
        <div class="banner__pagination">
            <span>Home</span><span>|</span><span>About</span>
        </div>
    </header>
    <section class="about__info --max-width">
        <section class="about__video">
            <iframe id="player" class="about__video-video" src="https://www.youtube.com/embed/Bu3Doe45lcU"
                title="Hotel Miranda in Bayahibe Dom. Rep. 4K" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; picture-in-picture;" allowfullscreen></iframe>
            <div class="about__video-text">
                Hello. Our hotel has been
                present for over 20 years
                We make the best for all
                our customers.
            </div>
        </section>
        <section class="about__cards">
            <div class="about__card">
                <img src="{{ asset('assets/icon/breakfast.png') }}" alt="">
                <p>Breakfast</p>
            </div>
            <div class="about__card about__card--beige">
                <img class="about__card-img" src="{{ asset('assets/icon/airport.png') }}" alt="">
                <p>Airport Pickup</p>
            </div>
            <div class="about__card">
                <svg width="56" height="56" viewBox="0 0 54 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_67_677)">
                        <path
                            d="M26.7313 9.52148C25.2819 9.52148 23.8868 9.95103 22.697 10.7637C22.3453 11.0039 22.2564 11.4816 22.4984 11.8307C22.7405 12.1798 23.2218 12.268 23.5735 12.0279C24.5043 11.3921 25.5962 11.0561 26.7313 11.0561C29.8073 11.0561 32.3097 13.5396 32.3097 16.5924C32.3097 19.6451 29.8073 22.1288 26.7313 22.1288C23.6554 22.1288 21.153 19.6451 21.153 16.5924C21.153 15.6918 21.3637 14.8333 21.7792 14.0409C21.9762 13.6649 21.829 13.2016 21.4502 13.0061C21.0713 12.8107 20.6048 12.9566 20.4076 13.3326C19.8838 14.3318 19.6069 15.459 19.6069 16.5924C19.607 20.4914 22.8029 23.6633 26.7313 23.6633C30.6597 23.6633 33.8557 20.4914 33.8557 16.5924C33.8557 12.6935 30.6597 9.52148 26.7313 9.52148Z"
                            fill="#BEAD8E" />
                        <path
                            d="M53.137 51.0985L45.5072 32.9039C45.3873 32.6179 45.1058 32.4315 44.7936 32.4315H37.1904C38.6692 30.4459 39.9002 28.4682 40.8615 26.5263C42.5652 23.0848 43.4289 19.7427 43.4289 16.5925C43.4288 7.45463 35.9384 0.0205078 26.7314 0.0205078C17.5243 0.0205078 10.0339 7.45463 10.0339 16.5924C10.0339 19.7426 10.8976 23.0848 12.6013 26.5262C13.5625 28.4681 14.7935 30.4459 16.2724 32.4314H8.66921C8.357 32.4314 8.0754 32.6179 7.95558 32.9038L2.75645 45.302C2.59239 45.6932 2.77889 46.1423 3.17307 46.305C3.27025 46.3452 3.37073 46.3642 3.46977 46.3642C3.77267 46.3642 4.06016 46.1864 4.1837 45.8916L4.92555 44.1225H10.1882L7.46102 50.6259H2.19852L2.98905 48.7407C3.15312 48.3494 2.96662 47.9003 2.57244 47.7376C2.17805 47.5745 1.72566 47.7599 1.5617 48.151L0.325808 51.0985C0.226461 51.3352 0.252926 51.6057 0.396415 51.819C0.539699 52.0323 0.780985 52.1605 1.03943 52.1605H52.4233C52.6816 52.1605 52.923 52.0323 53.0664 51.819C53.2098 51.6057 53.2364 51.3352 53.137 51.0985ZM11.58 16.5924C11.58 8.30069 18.3769 1.55497 26.7314 1.55497C35.0858 1.55497 41.8827 8.30079 41.8827 16.5924C41.8827 20.0694 40.6654 25.6255 35.0343 32.706C35.0287 32.7126 35.0236 32.7196 35.0182 32.7264C34.7306 33.0877 34.4319 33.4527 34.1208 33.8219C31.0264 37.4943 27.8951 40.1759 26.7313 41.1287C25.5708 40.1792 22.4543 37.511 19.3621 33.8456C19.0433 33.4677 18.7375 33.0941 18.4432 32.7244C18.4384 32.7185 18.434 32.7124 18.429 32.7066C12.7982 25.6266 11.58 20.0707 11.58 16.5924ZM9.18476 33.966H14.4475L12.5279 38.5433H7.26532L9.18476 33.966ZM13.7053 50.626L18.5373 39.1035L32.2882 50.626H13.7053ZM34.6848 50.626L18.7281 37.255C18.5397 37.097 18.2866 37.0379 18.0474 37.0955C17.808 37.153 17.6103 37.3206 17.5158 37.5463L12.0308 50.6259H9.13576L12.061 43.65C12.1603 43.4132 12.1338 43.1428 11.9904 42.9295C11.8471 42.7161 11.6057 42.5879 11.3472 42.5879H5.56929L6.62189 40.0777H13.0436C13.3558 40.0777 13.6374 39.8912 13.7572 39.6053L16.1221 33.9659H17.4638C17.6967 34.2541 17.9334 34.5424 18.1764 34.8306C22.1653 39.5588 26.093 42.5944 26.2583 42.7214C26.3977 42.8285 26.5645 42.8818 26.7314 42.8818C26.8982 42.8818 27.0652 42.8284 27.2044 42.7214C27.2953 42.6517 28.5232 41.7022 30.272 40.0778H39.0262C39.4532 40.0778 39.7993 39.7343 39.7993 39.3105C39.7993 38.8868 39.4532 38.5433 39.0262 38.5433H31.8653C32.9371 37.4737 34.1086 36.2266 35.2864 34.8307C35.5294 34.5425 35.7663 34.2543 35.9991 33.966H44.278L46.1974 38.5433H42.1184C41.6914 38.5433 41.3453 38.8868 41.3453 39.3105C41.3453 39.7343 41.6913 40.0778 42.1184 40.0778H46.8408L47.8934 42.588H31.9659C31.6432 42.588 31.3546 42.7868 31.2416 43.0868C31.1288 43.3868 31.2154 43.7248 31.4591 43.9347L39.2263 50.626H34.6848ZM41.5849 50.626L34.0358 44.1226H48.5371L51.2643 50.626H41.5849Z"
                            fill="#BEAD8E" />
                    </g>
                    <defs>
                        <clipPath id="clip0_67_677">
                            <rect width="52.93" height="52.14" fill="white" transform="translate(0.266357 0.0205078)" />
                        </clipPath>
                    </defs>
                </svg>
                <p>City Guide</p>
            </div>
            <div class="about__card about__card--display">
                <img class="about__card-img" src="{{ asset('assets/icon/bbq-party.png') }}" alt="">
                <p>BBQ Party</p>
            </div>
            <div class="about__card">
                <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_67_687)">
                        <path
                            d="M7.00501 30.5312C6.86028 30.3874 6.66076 30.3047 6.4571 30.3047C6.25241 30.3047 6.05289 30.3874 5.90816 30.5312C5.76447 30.6759 5.68176 30.8754 5.68176 31.08C5.68176 31.2837 5.76447 31.4842 5.90816 31.6279C6.05289 31.7727 6.25241 31.8554 6.4571 31.8554C6.66076 31.8554 6.86028 31.7727 7.00501 31.6279C7.14974 31.4842 7.23245 31.2837 7.23245 31.08C7.23245 30.8753 7.14974 30.6758 7.00501 30.5312Z"
                            fill="#BEAD8E" />
                        <path
                            d="M51.6378 28.3286H49.5399V26.8418C49.5399 26.1293 48.9603 25.5496 48.2477 25.5496H47.6871V21.6118H50.7115C51.092 21.6118 51.4353 21.4465 51.6536 21.1583C51.8717 20.8701 51.9377 20.4947 51.8343 20.1285L50.1267 14.076C49.9559 13.4704 49.3525 13.0137 48.7232 13.0137H45.1003C44.471 13.0137 43.8677 13.4703 43.6968 14.076L41.9893 20.1286C41.886 20.4948 41.9519 20.8702 42.17 21.1584C42.3881 21.4466 42.7316 21.6119 43.1121 21.6119H46.1364V25.5497H45.5759C44.8633 25.5497 44.2837 26.1294 44.2837 26.8419V28.3287H42.4865V26.2863C42.4865 25.5737 41.9068 24.994 41.1942 24.994H20.2623C19.8341 24.994 19.4869 25.3412 19.4869 25.7694C19.4869 26.1976 19.8341 26.5447 20.2623 26.5447H40.9359V32.2809H39.8499V31.1487C39.8499 29.8661 38.8065 28.8227 37.5239 28.8227H29.4841C28.2015 28.8227 27.1581 29.8661 27.1581 31.1487V32.2809H26.094V31.1487C26.094 29.8661 25.0506 28.8227 23.7679 28.8227H15.7282C14.4455 28.8227 13.4021 29.8661 13.4021 31.1487V32.2809H11.9941V26.5447H16.7473C17.1755 26.5447 17.5226 26.1976 17.5226 25.7694C17.5226 25.3412 17.1755 24.994 16.7473 24.994H11.7357C11.0231 24.994 10.4434 25.5737 10.4434 26.2863V28.3287H8.6462V26.8421C8.6462 26.1295 8.06655 25.5498 7.35396 25.5498H6.79354V21.6118H9.81779C10.1983 21.6118 10.5417 21.4465 10.7599 21.1583C10.978 20.8701 11.044 20.4947 10.9406 20.1285L9.23308 14.076C9.0623 13.4704 8.45888 13.0137 7.82961 13.0137H4.20669C3.57743 13.0137 2.97411 13.4703 2.80322 14.076L1.09582 20.1285C0.992541 20.4947 1.05839 20.8701 1.27652 21.1583C1.49465 21.4465 1.83808 21.6118 2.21861 21.6118H5.24286V25.5497H4.68255C3.96996 25.5497 3.39031 26.1294 3.39031 26.8419V28.3286H1.29224C0.579646 28.3286 0 28.9083 0 29.6209V33.1797V38.9617C0 39.6743 0.579646 40.2539 1.29224 40.2539H6.54595V45.2607C6.54595 45.9732 7.1256 46.5529 7.83819 46.5529H11.3898C12.1024 46.5529 12.682 45.9732 12.682 45.2607V42.7653H31.9441C32.3723 42.7653 32.7194 42.4182 32.7194 41.99C32.7194 41.5618 32.3723 41.2146 31.9441 41.2146H12.4236C11.711 41.2146 11.1313 41.7943 11.1313 42.5069V45.0022H8.09664V38.1544H44.8335V45.0022H41.7988V42.5069C41.7988 41.7943 41.2191 41.2146 40.5065 41.2146H35.6657C35.2375 41.2146 34.8904 41.5618 34.8904 41.99C34.8904 42.4182 35.2375 42.7653 35.6657 42.7653H40.2481V45.2607C40.2481 45.9732 40.8277 46.5529 41.5403 46.5529H45.0919C45.8044 46.5529 46.3842 45.9732 46.3842 45.2607V40.2539H51.6378C52.3504 40.2539 52.93 39.6743 52.93 38.9617V29.6209C52.93 28.9084 52.3504 28.3286 51.6378 28.3286ZM43.6196 20.0611L45.1703 14.5643H48.6532L50.204 20.0611H43.6196ZM45.8345 27.1004H47.9892V28.2669H45.8345V27.1004ZM28.7088 31.1487C28.7088 30.7211 29.0567 30.3734 29.4842 30.3734H37.524C37.9515 30.3734 38.2993 30.7211 38.2993 31.1487V32.2809H28.7088V31.1487ZM15.7282 30.3734H23.7679C24.1954 30.3734 24.5433 30.7211 24.5433 31.1487V32.2809H14.9528V31.1487C14.9528 30.7211 15.3007 30.3734 15.7282 30.3734ZM2.726 20.0611L4.27668 14.5644H7.75952L9.3103 20.0611H2.726ZM4.94089 27.1004H7.09551V28.2669H4.94089V27.1004ZM7.46292 34.6068V36.6596C6.9329 36.8208 6.54585 37.3138 6.54585 37.8958V38.7032H1.55068V33.955H7.55658C7.496 34.162 7.46292 34.3805 7.46292 34.6068ZM1.55068 32.4044V29.8793H10.4434V32.2808H9.78895C9.52792 32.2808 9.27712 32.3246 9.04266 32.4044H1.55068ZM43.9164 36.6037H9.01361V34.6069C9.01361 34.1795 9.36148 33.8316 9.78895 33.8316H43.1411C43.5685 33.8316 43.9164 34.1795 43.9164 34.6069V36.6037ZM51.3793 38.7032H46.3842V37.8958C46.3842 37.3138 45.9972 36.8208 45.4671 36.6596V34.6068C45.4671 34.3805 45.434 34.162 45.3734 33.955H51.3793V38.7032ZM51.3793 32.4044H43.8873C43.6529 32.3246 43.4021 32.2808 43.1411 32.2808H42.4867V29.8793H51.3793V32.4044Z"
                            fill="#BEAD8E" />
                        <path
                            d="M47.0219 30.5321C46.8772 30.3874 46.6777 30.3047 46.473 30.3047C46.2693 30.3047 46.0698 30.3874 45.9251 30.5321C45.7803 30.6758 45.6976 30.8753 45.6976 31.08C45.6976 31.2837 45.7803 31.4832 45.9251 31.6279C46.0688 31.7727 46.2693 31.8554 46.473 31.8554C46.6777 31.8554 46.8772 31.7727 47.0219 31.6279C47.1656 31.4832 47.2483 31.2837 47.2483 31.08C47.2483 30.8764 47.1656 30.6758 47.0219 30.5321Z"
                            fill="#BEAD8E" />
                        <path
                            d="M37.9513 10.4933C38.3795 10.4933 38.7266 10.1462 38.7266 9.718V7.67017C38.7266 6.95758 38.147 6.37793 37.4344 6.37793H15.4957C14.7831 6.37793 14.2035 6.95758 14.2035 7.67017V19.1667C14.2035 19.8793 14.7831 20.459 15.4957 20.459H37.4344C38.147 20.459 38.7266 19.8793 38.7266 19.1667V13.2329C38.7266 12.8047 38.3795 12.4575 37.9513 12.4575C37.5231 12.4575 37.1759 12.8047 37.1759 13.2329V15.4272L33.5104 9.0785C33.3719 8.83866 33.1159 8.69083 32.839 8.69083C32.5619 8.69083 32.3061 8.83866 32.1675 9.0785L28.8683 14.7931L26.5673 10.8076C26.5662 10.8056 26.5647 10.804 26.5636 10.802C26.4979 10.6903 26.4038 10.5932 26.2835 10.5238C25.9126 10.3096 25.4385 10.4368 25.2244 10.8076L20.5474 18.9084H15.7542V7.92861H37.1759V9.718C37.1759 10.1462 37.5231 10.4933 37.9513 10.4933ZM32.839 11.0168L37.1759 18.5286V18.9084H28.283L32.839 11.0168ZM25.8959 12.746L27.973 16.3438L26.4924 18.9084H22.338L25.8959 12.746Z"
                            fill="#BEAD8E" />
                        <path
                            d="M19.9191 8.81445C18.4701 8.81435 17.2911 9.99328 17.2911 11.4424C17.2911 12.8915 18.4701 14.0703 19.9191 14.0703C21.3682 14.0703 22.547 12.8915 22.547 11.4424C22.547 9.99328 21.3682 8.81445 19.9191 8.81445ZM19.9191 12.5197C19.3251 12.5197 18.8418 12.0364 18.8418 11.4424C18.8418 10.8483 19.3251 10.3651 19.9191 10.3651C20.513 10.365 20.9963 10.8483 20.9963 11.4424C20.9963 12.0365 20.513 12.5197 19.9191 12.5197Z"
                            fill="#BEAD8E" />
                    </g>
                    <defs>
                        <clipPath id="clip0_67_687">
                            <rect width="52.93" height="52.93" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <p>Luxury Room</p>
            </div>
        </section>
        <section class="about__restaurant">
            <div class="about__restaurant-inner">
                <img class="about__restaurant-img" src="{{ asset('assets/img/restaurant.jpg') }}" alt="">
                <div class="about__restaurant-info">
                    <p class="about__restaurant-informative-text upper__case">Restaurant</p>
                    <p class="about__restaurant-title">
                        Get Restaurant
                        Facilities & Many
                        Other More
                    </p>
                    <p class="about__restaurant-text">
                        Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tem por
                        incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip.
                    </p>
                    <button class="button upper__case">Take a Tour</button>
                </div>
            </div>
        </section>
    </section>
    <section class="about__facilities facilities facilities--dark">
        <div class="facilities__inner about__facilities-inner --max-width">
            <p class="facilities__informative-text facilities__informative-text--ligth upper__case">Facilities</p>
            <p class="facilities__title">Core Features</p>
            <div class="facilities__swiper facilities__swiper swiper">
                <!-- Additional required wrapper -->
                <div class="facilities__swiper-wrapper swiper-wrapper">
                    <!-- Slides -->
                    <div class="facilities__swiper-slide facilities__swiper-slide--dark swiper-slide">
                        <p class="facilities__swiper-slide-number facilities__swiper-slide-number--dark">
                            01
                        </p>
                        <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/high-rating.svg') }}" alt="">
                        <p class="facilities__swiper-slide-title">Have High Rating</p>
                        <p class="facilities__swiper-slide-text facilities__swiper-slide-text--dark">
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="facilities__swiper-slide facilities__swiper-slide--dark swiper-slide">
                        <p class="facilities__swiper-slide-number facilities__swiper-slide-number--dark">
                            02
                        </p>
                        <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/quiet-hours.svg') }}" alt="">
                        <p class="facilities__swiper-slide-title">Quiet Hours</p>
                        <p class="facilities__swiper-slide-text facilities__swiper-slide-text--dark">
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="facilities__swiper-slide facilities__swiper-slide--dark swiper-slide">
                        <p class="facilities__swiper-slide-number facilities__swiper-slide-number--dark">
                            03
                        </p>
                        <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/location.svg') }}" alt="">
                        <p class="facilities__swiper-slide-title">Best Locations</p>
                        <p class="facilities__swiper-slide-text facilities__swiper-slide-text--dark">
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="facilities__swiper-slide facilities__swiper-slide--dark swiper-slide">
                        <p class="facilities__swiper-slide-number facilities__swiper-slide-number--dark">
                            04
                        </p>
                        <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/free-cancelation.svg') }}" alt="">
                        <p class="facilities__swiper-slide-title">Free Cancellation</p>
                        <p class="facilities__swiper-slide-text facilities__swiper-slide-text--dark">
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="facilities__swiper-slide facilities__swiper-slide--dark swiper-slide">
                        <p class="facilities__swiper-slide-number facilities__swiper-slide-number--dark">
                            05
                        </p>
                        <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/payment.svg') }}" alt="">
                        <p class="facilities__swiper-slide-title">Payment Options</p>
                        <p class="facilities__swiper-slide-text facilities__swiper-slide-text--dark">
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="facilities__swiper-slide facilities__swiper-slide--dark swiper-slide">
                        <p class="facilities__swiper-slide-number facilities__swiper-slide-number--dark">
                            06
                        </p>
                        <img class="facilities__swiper-slide-img" src="{{ asset('assets/img/special-offers.svg') }}" alt="">
                        <p class="facilities__swiper-slide-title">Special Offers</p>
                        <p class="facilities__swiper-slide-text facilities__swiper-slide-text--dark">
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

    <section class="about__counter --max-width">
        <p class="about__counter-informative-text upper__case">Counter</p>
        <p class="about__counter-title">
            Some Fun<br />
            Facts
        </p>
        <div class="about__counter-cards">
            <div class="about__counter-card">
                <img class="about__counter-card-img" src="{{ asset('assets/icon/about-happy.svg') }}" alt="">
                <p class="about__counter-card-text">
                    <span>8000</span><br />
                    <span>Happy Users</span>
                </p>
                <img class="about__counter-card-arrow" src="{{ asset('assets/icon/arrow-right.svg') }}" alt="right">
            </div>
            <div class="about__counter-card">
                <img class="about__counter-card-img" src="{{ asset('assets/icon/about-reviews.svg') }}" alt="about-reviews">
                <p class="about__counter-card-text">
                    <span>10M</span><br />
                    <span>Reviews & Appriciate</span>
                </p>
                <img class="about__counter-card-arrow" src="{{ asset('assets/icon/arrow-right.svg') }}" alt="right">
            </div>
            <div class="about__counter-card">
                <img class="about__counter-card-img" src="{{ asset('assets/icon/about-world.svg') }}" alt="about-world">
                <p class="about__counter-card-text">
                    <span>100</span><br />
                    <span>Country Coverage</span>
                </p>
                <img class="about__counter-card-arrow" src="{{ asset('assets/icon/arrow-right.svg') }}" alt="right">
            </div>
        </div>
        <div class="about__swiper swiper">
            <!-- Additional required wrapper -->
            <div class="about__swiper-wrapper swiper-wrapper">
                <!-- Slides -->
                <div class="about__swiper-slide swiper-slide" style="background-image: url(assets/img/team.jpg);">
                </div>
                <div class="about__swiper-slide swiper-slide" style="background-image: url(assets/img/marmalade.jpg);">
                </div>
            </div>
        </div>
        <div class="about__swiper-pagination swiper-pagination"></div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection