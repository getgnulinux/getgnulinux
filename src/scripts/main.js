$(document).ready(function() {
    /* Enable PNG fallback for browsers not supporting SVG in img tags */
    svgeezy.init(false, 'png');

    $(window).on('load resize', function() {
        var menuToggle = $('#js-navigation-mobile-menu').unbind();
        $('#js-navigation-menu').removeClass('show');

        menuToggle.on('click', function(e) {
            e.preventDefault();
            $('#js-navigation-menu').slideToggle(function(){
                if($('#js-navigation-menu').is(':hidden')) {
                    $('#js-navigation-menu').removeAttr('style');
                }
            });
        });
    });

    $(window).load(function() {
        $('.flexslider.flexslider_home').flexslider({
            slideshow: false,
            animation: 'slide'
        });
    });

    $(window).load(function() {
        $('.flexslider.flexslider_screenshots').flexslider({
            animation: 'fade'
        });
    });
});
