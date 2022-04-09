const nextIcon = '<img src ="./assets/merchandise/icon/arrow-right-circle.svg" alt:"right">';
const prevIcon = '<img src ="./assets/merchandise/icon/arrow-left-circle.svg" alt:"right">';

$('.owl-carousel').owlCarousel({
    center:true,
    loop:true,
    margin:-90,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    navText: [
      prevIcon,
      nextIcon
    ],
    responsive:{
        0:{
            items:1,
            margin:50
        },
        600:{
            items:1
        },
        1300:{
            items:3
        }
    }
})



// scroll functions
$(window).scroll(function(e) {

    // add/remove class to navbar when scrolling to hide/show
    var scroll = $(window).scrollTop();
    if (scroll >= 150) {
        $('.navbar').addClass("navbar-scrolled");
    } else {
        $('.navbar').removeClass("navbar-scrolled");
    }

});