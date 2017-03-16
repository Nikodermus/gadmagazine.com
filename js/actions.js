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

//Slider
$(document).ready(function () {
    var sudoSlider = $("#slider").sudoSlider({

        autoHeight: false,
        numeric: true,
        auto: true,
        pause: 10000,
        speed: 500,
    });
});

//Timing ends

var end = new Date();
var endTime = end.getTime();
var timeTaken = end - start;
console.log('Execution time is : ' + timeTaken);
