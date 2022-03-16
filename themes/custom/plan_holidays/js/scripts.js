/*
 * jQuery One Page Nav Plugin
 * http://github.com/davist11/jQuery-One-Page-Nav
 *
 * Copyright (c) 2010 Trevor Davis (http://trevordavis.net)
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://jquery.org/license
 *
 * @version 3.0.0
 *
 * Example usage:
 * $('#nav').onePageNav({
 *   currentClass: 'current',
 *   changeHash: false,
 *   scrollSpeed: 750
 * });
 */
jQuery(document).ready(function() {
    jQuery('#nav-button').click(function() {
        jQuery(this).toggleClass('open');

        var wH = jQuery(window).height();
        var hH = jQuery('header').height();

        if (wH > hH) {
            jQuery('header nav').css('overflow', 'auto');
        }

    });

    jQuery('#nav > li > a').click(function() {
        jQuery('#nav-button').removeClass('open');
    });

    var wH = jQuery(window).height();
    var hH = jQuery('header').height();

    if (wH > hH) {
        jQuery('header nav').css('overflow', 'auto');
    }

});

 

jQuery('#nav').onePageNav({
    currentClass: 'active'
});

jQuery('.myflexslider').each(
    function(){
        jQuery(this).flexslider({
            animation: "slide",
            animationLoop: true,
            slideshow: false,
            itemWidth: 210,
            itemMargin: 5,
            minItems: getGridSize(), // use function to pull in initial value
            maxItems: getGridSize(), // use function to pull in initial value
            slideshowSpeed: 5000
        })
    }    
);

function getGridSize() {
    return (window.innerWidth < 600) ? 1 :
           (window.innerWidth < 900) ? 2 : 2;
  }

  // check grid size on resize event
  jQuery(window).resize(function() {
    var gridSize = getGridSize();
 
    flexslider.vars.minItems = gridSize;
    flexslider.vars.maxItems = gridSize;
  });