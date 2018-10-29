(function ($) {
    /*  "use strict"; */

    $('.main-menu').meanmenu({
        meanMenuContainer: '.mobile-nav',
        meanScreenWidth: "1200",
        meanRevealPosition: "right"
    });
    /*Faq*/
    /* $('.faqTab').on('click', 'li', function () {
         $(this).addClass('active').siblings().removeClass('active');
     });

     $('.faq-tab').click(function () {alert('hi');
         $('html, body').animate({
             scrollTop: $("div.middle").offset().top
         }, 1000)
     });*/
    $(".faqTab").accordion();
    /*Faq*/
    /*Tab Menu Category*/
    $('.tab-category li').on('click', function () {
        $(this).addClass('active').siblings().removeClass('active');
    });
    /*Tab*/

    $(".cat-menu-tabs").tabs();
    /*Tab*/
    /*Tab Menu Category*/
    $('li.tab-category-product-name').on('click', function () {

        $('.cat-menu-tabs-name').addClass('active');
        $('.cat-menu-tabs-brand').removeClass('active');
    });
    $('li.tab-category-product-brand').on('click', function () {

        $('.cat-menu-tabs-brand').addClass('active');
        $('.cat-menu-tabs-name').removeClass('active');
    });
    $('.client-testimonial').owlCarousel({
        loop: true,
        autoplay: false,
        autoplayTimeout: 3000,
        nav: true,
        navText: ['<i class="icofont icofont-rounded-left"></i>', '<i class="icofont icofont-rounded-right"></i>'],
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
    /*Scroll Top*/
    $('.goTop').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
    /*Scroll Top*/

    $(".inner-search").hide();
    $("li.search-menu").click(function () {
        $(".inner-search").slideToggle(300);
    });
    setTimeout(function () {
        if ($(".alert").length > 0) {
            $(".alert").remove();
        }
    }, 5000)
})(jQuery);

/* $("#alert").load(function () {
    $("#alert").delay(3000).slideUp(300);
}); */
