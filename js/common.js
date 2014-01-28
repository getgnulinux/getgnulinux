/* Bootstrap JavaScript stuff */
$(document).ready(function() {
    /* Scroll to top (shamelessly copied from PHP.net) */
    (function() {
        var settings = {
            text: 'To Top',
            min: 800,
            inDelay: 600,
            outDelay: 400,
            containerID: 'toTop',
            containerHoverID: 'toTopHover',
            scrollSpeed: 400,
            easingType: 'linear'
        };

        var toTopHidden = true;
        var toTop = $('#' + settings.containerID);

        toTop.click(function(e) {
            e.preventDefault();
            $.scrollTo(0, settings.scrollSpeed, {easing: settings.easingType});
        });

        $(window).scroll(function() {
            var sd = $(this).scrollTop();
            if (sd > settings.min && toTopHidden)
            {
              toTop.fadeIn(settings.inDelay);
              toTopHidden = false;
            }
            else if(sd <= settings.min && ! toTopHidden)
            {
              toTop.fadeOut(settings.outDelay);
              toTopHidden = true;
            }
        });
    })();

    /* Fancy scroll the whole window */
    $('#faq #content a').click(function(){
        $.scrollTo(this.hash, 500);
    });

    /* Check for stuff that needs to be toggled */
    if ( (typeof toggle_items != 'undefined' && toggle_items instanceof Array) ) {
        enable_toggle(toggle_items);
    }

    $("#translations .more").click(function () {
        $("#translations #incomplete").toggle();
    });
});

/* Enable toggle for elements with ID in array $items */
function enable_toggle(items) {
    for (var i=0; i < items.length; i++) {
        (function(i) {
            var id = items[i];
            $("#" + id).click(function () {
                $("#" + id + "-toggee").toggle();
                /* Check if the item is using Font Awesome icons.
                * If so, toggle that icon. */
                if ( $("#" + id).has(".fa") ) {
                    toggle_item_fa_icon(id);
                }
            });
        })(i);
    }
}

/* Toggles the Font Awesome icon for a toggle item */
function toggle_item_fa_icon(id) {
    var af_icon = $("#" + id + " .fa");

    if ( $("#" + id + "-toggee").is(":visible") ) {
        af_icon.removeClass("fa-plus-square-o");
        af_icon.addClass("fa-minus-square-o");
    }
    else {
        af_icon.removeClass("fa-minus-square-o");
        af_icon.addClass("fa-plus-square-o");
    }
}
