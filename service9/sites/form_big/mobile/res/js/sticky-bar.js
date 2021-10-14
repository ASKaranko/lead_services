// !(function($, window, document, undefined) {
//   "use strict";

//   var sticky_bar1 = true;

//   if (sticky_bar1 === true) {
//     setTimeout(function() {
//       $('.b1').fadeIn('slow');
//     }, 1000);
//   }

//   window.addEventListener("scroll", function() {
//     if (sticky_bar1 === true) {
//       if ($(window).scrollTop() > $('.sticky_bar1-on').offset().top) {
//         setTimeout(function() {
//           $('.b1').fadeIn('slow');
//         }, 1000);
//         setTimeout(function() {
//           $('.b1').fadeOut('slow');
//         }, 5000);
//         sticky_bar1 = false;
//       }
//     }
//   });

// })(jQuery, window, document);

!(function($, window, document, undefined) {
  "use strict";

  $(document).ready(function(){
    $('body').css('position','relative'); //endure body has this because its needed to stick other container
    if($('.sticky_bar_container').length===0){

      let sticky_bar_container = $('<div></div>');
      $(sticky_bar_container).addClass('sticky_bar_container');
      $(sticky_bar_container).css('position','sticky');
      $(sticky_bar_container).css('top','0');
      $(sticky_bar_container).css('z-index','1000');

      $('body').prepend($(sticky_bar_container));

    }
    $('body').find('.sticky_bar_container').prepend($('.sticky_bar')); //move to body to stick container on it
  });

  var sticky_bar2 = true;

  window.addEventListener("scroll", function() {
    if (sticky_bar2 === true) {
      if ($(window).scrollTop() > $('.sticky_bar2-on').offset().top) {
        sticky_bar2 = false;

        $('.sticky_bar .fly-box').hide(); // hide all sticky bar fly boxes except this one
        $('.b2').fadeIn('slow');

        setTimeout(function() {
          $('.b2').fadeOut('slow');
        }, 5000);
      }

    }
  });

})(jQuery, window, document);

!(function($, window, document, undefined) {
  "use strict";

  $(document).ready(function(){
    $('body').css('position','relative'); //endure body has this because its needed to stick other container
    if($('.sticky_bar_container').length===0){

      let sticky_bar_container = $('<div></div>');
      $(sticky_bar_container).addClass('sticky_bar_container');
      $(sticky_bar_container).css('position','sticky');
      $(sticky_bar_container).css('top','0');
      $(sticky_bar_container).css('z-index','1000');

      $('body').prepend($(sticky_bar_container));

    }
    $('body').find('.sticky_bar_container').prepend($('.sticky_bar')); //move to body to stick container on it
  });

  var sticky_bar5 = true;

  window.addEventListener("scroll", function() {
    if (sticky_bar5 === true) {

      if ($(window).scrollTop() > $('.sticky_bar5-on').offset().top) {
        sticky_bar5 = false;

        $('.sticky_bar .fly-box').hide();
        $('.b5').fadeIn('slow');

        setTimeout(function() {
          $('.b5').fadeOut('slow');
        }, 5000);
      }

    }
  });

})(jQuery, window, document);

!(function($, window, document, undefined) {
  "use strict";

  $(document).ready(function(){
    $('body').css('position','relative'); //endure body has this because its needed to stick other container
    if($('.sticky_bar_container').length===0){

      let sticky_bar_container = $('<div></div>');
      $(sticky_bar_container).addClass('sticky_bar_container');
      $(sticky_bar_container).css('position','sticky');
      $(sticky_bar_container).css('top','0');
      $(sticky_bar_container).css('z-index','1000');

      $('body').prepend($(sticky_bar_container));

    }
    $('body').find('.sticky_bar_container').prepend($('.sticky_bar')); //move to body to stick container on it
  });

  var sticky_bar3 = true;

  window.addEventListener("scroll", function() {

    if (sticky_bar3 === true) {

      if ($(window).scrollTop() > $('.sticky_bar3-on').offset().top) {
        sticky_bar3 = false;

        $('.sticky_bar .fly-box').hide();
        $('.b3').fadeIn('slow');

        setTimeout(function() {
          $('.b3').fadeOut('slow');
        }, 5000);
      }

    }
  });

})(jQuery, window, document);

!(function($, window, document, undefined) {

  "use strict";

    $(document).ready(function(){
        $('body').css('position','relative'); //endure body has this because its needed to stick other container
        if($('.sticky_bar_container').length===0){

            let sticky_bar_container = $('<div></div>');
            $(sticky_bar_container).addClass('sticky_bar_container');
            $(sticky_bar_container).css('position','sticky');
            $(sticky_bar_container).css('top','0');
            $(sticky_bar_container).css('z-index','1000');

            $('body').prepend($(sticky_bar_container));

        }
        $('body').find('.sticky_bar_container').prepend($('.sticky_bar_6')); //move to body to stick container on it
    });

  var sticky_bar7 = true;
  var sticky_bar6 = true;

  function countdown(element, minutes, seconds) {
    if (sticky_bar7 === true) {
      var time = minutes*60 + seconds;
      var interval = setInterval(function() {
          var el = document.querySelector(element);
          if (time <= 0) {
              el.innerHTML = "00:00";
              setTimeout(function() {
                  countdown('clock', 0, 5);
              }, 2000);
              clearInterval(interval);
              return;
          }
          var minutes = Math.floor( time / 60 );
          if (minutes < 10) minutes = "0" + minutes;
          var seconds = time % 60;
          if (seconds < 10) seconds = "0" + seconds;
          var text = minutes + ':' + seconds;
          el.innerHTML = text;
          time--;
      }, 1000);
    }

  }

  window.addEventListener("scroll", function() {
    if (sticky_bar6 === true) {
      if ($(window).scrollTop() > $('.sticky_bar6-on').offset().top) {
        sticky_bar6 = false;

        $('.b5').hide();
        $('.b6').fadeIn('slow');
        countdown('.b6_counter', 3, 0);

        setTimeout(function() {
          $('.b6').fadeOut('slow');
          $('.b7').fadeIn('slow');
          sticky_bar7 = false;
          $('.cta_fly').click(function() {
            $('html, body').animate({
              scrollTop: $(".container__form").offset().top
            }, 1000);
            $('.b7').fadeOut('slow');
          });
        }, 180000);

      }
    }
  });

})(jQuery, window, document);

!(function($, window, document, undefined) {
  "use strict";

  $(document).ready(function(){
    $('body').css('position','relative'); //endure body has this because its needed to stick other container
    if($('.sticky_bar_container').length===0){

      let sticky_bar_container = $('<div></div>');
      $(sticky_bar_container).addClass('sticky_bar_container');
      $(sticky_bar_container).css('position','sticky');
      $(sticky_bar_container).css('top','0');
      $(sticky_bar_container).css('z-index','1000');

      $('body').prepend($(sticky_bar_container));

    }
    $('body').find('.sticky_bar_container').prepend($('.sticky_bar')); //move to body to stick container on it
  });

  var sticky_bar4 = true;

  window.addEventListener("scroll", function() {
    if (sticky_bar4 === true) {

      if ($(window).scrollTop() > $('.sticky_bar4-on').offset().top) {
        sticky_bar4 = false;

        $('.sticky_bar .fly-box').hide();
        $('.b4').fadeIn('slow');

        setTimeout(function() {
          $('.b4').fadeOut('slow');
        }, 5000);
      }

    }
  });

})(jQuery, window, document);
