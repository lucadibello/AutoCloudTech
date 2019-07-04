jQuery(document).ready(function ($) {
    $(window).scroll(function () {
        var scrollPos = $(window).scrollTop();
        var navbar = $('#navigation');

        if (scrollPos > 400) {
            navbar.addClass('warning-color');
            document.getElementById("navigation").style.transition = "all 0.7s";
        } else {
            navbar.removeClass('warning-color');
        }
    });
});