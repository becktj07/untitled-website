$(window).smartresize(function() {
    runFunctionsBasedOnScreenSize();
});

$(document).ready(function() {
    runFunctionsBasedOnScreenSize();
});

var $window = $(window), isMobile = false;

if (window.matchMedia("screen and (min-width: 768px)").matches) {
    isMobile = false;
} else {
    isMobile = true;
}

$window.smartresize(function() {
    if (window.matchMedia("screen and (min-width: 768px)").matches) {
        isMobile = false;
        mobileFunctions();
    } else {
        isMobile = true;
        desktopFunctions();
    }
})

function runFunctionsBasedOnScreenSize() {
    if(isMobile) {
        console.log('This is a mobile device');
        mobileFunctions();
    } else if(!isMobile) {
        console.log('This is a desktop computer');
        desktopFunctions();
    }
}

function desktopFunctions() {
    initializeDesktopInfo();
    clearDesktop();
    function initializeDesktopInfo() {
        $('.button-trigger').click(function(e) {
            e.preventDefault();
            $('.sprite-i').animate({ opacity: 0}, 500, function(){
                $(this).removeClass('sprite-i').addClass('sprite-x').animate({ opacity: 1}, 500);
                $('.home-text-overlay').animate({ top: '100px'}, 300);
                $('.home-text-overlay > svg > g > path').css({fill: '#FFF6D6', transition: '.25s'});
                $('.creative').animate({ opacity: 1 }, 300);
                setTimeout(function(){
                    $('.studio').animate({ opacity: 1 }, 300);
                            //do this stuff after 250
                    }, 250);
                $('.home-text-overlay').css('z-index', -3);
                $('.information').css('z-index', 0);
            }); 
            $('.home-slider').animate({ opacity: 0 }, 1200, function(){
                setTimeout(function(){
                    $('.info-flex-container').animate({ opacity: 1}, 750);
                }, 250);
            });
        })
    }
    function clearDesktop() {
    
    }
}

function mobileFunctions() {
    $('.button-trigger').click(function(e) {
        e.preventDefault();
        $('.home-slider').animate({ opacity: 0 }, 350, function(){
            $('.home-text-overlay').animate({ opacity: 0}, 500);
            $('.info-flex-container').animate({ opacity: 1}, 500);
        });
    })
};
