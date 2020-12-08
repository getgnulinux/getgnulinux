$(document).ready(function() {
    /* Enable PNG fallback for browsers not supporting SVG in img tags */
    svgeezy.init(false, 'png');

    /* Show an alert box if the browser is outdated */
    (function() {
        var $box = $('.alertbox.browsehappy'),
            stateCookieName = 'alertbox_outdated_browser',
            alreadyClosed = $.cookie(stateCookieName);

        /* Use absence of SVG support as a criterion for an outdated browser */
        if (!Modernizr.svg && !alreadyClosed) {
            $box.removeClass('hidden');
        }

        $box.find('.close').click(function() {
            $box.slideUp();
            $.cookie(stateCookieName, 1, { expires: 30, path: '/' });
        });
    })();

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
