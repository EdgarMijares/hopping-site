$(document).ready(function() {
	$(this).scrollTop(0);

	var screenHeight = screen.height + 2500;

	$('#side-menu').css('height',screenHeight);
	$('#content').css('height',screenHeight);
	$('footer').css('top',screenHeight);

	// side menu item selected
	$('#link-galeria').css('background','rgba(150,150,150,.5)');
});
