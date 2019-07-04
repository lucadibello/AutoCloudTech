jQuery(document).ready(function($) {
    $(window).scroll(function() {
        var scrollPos = $(window).scrollTop();
        var navbar = $('.navbar');
  
      if (scrollPos > 400) {
        navbar.addClass('default-color');
      } else {
        navbar.removeClass('default-color');
      }
    });
  });