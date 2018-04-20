/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        $("a.open-canvas").on("click", function() {
          $(this).css("display", "none");
          $("a.close-canvas").show();
        });

        $("a.close-canvas").on("click", function() {
          $(this).css("display", "none");
          $("a.open-canvas").show();
        });

        $("a.open-live-chat").on("click", function() {
          LC_API.open_chat_window();
        });

        $('#closenewsletter').on('click', function(e) {
          $('.newsletter-sign-up').remove();
        });

        jQuery('.close').click(function() {
          jQuery('#popup-container').fadeOut();
          jQuery('#active-popup').fadeOut();
        });

        var visits = Cookies.get('visits') || 0;
        visits++;

        Cookies.set('visits', visits, { expires: 1, path: '/' });


        if (Cookies.get('visits') > 2) {
          jQuery('.newsletter-sign-up').hide();
        } else {

          myID = document.getElementById("NewsLetterI");

          var myScrollFunc = function() {
            var y = window.scrollY;
            if (y >= 800) {
              myID.className = "newsletter-sign-up show";
            } else {
              myID.className = "newsletter-sign-up hide";
            }
          };

          window.addEventListener("scroll", myScrollFunc);
        }

        if (Cookies.get('noShowWelcome')) {
          jQuery('#popup-container').hide();
          jQuery('#active-popup').hide();
        }
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {

        $('.home-slider').slick({
          autoplay: true,
          pauseOnHover: false,
          fade: true,
          arrows: false,
          lazyLoad: 'ondemand',
          speed: 3000
        });

        $('.home-slider').on('lazyLoaded', function(e, slick, image, imageSource) {
          image.attr('src', ''); //remove source
          image.parent().css('background-image', 'url("' + imageSource + '")'); //replace with background instead
          image.parent().css('background-size', 'cover');
          image.parent().css('background-position', 'center');
          image.parent().css('background-repeat', 'no-repeat');
        });

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    },
    'page_template_page_outpatient': {
        init: function() {

            $(".location-slider").slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                nextArrow: '<img class="next-arrow" src="/wp-content/themes/alohouse/dist/images/icons/next-arrow.png" />',
                prevArrow: '<img class="prev-arrow" src="/wp-content/themes/alohouse/dist/images/icons/previous-arrow.png" />',
            });

            $(".individual-slider").slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                nextArrow: '<img class="next-arrow" src="/wp-content/themes/alohouse/dist/images/icons/next-arrow.png" />',
                prevArrow: '<img class="prev-arrow" src="/wp-content/themes/alohouse/dist/images/icons/previous-arrow.png" />',
            });
        }
    },
    'page_template_page_intensive_outpatient_program_new':{
        init: function() {

            $(".location-slider").slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                nextArrow: '<img class="next-arrow" src="/wp-content/themes/alohouse/dist/images/icons/next-arrow.png" />',
                prevArrow: '<img class="prev-arrow" src="/wp-content/themes/alohouse/dist/images/icons/previous-arrow.png" />',
            });
        }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);








})(jQuery); // Fully reference jQuery after this point.
