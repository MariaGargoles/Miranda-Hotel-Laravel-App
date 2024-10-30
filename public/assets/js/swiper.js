const swiperPag = new Swiper('.swiper-pag', {

    direction: 'horizontal',
    loop: false,


    pagination: {
        el: '.swiper-pagination',
        clickable: true, 
    },

    breakpoints: {
        1000: {
            slidesPerView: 3, 
            enabled: false,    
        },
        0: {
            slidesPerView: 1,  
            enabled: true,     
        },
    },
});


const swiperPagAbout = new Swiper('.swiper-pag-about', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },
});

const swiper = new Swiper('.swiper-arrow', {
    slidesPerView: 1,
    spaceBetween: 30,
  
    // Configuración para pantallas grandes
    breakpoints: {
      1000: {
        slidesPerView: 2,  // Mostrar 2 slides en pantallas grandes
        spaceBetween: 30,
      }
    },
  
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  

const swiperArrowTest = new Swiper('.swiper-arrowFacilities', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

});