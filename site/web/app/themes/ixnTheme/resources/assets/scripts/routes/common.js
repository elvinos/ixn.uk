export default {
  init() {
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
  },
};
