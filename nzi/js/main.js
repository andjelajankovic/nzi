$(document).ready(function() {
    
$(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if(scroll >= 100) {
            $('.sticky').addClass('stickyAdd');
        } else {
            $('.sticky').removeClass('stickyAdd');
        }
    });
$('.owl-carousel').owlCarousel({
   loop:true,
    margin:10,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
});