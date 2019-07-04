jQuery(document).ready(function ($) {
    $(window).scroll(function () {
        var scrollPos = $(window).scrollTop();
        var navbar = $('#navigation');

        if (scrollPos > 400) {
            console.log("scroll down");
            navbar.addClass('.warning-color');
            /*navbar.addClass('.animated');
            navbar.addClass('.fadeIn');
            navbar.addClass('.slow');*/
        } else {
            console.log("scroll up");
            navbar.removeClass('.warning-color');
            /*navbar.removeClass('.animated');
            navbar.removeClass('.fadeIn');
            navbar.removeClass('.slow');*/
        }
    });
});