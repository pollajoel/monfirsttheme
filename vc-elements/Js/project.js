jQuery(document).ready(function($){
	
	$(document).ready(function() {
    $("#news-slider").owlCarousel({
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [980,2],
        pagination :false,
        autoPlay : false
    });
});
 
$(function() {
    $(' .da-thumbs > a ').each( function() { $(this).hoverdir(); } );
});



	
	
	});