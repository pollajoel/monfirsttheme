jQuery(document).ready(function($){
	
	
	//fonction utile pour le tab Nav du theme option
	$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
});
	
//changement de la couleur du header au scroll de la page

$(window).scroll(function(){
	$('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
});












 
});