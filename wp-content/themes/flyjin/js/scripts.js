// Vos scripts personnalisés

console.log('La liaison de script fonctionne bien');

jQuery(document).ready(function(jQuery) {
    jQuery('#fullpage').fullpage({
        //Navigation
        menu: false,
        lockAnchors: false,
        anchors:['hero', 'feat', 'slider', 'event','footer'],
        navigation: false,
        navigationPosition: 'right',
        navigationTooltips: ['firstSlide', 'secondSlide'],
        showActiveTooltip: false,
        slidesNavigation: true,
        slidesNavPosition: 'bottom',

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: true,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        normalScrollElements: '#element1, .element2',
        scrollOverflow: false,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        verticalCentered: true,
        resize : false,
        sectionsColor : ['#ccc', '#fff'],
        fixedElements: '#header, .footer',
        responsiveWidth: 0,
        responsiveHeight: 0,

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        //events
        onLeave: function(index, nextIndex, direction){
           
            // if(index == 1){
            //    jQuery('.header').addClass('fixed');
            // }
            // //back to the 1st section
            // if(nextIndex == 1){
            //     jQuery('.header').removeClass('fixed');
            // }

            
        },
        afterLoad: function(anchorLink, index){},
        afterRender: function(){},
        afterResize: function(){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
    });
    hasScrolled();
    jQuery(window).scroll(function(event) {
        /* Act on the event */
        hasScrolled();
    });

    jQuery('[data-type="background"]').each(function(){
	    var jQuerybgobj = jQuery(this); // assigning the object

	    jQuery(window).scroll(function() {
	        var yPos = parseInt((jQuerybgobj.parent().offset().top - jQuery(window).scrollTop()) / jQuerybgobj.data('speed')); 
	        // Put together our final background position
	        var coords = -yPos ;

	        // Move the background
	        jQuerybgobj.css("top",coords);
	    }); 
	});
    
});

function hasScrolled(){
    
    if(jQuery(".headerContainer").offset().top < jQuery(window).scrollTop()){
        jQuery(".header").addClass("fixed");
    }else if(jQuery(".headerContainer").offset().top > jQuery(window).scrollTop()){
        jQuery(".header").removeClass("fixed");
    }
}


