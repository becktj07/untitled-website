
var windowWidth = $(window).width();

$(document).ready(function() {
    checkSize();
    console.log("document ready " + $(window).width());
});

$(window).resize(function() {
    console.log("resize " + $(window).width());
});

function checkSize() {
    if (windowWidth <= 890) {
        mobileFunctions();
    } else {
        restoreDesktopSlider();
        initializeDesktopInfo();
    }
}

//run resize functions
$(window).resize(function () {
    if (windowWidth != $(window).width()) {
        windowWidth = $(window).width();
        checkSize();
    }
});

function initializeDesktopInfo() {
    $('.info-button-trigger').on( "click", function(bindClickInfo) {
        bindClickInfo.preventDefault();
        console.log('initializeDesktopInfo');
        $(this).removeClass('info-button-trigger').addClass('x-button-trigger');
        $('.sprite-i').animate({ opacity: 0}, 500, function(){
            $(this).removeClass('sprite-i').addClass('sprite-x').animate({ opacity: 1}, 500);
            $('.home-text-overlay').animate({ top: '100px'}, 300);
            $('.home-text-overlay > svg > g > path').css({fill: '#FFF6D6', transition: '.25s'});
            $('.creative').animate({ opacity: 1 }, 300);
            setTimeout(function(){
                $('.studio').animate({ opacity: 1 }, 300);
                $('.home-text-overlay').css('z-index', -3);
                $('.information').css('z-index', 0);
            }, 100);
        }); 
        $('.home-slider').animate({ opacity: 0 }, 1200, function(){
            setTimeout(function(){
                $('.info-flex-container').animate({ opacity: 1}, 750);
            }, 250);
        });
    })
}

function restoreDesktopSlider() {
    $('.x-button-trigger').on( "click", function(bindClickX) {
        bindClickX.preventDefault();
        console.log('restoreDesktopSlider');
        $('.sprite-x').animate({ opacity: 0}, 500, function(){
        $(this).removeClass('sprite-x').addClass('sprite-i').animate({ opacity: 1}, 500);
        $('.info-flex-container').animate({ opacity: 0}, 750, function(){
                setTimeout(function(){
                    $('.studio').animate({ opacity: 0 }, 300);
                }, 250);
            $('.creative').animate({ opacity: 0 }, 300);
            $('.home-text-overlay > svg > g > path').css({fill: '#000', transition: '.25s'});
            $('.home-text-overlay').animate({ top: '50%'}, 300).css('z-index', 999);
            $('.home-slider').animate({ opacity: 1 }, 1200);
            });
        });
    })
}

function mobileFunctions() {

}
