/*
 * Swiper
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * https://swiperjs.com
 */

// core version + navigation, pagination modules:
import Swiper from 'swiper';
import {Autoplay, Navigation, Pagination} from 'swiper/modules';

// import Swiper and modules styles
import 'swiper/css';
// import 'swiper/css/navigation';
// import 'swiper/css/pagination';



document.addEventListener("DOMContentLoaded", (event) => {
    // init Swiper:
    const swiper = new Swiper('.swiper', {
        modules: [Autoplay, Navigation, Pagination],

        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // Autoplay
        autoplay: {
            delay: 2000,
            disableOnInteraction: true,
        },
        speed: 750,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});

