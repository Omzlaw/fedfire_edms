var left_side_width = 240; //Sidebar width in pixels
"use strict";
$(function() {
    //hide menu in small screens
    if ($(window).width() <= 992) {
        $(".wrapper").addClass("hide_menu");
    }
    //Enable sidebar toggle
    $("#toggle-link").on('click', function(e) {
        e.preventDefault();
        //Toggle Menu
        $(".wrapper").toggleClass("hide_menu");
    });
    //leftmenu init
    $('#menu').metisMenu();
    // INIT popovers
    // $("[data-toggle='popover']").popover();
    /************** alert messages **********/

    setTimeout(function() {
        $("#notific").remove();
    }, 5000);
});
/*END DEMO*/