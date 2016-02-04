// external js: masonry.pkgd.js

$('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
});



//Hero Image Parallax
$(function() {

    // Cache the Window object
    var $window = $(window);

    // Parallax Backgrounds
    // Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641

    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this); // assigning the object

        $(window).scroll(function() {

            // Scroll the background at var speed
            // the yPos is a negative value because we're scrolling it UP!
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));

            // Put together our final background position
            var coords = '50% '+ yPos + 'px';

            // Move the background
            $bgobj.css({ backgroundPosition: coords });

        }); // end window scroll
    });

});


jQuery(document).ready(function($) {
    //put IDs for sidebar and toggle in vars
    var toggle = "#sidebar-slider";
    var slideout = "#primary-sidebar-widget";

    $( toggle ).click( function () {
        console.log('Clicked!');
        if ( $( slideout ).hasClass( 'hide' )) {
            $( slideout ).removeClass( 'hide').animate({
                width: 'toggle',
            }, 500 );
        } else {
            $( slideout ).animate({
                width: 'toggle',
            }, 500, function() {
                $( slideout ).addClass( 'hide');
            });

        }
    }); //end slideout function
}); //end noConflict