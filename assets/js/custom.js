/**
 * Custom.js
*/
(function ($) {
    "use strict";

    // Slider 2
    $(".featured-slider-2 .slidershow-slider").slick({
        loop: true,
        autoplay: false,
        autoplaySpeed: 3000,
        dots: true,
        infinite: true,
        speed: 500,
        adaptiveHeight: true,
        vertical: false,
        rows: 1,
        slidesPerRow: 1,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<a class="slick-arrow slick-prev" href="javascript:0"><i class="fal fa-angle-left icon"></i></a>',
        nextArrow: '<a class="slick-arrow slick-next" href="javascript:0"><i class="fal fa-angle-right icon"></i></a>',
        responsive: [
            {
                breakpoint: 1500,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            }
        ]
    });

    $(".featured-slider-3 .slidershow-slider").slick({
        loop: true,
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        infinite: true,
        speed: 500,
        adaptiveHeight: true,
        vertical: false,
        rows: 1,
        slidesPerRow: 1,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<a class="slick-arrow slick-prev" href="javascript:0"><i class="fal fa-angle-left icon"></i></a>',
        nextArrow: '<a class="slick-arrow slick-next" href="javascript:0"><i class="fal fa-angle-right icon"></i></a>',
        responsive: [
            {
                breakpoint: 1500,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            }
        ]
    });


    function getOffset(el) {
        const rect = el.getBoundingClientRect();
        return {
            left: rect.left + window.scrollX,
            top: rect.top + window.scrollY
        };
    }

    // Get the number of pixels scrolled from 
    let site_content = document.querySelector(".site-content");
    let body_element = $('body');
    var topPos = site_content.offsetTop;

    // Sticky Header
    $(window).scroll(function () {
        if (body_element.hasClass('header-sticky')) {
            if ($(window).scrollTop() >= 200) {
                $('.header-wrapper').addClass('fixed-header');
            }
            else {
                $('.header-wrapper').removeClass('fixed-header');
            }
        }
    });

    // Sticky Sidebar =========================================

    $('.left-sidebar, .right-sidebar').stickySidebar({
        topSpacing: 60,
        bottomSpacing: 60
    });

    // if (body_element.hasClass('left-sidebar') || body_element.hasClass('right-sidebar')) {
    //     var sidebarPos = $("#secondary").position().left;
    //     var siderbarWidth = $("#secondary").width();
    // }

    // $(window).scroll(function () {

    //     if (body_element.hasClass('sidebar-sticky')) {

    //         if ($(window).scrollTop() >= topPos - 60) {

    //             var headerHeight = $('.fixed-header').height() + 60;
    //             $('#secondary').addClass('fixed-sidebar');

    //             if (body_element.hasClass('left-sidebar') || body_element.hasClass('right-sidebar')) {

    //                 $('#secondary').width(siderbarWidth);

    //                 if (body_element.hasClass('header-sticky')) {
    //                     $('#secondary').css({ left: sidebarPos, top: headerHeight });
    //                 } else {
    //                     $('#secondary').css({ left: sidebarPos, top: 0 });
    //                 }
    //             }
    //         }
    //         else {
    //             $('#secondary').removeClass('fixed-sidebar');
    //         }

    //     }
    // });

    // GotoTop Button ==========================
    var offset = 100;
    var speed = 250;
    var duration = 500;
    $(window).scroll(function () {
        if ($(this).scrollTop() < offset) {
            $('.topbutton').fadeOut(duration);
        } else {
            $('.topbutton').fadeIn(duration);
        }
    });
    $('.topbutton').on('click', function () {
        $('html, body').animate({ scrollTop: 0 }, speed);
        return false;
    });

    // Masonry Grid
    $('.posts__module.style-6').masonry({
        // options
        itemSelector: '.posts__module.style-6 .item',
        gutter: 60
    });

})(jQuery);
