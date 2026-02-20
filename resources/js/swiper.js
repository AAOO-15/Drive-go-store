document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.mySwiper', {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 100,
            disableOnInteraction: false,
        },
        speed: 500,
    });
});