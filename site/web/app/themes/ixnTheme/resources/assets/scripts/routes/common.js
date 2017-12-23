export default {
  init() {

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

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 20,
  });

  //  add active class to navbar items on active page

    // JavaScript to be fired on all pages
      // Collapse Navbar

      var navbarCollapse = function() {
          if ($("#mainNav").offset().top > 50) {
              $("#mainNav").addClass("navbar-shrink");
          } else {
              $("#mainNav").removeClass("navbar-shrink");
          }
      };
      // Collapse now if page is not at top
      navbarCollapse();
      // Collapse the navbar when page is scrolled
      $(window).scroll(navbarCollapse);

      $(document).ready(function(){
          $('.hamburger').click(function(){
              $(this).toggleClass('open');
              $('.menu-overlay').toggleClass('open');
          });
          $('.toggle-projects-overlay').click(function() {
              $('aside').toggleClass('open');
          });
      });
    
    $(function() {
    $('.toggle-overlay').click(function() {
    $('aside').toggleClass('open');
    });
  });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
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
