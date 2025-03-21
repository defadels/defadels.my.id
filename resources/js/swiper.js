


import Swiper from 'swiper';
import {Autoplay, Navigation} from 'swiper/modules';

function testimonialSwiper() {
  new Swiper('.testimonials', {
    // slidesPerView: 5,
    modules: [Navigation, Autoplay],
    centeredSlides: true,
    spaceBetween: 25,
    loop: true,
    // autoplay: {
    //   delay: 3000,
    //   disableOnInteraction: false,
    // },
    navigation: {
      nextEl: ".slider-next",
      prevEl: ".slider-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      991: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 1,
      },
    }
  });
}

testimonialSwiper();