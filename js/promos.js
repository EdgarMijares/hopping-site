$(document).ready(function() {

	// adjust view
	$('#side-menu').css('height',890);
	$('#content').css('height',890);
	$('#promos-panel').css('height',780);
	$('footer').css('top',890);

	// menu item selected
	$('#link-promos').css('background','rgba(150,150,150,.5)');

	// AJAX
	$('#promo-editor').on('submit',function(){
		var that = $(this),
	    	url = that.attr('action'),
			type = that.attr('method'),
			data = {};

		that.find('[name]').each(function(index, value){
			var that = $(this),
				name = that.attr('name'),
				value = that.val();
			data[name] = value;
		});
		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response){
				alert("Datos salvados con exito");
			}
		});
		return false;
	});
});//end document
