/*
* ----------------------------------------------------------------------------------------
    Template Name: Photo Love Portfolio Responsive Template  .
    Template URI: https://mahediamin.com
    Description: Fabric is an e-Commerce PSD Template that is designed to build modern, responsive and user friendly e-Commerce site easily.
    Author: mahediamin
    Author URI: https://mahediamin.com
    Version: 1.0

* ----------------------------------------------------------------------------------------
*/

(function ($) {
    'use strict';

    jQuery(document).on("ready", function () {


        /*
        ===================================================
        SLIDER ANIMATION
        ===================================================
        */
        $(".slider-active").on("translate.owl.carousel", function () {
            $(".banner-content h3,.banner-content h2").removeClass("animated fadeInUp").css("opacity", "0");
            $(".banner-content p").removeClass("animated flipInX").css("opacity", "0");
            $(".banner-content a.btn-mr-gra").removeClass("animated fadeInUp").css("opacity", "0");

        });

        $(".slider-active").on("translated.owl.carousel", function () {
            $(".banner-content h3,.banner-content h2").addClass("animated fadeInUp").css("opacity", "1");
            $(".banner-content p").addClass("animated flipInX").css("opacity", "1");
            $(".banner-content a.btn-mr-gra").addClass("animated fadeInUp").css("opacity", "1");

        });

        /*
        ===================================================
          Filtering Activation
        ===================================================
        */

        $('.filter-list').on('click', 'li',
            function () {
                $('.filter-list li').removeClass(
                    'active');
                $(this).addClass('active');
                var filterValue = $(this).attr(
                    'data-filter');
                $('.grid').isotope({
                    filter: filterValue
                });
                $(window).trigger('resize');
            });


        /*
        ===================================================
          OWL CAROSEL ACTIVATION
        ===================================================
        */
        // slider activatin
        $('.slider-active').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplayTimeout: 6000,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            mouseDrag: false,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 1
                },
                980: {
                    items: 1
                },
                1199: {
                    items: 1
                }
            }
        });
        // slider dot convert number
        var dot = $('.slider-active .owl-dot');
        dot.each(function () {
            var index = $(this).index() + 1;
            if (index < 10) {
                $(this).html('').append(index);
            } else {
                $(this).html(index);
            }
        });
        // services active
        $('.service-acitve').owlCarousel({
            loop: true,
            margin: 0,
            mouseDrag: true,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 2
                },
                980: {
                    items: 3
                },
                1199: {
                    items: 3
                }
            }
        });
        // team acive
        $('.team-active').owlCarousel({
            loop: true,
            margin: 0,
            mouseDrag: true,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 2
                },
                980: {
                    items: 3
                },
                1199: {
                    items: 3
                }
            }
        });
        // team acive
        $('.testimonials-active').owlCarousel({
            loop: true,
            margin: 0,
            mouseDrag: true,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 1
                },
                980: {
                    items: 1
                },
                1199: {
                    items: 1
                }
            }
        });
        // team acive
        $('.gallery-active').owlCarousel({
            loop: true,
            margin: 0,
            mouseDrag: true,
            autoplay: true,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 2
                },
                768: {
                    items: 3
                },
                980: {
                    items: 4
                },
                1199: {
                    items: 5
                }
            }
        });

        /*
        ===================================================
         Scorll up activation
        ===================================================
        */


        $.scrollUp({
            scrollText: '<i class="fa fa-angle-up"></i>'

        });


        /*
        ===================================================
        Counter Activation
        ===================================================
        */

        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });




        /*
        ==========================================
        SMOTTH SCROLL
        ==========================================
        */
        $('a.smooth-scroll').on("click", function (e) {
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top - 30
            }, 1000);
            e.preventDefault();
        });
        $('body').scrollspy({
            target: '.navbar-collapse',
            offset: 195
        });

        /*
        ==========================================
        Magnify popup
        ==========================================
        */
        $('.img-poppu').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });

        /*
        ==========================================
       STICKY MENU
        ==========================================
        */
        $(window).on('scroll', function () {
            var scroll = $(window).scrollTop();
            if (scroll < 200) {
                $(".top-transparent-nav").removeClass("sticky fadeInDown animated");
            } else {
                $(".top-transparent-nav").addClass("sticky fadeInDown animated");
            }
        });
        /*
        ==========================================
        PRICE TABLE HOVER EFFECT
        ==========================================
        */
        $(".single-pricetable").on('mouseover', function () {

            $(".single-pricetable").removeClass(
                "active");
            $(this).addClass("active");

        });


        /*
        ==========================================
        MOBILE MENU
        ==========================================
        */
        $(".navbar-toggle").on('click', function () {

            $("body").addClass(
                "mobile_menu_mr")
        });
        $(".nav.navbar-nav li a").on('click',
            function () {

                $(".navbar-collapse ").removeClass(
                    "in")
            });



        /*
        ==========================================
        PRELODER ACTIVATION
        ==========================================
        */
        jQuery(window).load(function () {
            jQuery(".preloder-rapper").fadeOut(500);
        });

        /*
        ==========================================
        MESSONARY ACTIVATION
        ==========================================
        */

        $('.grid').imagesLoaded(function () {
            // filter items on button click
            $('.portfolio-menu').on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            // init Isotope
            var $grid = $('.grid').isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: 1,
                }
            });
        });



    });

})(jQuery);