$(document).ready(function() {
	$(this).scrollTop(0);
	$('#side-menu').css('height',1240);
	$('#content').css('height',1240);
	$('footer').css('top',1240);

	// side menu item selected
	$('#link-overview').css('background','rgba(150,150,150,.5)');

	/*
	*	Disable inputs default
	*/
	$('#edit-input-0').on('click', function(){
		$("#input-0").removeAttr('disabled');
	});
	$('#edit-input-1').on('click', function(){
		$("#input-1").removeAttr('disabled');
	});
	$('#edit-input-2').on('click', function(){
		$("#input-2").removeAttr('disabled');
	});
	$('#edit-input-3').on('click', function(){
		$("#input-3").removeAttr('disabled');
	});

	$('#edit-profile-image-button').on('change', function(e){
		$('#profile-image-form').submit();
	});

	// AJAX
	$('#account-editor').on('submit',function(){
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
		data['latitude'] = latitude;
		data['longitude'] = longitude;
		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response){
				alert(response+"Datos salvados con exito");
				location.reload();
			}
		});
		return false;
	});
});
