
$(window).ready(function () {
    $('.untitled-text-overlay').animate({ opacity: 1 }, 1200, 'swing');
    setTimeout(function(){
        $('.home-slider').animate({ opacity: 1 }, 700);
        homeSlider();
    }, 500);
    setTimeout(function(){
        $('.home-button-wrapper').animate({ opacity: 1 }, 650);
    }, 1200);
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