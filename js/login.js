$(document).ready(function(){

	var innerHeight = $(window).innerHeight();
	// adjust view
	$('#big-container').css('height',innerHeight);
	$('#main-container').css('top',(innerHeight/4));
	$('footer').css('top',0);

	$('#hopping-logo').click(function(){
		window.open('index.php','_self');
	});
});
