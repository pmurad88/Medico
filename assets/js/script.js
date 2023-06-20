jQuery(document).ready(function($){
    $(".h-menu").clone().prependTo(".mobile-menu");
    $(".menutrigger").on('click', function(){
    $(this).toggleClass("active");
    $(".mobile-menu").stop(true,false,true).slideToggle();
    $('body').toggleClass('overflow-hidden');
    });


    $(".slider").owlCarousel({
        items:1,
        nav:true,
        dots:true
    });
    $(".program").owlCarousel({
        items:1,
        nav:true,
    });

    $('.accordion-content').hide();
    $(".accordion-title").on("click", function(){
        $(this).parent().siblings().children(".accordion-content").slideUp();
        $(this).parent().siblings().children(".accordion-title").removeClass('active');
        $(this).toggleClass("active").parent().children(".accordion-content").slideToggle(true, false, true);
    });

    // jquery dynamic tabs
    $('.nav-link').on( 'click', function(){
        $(this).addClass('active').siblings().removeClass('active');

        var sel = $(this).data('tab');
        $(".tab-content").removeClass('active').filter(sel).addClass('active');
    } );

});