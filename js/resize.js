//Timing Starts
var start = new Date();
var startTime = start.getTime();

//Resizing
$(window).load(function () {
    $(window).resize(function () {
        var elem = $(this);
        var elemWidth = $(this).width();
        var elemHeight = $(this).height();
        var videoCont = $('.video--container').width();
        var videoWidth = $('video').width();
        
        
       

        if (elemWidth >= 993) {
            //Desktop

        } else {
            //Mobile 
             $('video').css('left','-'+(videoWidth - videoCont)/2+'px')

        }
    });
    $(window).resize();
});