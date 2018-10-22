$(document).ready(function() {
	$(this).scrollTop(0);

	var lun = false;
	var mar = false;
	var mie = false;
	var jue = false;
	var vie = false;
	var sab = false;
	var dom = false;

	var screenHeight = screen.height;

	$('#side-menu').css('height',screenHeight);
	$('#content').css('height',screenHeight);
	$('footer').css('top',screenHeight);

	// side menu item selected
	$('#link-myhop').css('background','rgba(150,150,150,.5)');

	var config = {
	    	apiKey: "AIzaSyCamEikXKKr9dScMumyj99k0zf9j9FeX9I",
		    authDomain: "hopping-dc414.firebaseapp.com",
		    databaseURL: "https://my-hop.firebaseio.com/",
		    projectId: "hopping-dc414",
		    storageBucket: "hopping-dc414.appspot.com",
		    messagingSenderId: "575574559197"
		  };
	var app = firebase.initializeApp(config);
	const database = firebase.database(app);

	var hopRef = database.ref('/'+idPlace+'_hop');
	hopRef.on('value', function(snapshot) {
			var obj = snapshot.val();
			if (obj.lun === true) {
				if ($('#lun-day').hasClass('day-checker')) {
					lun = true;
					$('#lun-day').removeClass('day-checker');
					$('#lun-day').addClass('day-checker-selected');
				}
			}
			if (obj.mar === true) {
				if ($('#mar-day').hasClass('day-checker')) {
					mar = true;
					$('#mar-day').removeClass('day-checker');
					$('#mar-day').addClass('day-checker-selected');
				}
			}
			if (obj.mie === true) {
				if ($('#mie-day').hasClass('day-checker')) {
					mie = true;
					$('#mie-day').removeClass('day-checker');
					$('#mie-day').addClass('day-checker-selected');
				}
			}
			if (obj.jue === true) {
				if ($('#jue-day').hasClass('day-checker')) {
					jue = true;
					$('#jue-day').removeClass('day-checker');
					$('#jue-day').addClass('day-checker-selected');
				}
			}
			if (obj.vie === true) {
				if ($('#vie-day').hasClass('day-checker')) {
					vie = true;
					$('#vie-day').removeClass('day-checker');
					$('#vie-day').addClass('day-checker-selected');
				}
			}
			if (obj.sab === true) {
				if ($('#sab-day').hasClass('day-checker')) {
					sab = true;
					$('#sab-day').removeClass('day-checker');
					$('#sab-day').addClass('day-checker-selected');
				}
			}
			if (obj.dom === true) {
				if ($('#dom-day').hasClass('day-checker')) {
					dom = true;
					$('#dom-day').removeClass('day-checker');
					$('#dom-day').addClass('day-checker-selected');
				}
			}
			document.getElementById("start-hour").selectedIndex = obj.startHour-7;
			document.getElementById("end-hour").selectedIndex = obj.endHour-7;
	});

	$('#psave-button').click(function(){
		var startHour = parseInt($("#start-hour option:selected").val());
		var endHour = parseInt($("#end-hour option:selected").val());
		var hopConf = {
			'lun': lun,
			'mar': mar,
			'mie': mie,
			'jue': jue,
			'vie': vie,
			'sab': sab,
			'dom': dom,
			'startHour': startHour,
			'endHour': endHour
		}
		if (endHour <= startHour ) {
			alert('Por favor revisa que las horas sean correctas, la hora de cierre no puede ser menor o igual a la hora de inicio');
			return;
		}
		database.ref('/'+idPlace+'_hop').set(hopConf);
		alert('Datos salvados con exito');
	});



	$('#lun-day').click(function(){
		if ($('#lun-day').hasClass('day-checker')) {
			lun = true;
			$('#lun-day').removeClass('day-checker');
			$('#lun-day').addClass('day-checker-selected');
		} else {
			lun = false;
			$('#lun-day').removeClass('day-checker-selected');
			$('#lun-day').addClass('day-checker');
		}
	});

	$('#mar-day').click(function(){
		if ($('#mar-day').hasClass('day-checker')) {
			mar = true;
			$('#mar-day').removeClass('day-checker');
			$('#mar-day').addClass('day-checker-selected');
		} else {
			mar = false;
			$('#mar-day').removeClass('day-checker-selected');
			$('#mar-day').addClass('day-checker');
		}
	});

	$('#mie-day').click(function(){
		if ($('#mie-day').hasClass('day-checker')) {
			mie = true;
			$('#mie-day').removeClass('day-checker');
			$('#mie-day').addClass('day-checker-selected');
		} else {
			mie = false;
			$('#mie-day').removeClass('day-checker-selected');
			$('#mie-day').addClass('day-checker');
		}
	});

	$('#jue-day').click(function(){
		if ($('#jue-day').hasClass('day-checker')) {
			jue = true;
			$('#jue-day').removeClass('day-checker');
			$('#jue-day').addClass('day-checker-selected');
		} else {
			jue = false;
			$('#jue-day').removeClass('day-checker-selected');
			$('#jue-day').addClass('day-checker');
		}
	});

	$('#vie-day').click(function(){
		if ($('#vie-day').hasClass('day-checker')) {
			vie = true;
			$('#vie-day').removeClass('day-checker');
			$('#vie-day').addClass('day-checker-selected');
		} else {
			vie = false;
			$('#vie-day').removeClass('day-checker-selected');
			$('#vie-day').addClass('day-checker');
		}
	});

	$('#sab-day').click(function(){
		if ($('#sab-day').hasClass('day-checker')) {
			sab = true;
			$('#sab-day').removeClass('day-checker');
			$('#sab-day').addClass('day-checker-selected');
		} else {
			sab = false;
			$('#sab-day').removeClass('day-checker-selected');
			$('#sab-day').addClass('day-checker');
		}
	});

	$('#dom-day').click(function(){
		if ($('#dom-day').hasClass('day-checker')) {
			dom = true;
			$('#dom-day').removeClass('day-checker');
			$('#dom-day').addClass('day-checker-selected');
		} else {
			dom = false;
			$('#dom-day').removeClass('day-checker-selected');
			$('#dom-day').addClass('day-checker');
		}
	});

});
