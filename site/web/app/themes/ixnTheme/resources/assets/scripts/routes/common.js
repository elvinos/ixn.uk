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


        $(document).ready(function(){
            simpleSelect();
        });

        function simpleSelect() {
            "use strict";
            var selectHolder,
                selectClass;
            //Setup
            $('select').each(function() {
                selectClass = $(this).attr('class');
                selectHolder = '<dl class="simpleSelect '+selectClass+'">';
                selectHolder += '<dt>'+$('option', this).first().text()+'</dt><dd><ul>';
                $('option', this).each(function() {
                    selectHolder += '<li data="'+$(this).val()+'">'+$(this).text()+'</li>';
                });
                selectHolder += '</ul></dd></dl>';
                $(this).after(selectHolder);
                $('.'+selectClass).wrapAll('<div class="selectContainer"></div>');
            });

            //Clicks
            $('.simpleSelect dd ul li').on("click",function(){
                $(this).parents().eq(3).find('select').val($(this).attr('data'));
            });

            $('.simpleSelect dt').on("click",function() {
                if($(this).next('dd').hasClass("open")){
                    $(this).removeClass("open").next('dd').removeClass("open");
                }
                else {
                    $(this).addClass("open").next('dd').addClass("open");
                }
            });

            $('.simpleSelect dd ul li').on("click",function() {
                $(this).parents().eq(1).removeClass("open");
                $(this).parents().eq(2).find('dt').removeClass("open");
                $(this).parents().eq(4).find('dt').text($(this).text());
            });
        }
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
