jQuery( document ).ready(function() {
    
    $(".mobile-search-form a.search-toggle").click(function(){
      $(".mobile-search-form .custom").toggleClass("visible");
        return false;
    });
    $(window).scroll(function() {    
        var scrollTop = $(window).scrollTop();

        if (scrollTop >= 80) {
            $(".sticky-header.fix-top").addClass("custom-sticky");
        } else {
            $(".sticky-header.fix-top").removeClass("custom-sticky");
        }
    });
   var leftIcon = '<i class="fas fa-arrow-left"></i>';
   var rightIcon = '<i class="fas fa-arrow-right"></i>';
    $('.hot-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: false,
		navText: [
			 leftIcon, rightIcon
		],
        responsive:{
            0:{
                items:1
            },
            300:{
                items:2
            },
            480:{
                items:3
            },
            1000:{
                items:6
            }
        }
    });

    
});