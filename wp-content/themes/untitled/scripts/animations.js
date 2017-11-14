
var iButton = $("#i-button-trigger");
var xButton = $("#x-button-trigger");
var windowWidth = $(window).width();

$(document).ready(function() {
    desktopAnimations();
});

function checkSize() {
    if (windowWidth <= 890) {
        //mobileAnimations();
    } else {
        desktopAnimations();
    }
}

//run resize functions
$(window).resize(function () {
    if (windowWidth != $(window).width()) {
        windowWidth = $(window).width();
        checkSize();
    }
});

function desktopAnimations(){
    $(document).on("click","#info-button-trigger",function(iButtonClick){
        iButtonClick.stopImmediatePropagation();
        iButtonClick.preventDefault();
        $(this).removeAttr('id', 'i-button-trigger').attr('id', 'x-button-trigger');
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
    });
       
    $(document).on("click","#x-button-trigger",function(xButtonClick){
        xButtonClick.stopImmediatePropagation();
        xButtonClick.preventDefault();
        $(this).removeAttr('id', 'x-button-trigger').attr('id', 'info-button-trigger');
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
    });
}

function mobileAnimations() {
    
}