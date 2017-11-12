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
        $('.home-slider').animate({ opacity: 0 }, 350, function(){
            $('.info-flex-container').animate({ opacity: 1}, 500);
                $('.home-text-overlay').animate({ top: '100px'}, 500,);
                $('.home-text-overlay').css('z-index', -3);
                $('.home-text-overlay > svg > g > path').css({fill: '#FFF6D6', transition: '.5s'}); 
        });
    })
}

function mobileFunctions() {
    $('.button-trigger').click(function(e) {
        e.preventDefault();
        $('.home-slider').animate({ opacity: 0 }, 350, function(){
            $('.home-text-overlay').animate({ opacity: '0',}, 500,); 
            $('.info-flex-container').animate({ opacity: 1}, 500);
            $('.home-text-overlay > svg > g > path').css({fill: '#FFF6D6', transition: '.5s'}); 
        });
    })
};


// function desktopFunctions() {
//     $('.button-trigger').click(function(e) {
//         e.preventDefault();
//         $('.home-slider').animate({ opacity: 0 }, 250, function(){
//             $('.info-flex-container').animate({ opacity: 0 }, 300, function(){
//                 $('.branding-text-watermark > div:nth-of-type(3) > svg > g > path').animate({ opacity: 0 }, 350, function(){
//                     $('.branding-text-watermark > div:nth-of-type(2) > svg > g > path').animate({ opacity: 0 }, 400, function(){
//                         $('.branding-text-watermark > div:nth-of-type(1) > svg > g > path').css({fill: 'black', transition: '2.0s'}); 
//                         $('.branding-text-watermark > div:nth-of-type(1)').animate({ top: '50%' }, 500, function(){
//                             //location.href='/untitled';
//                         });  
//                     });  
//                 });        
//             });
//         });
//     })
// }