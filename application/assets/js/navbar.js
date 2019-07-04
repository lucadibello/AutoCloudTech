jQuery(document).ready(function ($) {
    $(window).scroll(function () {
        var scrollPos = $(window).scrollTop();
        var navbar = $('#navigation');

        if (scrollPos > 400) {
            navbar.addClass('warning-color');
            document.getElementById("navigation").style.transition = "all 1s";
        } else {
            navbar.removeClass('warning-color');
        }
    });
});