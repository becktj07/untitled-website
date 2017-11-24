
$(window).ready(function () {
    $('.untitled-text-overlay').animate({ opacity: 1 }, 1500);
    setTimeout(function(){
        $('.home-slider').animate({ opacity: 1 }, 1000);
        $('.home-button-wrapper').animate({ opacity: 1 }, 1000);
        homeSlider();
    }, 700);
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