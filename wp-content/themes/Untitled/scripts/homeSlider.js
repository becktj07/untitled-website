
$(window).ready(function () {
    homeSlider();
});

function homeSlider() {
    $('.home-slider').slick({
        autoplay: true,
        arrows: false,
        autoplaySpeed: 1000,
        infinite: true,
        useTransform: false,
        fade: true,
        cssEase: 'none',
        slidesToShow: 1,
        slidesToScroll: 1
    });
};