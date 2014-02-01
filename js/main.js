/* Bootstrap JavaScript stuff */
$(document).ready(function() {
    /* Scroll to top (shamelessly copied from PHP.net) */
    (function() {
        var settings = {
            text: 'To Top',
            min: 800,
            inDelay: 600,
            outDelay: 400,
            containerID: 'to-top',
            containerHoverID: 'to-top-hover',
            scrollSpeed: 400,
            easingType: 'linear'
        };

        var toTopHidden = true;
        var toTop = $('#' + settings.containerID);

        toTop.click(function(e) {
            e.preventDefault();
            $.scrollTo(0, settings.scrollSpeed, {easing: settings.easingType});
        });

        Mousetrap.bind("t t", function(e) {
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

    /* Mousetraps */
    Mousetrap.bind("t u x enter", function(e) {
        $("header #logo i").removeClass("fa-home").addClass("fa-linux");
    });
});

/* Enable toggle for elements with ID in array $items */
function enable_toggle(items) {
    for (var i=0; i < items.length; i++) {
        (function(i) {
            var id = items[i];
            $("#"+id).click(function () {
                $("#"+id+"-toggee").toggle();
                /* Toggle Font Awesome icon if present */
                if ( $("#"+id).has(".fa") )
                    toggle_item_fa_icon(id);
            });
        })(i);
    }
}

/* Toggles the Font Awesome icon for a toggle item */
function toggle_item_fa_icon(id) {
    var icon = $("#"+id+" .fa");
    if ( $("#"+id+"-toggee").is(":visible") )
        icon.removeClass("fa-plus-square-o").addClass("fa-minus-square-o");
    else
        icon.removeClass("fa-minus-square-o").addClass("fa-plus-square-o");
}
