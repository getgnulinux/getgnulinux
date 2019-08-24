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

  /* Enable fancy scrolling on the Linux FAQ */
  $('#faq #content a').click(function(){
    $.scrollTo(this.hash, 500);
  });

  (function() {
    var settings = {
      text: 'To Top',
      min: 200,
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

    $(window).scroll(function() {
      var sd = $(this).scrollTop();
      if (sd > settings.min && toTopHidden) {
        toTop.fadeIn(settings.inDelay);
        toTopHidden = false;
      }
      else if (sd <= settings.min && ! toTopHidden) {
        toTop.fadeOut(settings.outDelay);
        toTopHidden = true;
      }
    });
  }());

  $(window).on('load resize',function(e) {
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
});
