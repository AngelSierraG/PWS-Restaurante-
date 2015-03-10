function include(url) {
    document.write('<script src="' + url + '"></script>');
    return false;
}

/* cookie.JS
 ========================================================*/
include('jquery.cookie.js');


/* DEVICE.JS
 ========================================================*/
include('device.min.js');

/* Stick up menu
 ========================================================*/
include('tmstickup.js');
$(window).load(function () {
    if ($('html').hasClass('desktop')) {
        $('#stuck_container').TMStickUp({
        })
    }
});

/* Easing library
 ========================================================*/
include('jquery.easing.1.3.js');

/* ToTop
 ========================================================*/
include('jquery.ui.totop.js');
$(function () {
    $().UItoTop({ easingType: 'easeOutQuart' });
});

/* Stellar.js
 ========================================================*/
include('stellar/jquery.stellar.js');
$(document).ready(function () {
    if ($('html').hasClass('desktop')) {
        $.stellar({
            horizontalScrolling: false,
            verticalOffset: 20
        });


    }
});

/* DEVICE.JS AND SMOOTH SCROLLIG
 ========================================================*/
include('jquery.mousewheel.min.js');
include('jquery.simplr.smoothscroll.min.js');
$(function () {
    if ($('html').hasClass('desktop')) {
        $.srSmoothscroll({
            step: 150,
            speed: 800
        });
    }
});

/* Copyright Year
 ========================================================*/
var currentYear = (new Date).getFullYear();
$(document).ready(function () {
    $("#copyright-year").text((new Date).getFullYear());
});


/* Superfish menu
 ========================================================*/
include('superfish.js');
include('jquery.mobilemenu.js');

/* Unveil
 ========================================================*/
include('jquery.unveil.js');
$(document).ready(function () {
    $('img').unveil(0, function () {
        $(this).load(function () {
            $(this).addClass("js-unveil");
        });
    });
});

/* Google Map
 ========================================================*/
$(window).load()
{
    if ($('#map').length > 0) {
        var mapOptions = {
            zoom: 14,
            center: new google.maps.LatLng(parseFloat(40.646197), parseFloat(-73.9724068, 14)),
            scrollwheel: false
        }
        new google.maps.Map(document.getElementById("map"), mapOptions);
    }
}

/* Orientation tablet fix
 ========================================================*/
$(function () {
// IPad/IPhone
    var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
        ua = navigator.userAgent,

        gestureStart = function () {
            viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
        },

        scaleFix = function () {
            if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
                viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
                document.addEventListener("gesturestart", gestureStart, false);
            }
        };

    scaleFix();
    // Menu Android
    if (window.orientation != undefined) {
        var regM = /ipod|ipad|iphone/gi,
            result = ua.match(regM)
        if (!result) {
            $('.sf-menu li').each(function () {
                if ($(">ul", this)[0]) {
                    $(">a", this).toggle(
                        function () {
                            return false;
                        },
                        function () {
                            window.location.href = $(this).attr("href");
                        }
                    );
                }
            })
        }
    }
});
var ua = navigator.userAgent.toLocaleLowerCase(),
    regV = /ipod|ipad|iphone/gi,
    result = ua.match(regV),
    userScale = "";
if (!result) {
    userScale = ",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0' + userScale + '">')

$(document).ready(function () {
    var obj;
    if ((obj = $('#camera')).length > 0) {
        obj.camera({
            autoAdvance: true,
            height: '54.6875%',
            minHeight: '200px',
            pagination: false,
            thumbnails: false,
            playPause: false,
            hover: false,
            loader: 'none',
            navigation: true,
            navigationHover: false,
            mobileNavHover: false,
            fx: 'simpleFade'
        })
    }

    if ((obj = $('a[data-type="lightbox"]')).length > 0) {
        obj.touchTouch();
    }

    if ((obj = $('#tabs')).length > 0) {
        obj.easyResponsiveTabs();
    }
});

