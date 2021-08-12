function startTime() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    let mm = today.getMonth();
    let y = today.getFullYear();
    let d = today.getDate();
    let day;
    let ampm = h >= 12 ? 'pm' : 'am';
    h = h % 12;
    h = h ? h : 12; // the hour '0' should be '12'
    // m = m < 10 ? '0'+m : m;
    switch (today.getDay()) {
        case 0:
            day = "Sunday";
            break;
        case 1:
            day = "Monday";
            break;
        case 2:
            day = "Tuesday";
            break;
        case 3:
            day = "Wednesday";
            break;
        case 4:
            day = "Thursday";
            break;
        case 5:
            day = "Friday";
            break;
        case 6:
            day = "Saturday";
            break;

        default:
            break;
    }
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time').innerHTML = h + ":" + m + ":" + s + " " + ampm;
    document.getElementById('date').innerHTML = day + ", " + d + "/" + mm + "/" + y
    setTimeout(startTime, 1000);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    }; // add zero in front of numbers < 10
    return i;
}

$(document).ready(function () {
    startTime();
    $x = $(".left-aside").height();
    $y = $(".right-aside").height();
    $z = $(window).height();
    if ($z > $x) {
        $(".left-aside .navigation").css({
            "height": $z
        });
    } else {
        $(".left-aside .navigation").css({
            "height": $x
        });
    }
    var ps = new PerfectScrollbar('#demo');
    $("#demo .navbar-brand h1").replaceWith('<img src="{{ asset("images/logo.png") }}">');

    $(".left-aside").hover(function () {
            $("#demo .navbar-brand").css({
                'margin-left': '0',
                'transition': 'margin-left 0.3s linear'
            });
            $("#demo .navbar-brand h1").replaceWith('<img src="{{ asset("images/logo.png") }}">');

        },
        function () {
            $("#demo .navbar-brand").css({
                // 'margin-left': '-175px',
                'transition': 'margin-left 0.3s linear'
            });
            $("#demo .navbar-brand h1").replaceWith('<img src="{{ asset("images/logo.png") }}">');
        });

    var arr;
    $('.color1').click(function () {
        var x = $(this).css('background-color');

        $('.active').removeClass('active');
        $(this).addClass('active');
        var y = $(this).css('border-color');



        var text = $(this).attr('data-color');

        $(this).parents('.card-body').find('.alert-class').children('span').replaceWith('<span>add class = "' + text + '"</span>');



    });
    $(".card-class span").click(function () {
        $(this).parents('.card-body').find('.alert').removeClass('alert-danger alert-warning alert-light alert-primary alert-success alert-secondary alert-info alert-dark')
            .addClass($(this).data("color"));
    });


    $(".toggle-right").click(function () {
        $(".left-aside .sidebar").css("margin-left", "0").removeClass('sidebar-res');
        $("#demo .navbar-brand h1").replaceWith('<h1 class="text-center">EDMS</h1>');
        $("#demo .navbar-brand").css("margin-left", "0");

        $(".close-icon").show();
    });
    $(".close-icon").click(function () {
        $(".left-aside .sidebar").css("margin-left", "-175px").addClass('sidebar-res');
        $("#demo .navbar-brand h1").replaceWith('<h1 class="text-right mr-10">J</h1>');
        $(this).hide();

    });

    // $('select').selectize({
    //     sortField: 'text'
    // });

});
//leftmenu collapse in active
jQuery(function ($) {
    $("#menu ul a")
        .click(function (e) {
            var link = $(this);


            var item = link.parent("li");

            if (item.hasClass("active")) {
                item.find('.imicon').addClass('imarrow');
                // item.removeClass("active").children("a").removeClass("active");
            } else {
                item.find('.imicon').removeClass('imarrow');
                // item.addClass("active").children("a").addClass("active");
            }

            if (item.children("ul").length > 0) {
                var href = link.attr("href");
                console.log(href);
                link.attr("href", "#");
                setTimeout(function () {
                    link.attr("href", href);
                }, 300);
                e.preventDefault();
            }
        })
        .each(function () {
            var link = $(this);
            if (link.get(0).href === location.href) {
                link.parents('.menu-dropdown').find('.imicon').addClass('imarrow');

                return false;
            }
        });
});

//left menu collapse active end


//card collapse code
$(document).on('click', '.card-header .clickable', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.card').find('.card-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.closest('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
        $('.showhide').attr('title', 'Show Panel content');
        $this.parents('.card-header').removeClass('border')

    } else {
        $this.parents('.card').find('.card-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.closest('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
        $('.showhide').attr('title', 'Hide Panel content');
        $this.parents('.card-header').addClass('border')


    }
});


$(document).on('click', '.card-header .removepanel', function () {
    var $this = $(this);
    $this.parents('.card').hide("slow");

});
//card collapse code end
