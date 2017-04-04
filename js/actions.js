/*
Global Actions Sheet

  Author:   Nicolas M. Pardo
  Date:     15 - MARCH - 2017
  Project:  GadMagazine

*/

//Smooth Scroll

$(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 500);
                return false;
            }
        }
    });
});


$(document).ready(function () {
    //Slider
    var sudoSlider = $("#slider").sudoSlider({

        autoHeight: false,
        numeric: true,
        auto: true,
        pause: 10000,
        speed: 500,
    });
    //Slider
    setTimeout(function () {
        $('body').addClass('loaded');
    }, 1);
    setTimeout(function () {
        $('#loader-wrapper').css('display', 'none');
    }, 2)
});

//Nav

var isOpen = "cerrado";

function openMenu() {
    $('.nav--open').removeClass('nav--hidden').addClass('nav--show');
    $('.nav--show').css('animation', 'fadeIn .6s .1s forwards');
    isOpen = "abierto";
}

function closeMenu() {
    $('.nav--show').css('animation', 'fadeOut .6s forwards');
    setTimeout(function () {
        $('.nav--open').removeClass('nav--show').addClass('nav--hidden');
    }, 200);
    isOpen = "cerrado";
}



$(document).keyup(function (e) {

    if (e.keyCode === 27) $('.close-menu').click();

    if (e.keyCode === 77) {
        if (isOpen === "abierto") {
            $('.close-menu').click();
        } else {
            $('.open-menu').click();
        }
    }
});

$('.open-menu').click(openMenu);
$('.close-menu').click(closeMenu);

//Restart animation


//Timing ends

var end = new Date();
var endTime = end.getTime();
var timeTaken = end - start;
console.log('Execution time is : ' + timeTaken);
