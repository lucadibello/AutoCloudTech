jQuery(document).ready(function($) {
    $(window).scroll(function() {
        var scrollPos = $(window).scrollTop();
        var navbar = $('#navigation');

        if (scrollPos > 400) {
            document.getElementById('navigation').style.backgroundColor = "#FC4445";
            document.getElementById("navigation").style.transition = "all 0.7s";
        } else {
            document.getElementById('navigation').style.backgroundColor = "transparent";
        }
    });
});