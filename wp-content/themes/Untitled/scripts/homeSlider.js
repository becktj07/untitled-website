
$(document).ready(function () {
    homeSlider();
});

function homeSlider() {
    $('.home-slider').slick({
        autoplay: true,
        arrows: false,
        autoplaySpeed: 1000,
        infinite: true,
        //adaptiveHeight: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
};