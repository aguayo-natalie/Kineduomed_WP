/* Initialize Swiper */

var swiper = new Swiper('.swiper-container-01', {
    paginationClickable: true,
    spaceBetween: 0,
    centeredSlides: true,
    autoplay: 2500,
    autoplayDisableOnInteraction: false
});
    
var swiper = new Swiper('.swiper-container-02', {
    nextButton: '.swiper-button-next-02',
    prevButton: '.swiper-button-prev-02',
    paginationClickable: true,
    slidesPerView: 5,
    loop: true,
    spaceBetween: -60,
    autoplay: 1500,
    autoplayDisableOnInteraction: false,
 
    breakpoints: {
        1024: {
            slidesPerView: 3,
            spaceBetween: -60
        },
        768: {
            slidesPerView: 2,
            spaceBetween: -60
        },
        640: {
            slidesPerView: 2,
            spaceBetween: -60
        },
        420: {
            slidesPerView: 1,
            spaceBetween: 10
        }
    }
});