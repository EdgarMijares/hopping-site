$(document).ready(function(){

	// adjust view
	var innerHeight = $(window).innerHeight();
	$('#big-container').css('height',innerHeight-150);

	$('#responsive-menu-button').on('click', function(){
		$('#menu').slideToggle(250);
		var color = $('.menu-button-bar').css('background-color');
		if (color=='rgb(0, 0, 0)') {
			$('.menu-button-bar').css('background-color','#ED1D60');
		} else{
			$('.menu-button-bar').css('background-color','black');
		}
	});
});
