export default {
  init() {
    // JavaScript to be fired on the home page

    (function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 48),
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

        // Closes responsive menu when a scroll trigger link is clicked
        $('.js-scroll-trigger').click(function() {
            $('.navbar-collapse').collapse('hide');
        });

})(jQuery); // End of use strict

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
      (function() {
          var v = document.getElementsByClassName("youtube-player");
          for (var n = 0; n < v.length; n++) {
              var p = document.createElement("div");
              p.innerHTML = labnolThumb(v[n].dataset.id);
              p.onclick = labnolIframe;
              v[n].appendChild(p);
          }
      })();

      function labnolThumb(id) {
          return '<img class="youtube-thumb" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="play-button"></div>';
      }

      function labnolIframe() {
          var iframe = document.createElement("iframe");
          iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
          iframe.setAttribute("frameborder", "0");
          iframe.setAttribute("id", "youtube-iframe");
          this.parentNode.replaceChild(iframe, this);
      }
  },
};
