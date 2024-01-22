

console.log("js/script connected");
//Header mega menu jquery 
$(document).ready(function () {
    $('.navbar-light .dmenu').hover(function () {
            $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
        }, function () {
            $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
        });
    }); 
     
        $(document).ready(function() {
        $(".megamenu").on("click", function(e) {
            e.stopPropagation();
        });
    });

// Init SERVICE BAR slick carousel    
    $(document).ready(function() {
        $('#service-carousel').slick({
            dots: false,
            infinite: true,   
            speed: 300,
            slidesToShow: 4, // Show 4 names initially
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 960, // Tablet breakpoint
                    settings: {
                      
                        slidesToShow: 1, // Show 2 names on tablet
                        slidesToScroll: 1,  
                        autoplay: true,
                        autoplaySpeed: 2000,
                    }
                },
                {
                    breakpoint: 480, // Mobile breakpoint
                    settings: {
                        slidesToShow: 1, // Show 1 name on mobile
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });

//Init landing page banner carousel    

$(document).ready(function() {
    $('#banner-carousel').slick({
        dots: false,
        infinite: true,   
        slidesToShow: 1, // Show 4 names initially
        slidesToScroll: 1, 
        autoplay: true,
        autoplaySpeed: 6000

    });
});