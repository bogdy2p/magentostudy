var $JQ = jQuery.noConflict();
$JQ(document).ready(function() {
    $JQ('.flexslider').flexslider({
        animation: "slide",
//        easing: "swing",
        animationLoop: true,
        direction:"horizontal",
//        pauseOnHover: true,
        useCSS: true,
        itemWidth: 300,
        slideshowSpeed: 2500,
        animationSpeed: 400,
        controlNav: false,
        directionNav: false
    });
    
});