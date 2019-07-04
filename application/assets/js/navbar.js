jQuery(document).ready(function($) {
    $(window).scroll(function() {
        var scrollPos = $(window).scrollTop();
        var navbar = $('.navbar');
  
      if (scrollPos > 300) {
        navbar.addClass('dark-bg');
      } else {
        navbar.removeClass('dark-bg');
      }
    });
  });