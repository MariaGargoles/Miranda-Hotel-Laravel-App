const rooms__swiper = new Swiper('.rooms__swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,

    // Navigation arrows
    navigation: {
        nextEl: '.rooms__swiper-button-next',
        prevEl: '.rooms__swiper-button-prev',
    }
});

const rooms__details__swiper = new Swiper('.room-details__swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,

    // Navigation arrows
    navigation: {
        nextEl: '.room-details__swiper-button-next',
        prevEl: '.room-details__swiper-button-prev',
    }
});

const offers__swiper = new Swiper('.offers__swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,

    // Navigation arrows
    navigation: {
        nextEl: '.offers__swiper-button-next',
        prevEl: '.offers__swiper-button-prev',
    },

    breakpoints: {
        1000: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    }
});

const menus__swiper = new Swiper('.menu__swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.menu__swiper-pagination',
    },

    breakpoints: {
        1000: {
            slidesPerView: 3,
            spaceBetween: 20
        }
    }
});

const menus__foods__swiper = new Swiper('.menu-foods__swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    slidesPerView: 1,

    navigation: {
        nextEl: '.menu-foods__swiper-button-next',
        prevEl: '.menu-foods__swiper-button-prev',
    },

    breakpoints: {
        1000: {
            slidesPerView: 2,
            spaceBetween: 50
        }
    }
});


const facilities__swiper = new Swiper('.facilities__swiper', {
    // Optional parameters
    slidesPerView: 1,
    slidesPerColumn: 1,
    slidesPerGroup: 1,
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.facilities__swiper-pagination',
    },

    breakpoints: {
        1000: {
            slidesPerView: 3,
            spaceBetween: 50,

            grid: {
                rows: 2,
                fill: 'row'
            }
        }
    }
});

const about__swiper = new Swiper('.about__swiper', {
    // Optional parameters
    slidesPerView: 1,
    direction: 'horizontal',
    loop: true,

    pagination: {
        el: '.about__swiper-pagination',
    },

    breakpoints: {
        1000: {
            slidesPerView: 2,
            spaceBetween: 20,
        }
    }
});

const rooms__grid__swiper = new Swiper('.rooms-grid__swiper', {
    // Optional parameters
    slidesPerColumn: 2,
    grid: {
        rows: 6,
        fill: 'row'
    },
    direction: 'horizontal',
    loop: false,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        /*Return bullets as numbers*/
        renderBullet: function (index, className) {
            return '<span class="rooms__grid-pagination-item ' + className + '">' + (index + 1) + "</span>";
        },
    },

    breakpoints: {
    1000: {
        slidesPerView: 3,
        spaceBetween: 10,

        grid: {
            rows: 3,
            fill: 'row'
        }
    }
}
});

const rooms__list__swiper = new Swiper('.rooms-list__swiper', {
    // Optional parameters
    slidesPerColumn: 2,
    grid: {
        rows: 6,
        fill: 'row'
    },
    direction: 'horizontal',
    loop: false,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        /*Return bullets as numbers*/
        renderBullet: function (index, className) {
            return '<span class="rooms__grid-pagination-item ' + className + '">' + (index + 1) + "</span>";
        },
    },    
});