(function ($) {
    "use strict";

    $('.main-menu').meanmenu({
        meanMenuContainer: '.mobile-nav',
        meanScreenWidth: "992",
        meanRevealPosition: "right"
    });

    $('.client-testimonial').owlCarousel({
        loop: true,
        autoplay:false,
        autoplayTimeout:3000,
        nav: true,
        navText: ['<i class="icofont icofont-rounded-left"></i>','<i class="icofont icofont-rounded-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

})(jQuery);	