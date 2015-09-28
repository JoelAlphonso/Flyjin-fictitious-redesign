(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
        
        $('a.carte').mouseover(
            function() {
                // Below 750pixels, we do not show the description on rollover
                if ($( window ).width() >= 750) {
                    $('img', this).css('opacity', 0);
                    $('p.description', this).css('display', 'block');
                }
            }
        );
        
        $('a.carte').mouseout(
            function() {
                if ($( window ).width() >= 750) {
                    $('img', this).css('opacity', 1);
                    $('p.description', this).css('display', 'none');
                }
            }
        );
        
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 16,
            nav: false,
            center: false,
            dots: true,
            autoplay:false,
            responsive:{
                0:{
                    items:3
                },
                768:{
                    items:4
                },
                1024:{
                    items:5
                }
            }
        });
		
	});
	
})(jQuery, this);


/*$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});*/