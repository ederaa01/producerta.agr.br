$(function () {
    "use strict";
    // Preloader
    $(window).load(function () {
        $("#loading-img").fadeOut();
        $("#preloader").delay(400).fadeOut("slow");
    });

    $(document).ready(function () {

        // Create launch date for ticker
        // Date below denotes 23 April, 2015
        $(function () {
            var launchDay = new Date(2015, 4 - 1, 23);
            $('#ticker').countdown({
                until: launchDay
            });
        });

        // SVG Fallback for older browsers
        $(function () {
            if (!Modernizr.svg) {
                $(".logo img").attr('src', function (index, attr) {
                    return attr.replace('svg', 'png');
                });
            }
        });

        // Placeholder initialise
        $('input, textarea').placeholder();


        $(function () {
            var options = {videoId: 'VvnvTgfa2Ek', start: 3};
            $('.page').tubular(options);
            // f-UGhWj1xww cool sepia hd
            // 49SKbS7Xwf4 beautiful barn sepia;
            // lnmZkj3p8vM particles
        });

    });

});
