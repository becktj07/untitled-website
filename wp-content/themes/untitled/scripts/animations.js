
$(document).ready(function() {
    runFunctionsBasedOnScreenSize();
});

var $window = $(window);
var isMobile = false;

$window.smartresize(function() {
    if (window.matchMedia("screen and (min-width: 768px)").matches) {
        isMobile = false;
        console.log('SMR Mobile');
    } else {
        console.log('SMR Desktop');
    }
})

function runFunctionsBasedOnScreenSize() {
    if(isMobile) {
        console.log('runFunctionsBasedOnScreenSize Mobile');
        mobileFunctions();
    } else if(!isMobile) {
        console.log('runFunctionsBasedOnScreenSize Desktop');
        desktopFunctions();
    }
}

function desktopFunctions() {
    initializeDesktopInfo();
    restoreDesktopSlider();

    function initializeDesktopInfo() {
        $('.info-button-trigger').click(function(e) {
            e.preventDefault();
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
         $('.x-button-trigger').click(function(e) {
             e.preventDefault();
             console.log('restoreDesktopSlider');
             $('.sprite-x').animate({ opacity: 0}, 500, function(){
                $(this).removeClass('sprite-x').addClass('sprite-i').animate({ opacity: 1}, 500);
                $('.info-flex-container').animate({ opacity: 0}, 750, function(){
                     setTimeout(function(){
                         $('.studio').animate({ opacity: 0 }, 300);
                     }, 250);
                    $('.creative').animate({ opacity: 0 }, 300);
                    $('.home-text-overlay > svg > g > path').css({fill: '#000', transition: '.25s'});
                    $('.home-text-overlay').animate({ top: '50%'}, 300);
                 });
             });
         })
     }
}

function mobileFunctions() {

}
