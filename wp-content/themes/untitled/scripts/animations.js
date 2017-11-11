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
    } else {
        isMobile = true;
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
    $('.button-trigger').click(function(e) {
        e.preventDefault();
        $('.info-flex-container').animate({ opacity: 0 }, 300, function(){
            $('.branding-text-overlay > div:nth-of-type(3)').animate({ opacity: 0 }, 350, function(){
                $('.branding-text-overlay > div:nth-of-type(2)').animate({ opacity: 0 }, 400, function(){
                    $('.branding-text-overlay > div:nth-of-type(1) > svg > g > path').css({fill: 'black', transition: '2.0s'}); 
                    $('.branding-text-overlay > div:nth-of-type(1)').animate({ top: '50%' }, 500, function(){
                        location.href='/untitled';
                    });  
                });  
            });        
        });
    })
}

function mobileFunctions() {
   console.log('do nothing');
};