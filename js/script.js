$(document).ready(function() {
    $('#fullpage').fullpage({
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
            //    $('.header').addClass('fixed');
            // }
            // //back to the 1st section
            // if(nextIndex == 1){
            //     $('.header').removeClass('fixed');
            // }

            
        },
        afterLoad: function(anchorLink, index){},
        afterRender: function(){},
        afterResize: function(){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
    });
    hasScrolled();
    $(window).scroll(function(event) {
        /* Act on the event */
        hasScrolled();
    });

    $('[data-type="background"]').each(function(){
	    var $bgobj = $(this); // assigning the object

	    $(window).scroll(function() {
	        var yPos = parseInt(($bgobj.parent().offset().top - $(window).scrollTop()) / $bgobj.data('speed')); 
	        // Put together our final background position
	        var coords = -yPos ;

	        // Move the background
	        $bgobj.css("top",coords);
	    }); 
	});
    
});

function hasScrolled(){
    
    if($(".headerContainer").offset().top < $(window).scrollTop()){
        $(".header").addClass("fixed");
    }else if($(".headerContainer").offset().top > $(window).scrollTop()){
        $(".header").removeClass("fixed");
    }
}


