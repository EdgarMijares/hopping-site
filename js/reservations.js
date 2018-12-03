$(document).ready(function() {
	$(this).scrollTop(0);

	var screenHeight = screen.height;

	$('#side-menu').css('height',screenHeight);
	$('#content').css('height',screenHeight);
	$('footer').css('top',screenHeight);

	// side menu item selected
	$('#link-reservations').css('background','rgba(150,150,150,.5)');

	var config = {
	    	apiKey: "AIzaSyCamEikXKKr9dScMumyj99k0zf9j9FeX9I",
		    authDomain: "hopping-dc414.firebaseapp.com",
		    databaseURL: "https://hopping-dc414.firebaseio.com/",
		    projectId: "hopping-dc414",
		    storageBucket: "hopping-dc414.appspot.com",
		    messagingSenderId: "575574559197"
		  };
	firebase.initializeApp(config);
	var database = firebase.database();
	var date = new Date();

	var day = date.getDate();
	if (day < 10) {
		day = "0"+date.getDate();
	}

	var fechaHoy = day+"-"+(date.getMonth()+1)+"-"+date.getFullYear();
	console.log("fecha de hoy : "+fechaHoy);

	var headerContents = "<tr><th>HORA</th><th>FECHA</th><th>NOMBRE</th><th>PERSONAS</th><th>STATUS</th></tr>";

	database.ref().on('value', function(snapshot_1){
		$('#reservations-table').html(headerContents);
		var i = 0;
		var content = "";
		var path = "";
		snapshot_1.forEach(function(snapshot_2){
			snapshot_2.forEach(function(snapshot_3){
				faceID = snapshot_2.key;
				snapshot_3.forEach(function(snapshot_4){
					path =  faceID//FBID
					path += '/'+snapshot_3.key;
					path += '/'+snapshot_4.key
					promoPath = path
					path = ""
					var data = snapshot_4.val();
					if (data.lugar_id == idPlace && data.date == fechaHoy) {
						if (i % 2 == 0) {
							content += "<tr class='pair'>";
						} else {
							content += "<tr class='odd'>";
						}
						content += "<td>"+data.tiempo+"</td>";
						content += "<td>"+data.date+"</td>";
						content += "<td>"+data.nombre+"</td>";
						content += "<td>"+data.num_personas+"</td>";
						if (data.status == "pendiente") {
							content += "<td><form action='reservations.php' method='post'><button class='acept-reserv-btn' name='aceptar-reserva' value='"+promoPath+"'>Aceptar Reserva</button><input type='hidden' name='fcmToken' value='"+data.fcmToken+"'></form></td>";
						}
						if (data.status == "aceptada") {
							content += "<td>Aceptada</td>";
						}
						content += "</tr>";
						i++;
					}//end if
				});
			});
		});
		$('#reservations-table').append(content);
	});//end on('value')

	database.ref().once('value').then(function(snapshot_1) {
		$('#reservations-table').html(headerContents);
		var i = 0;
		var content = "";
		var path = "";
		snapshot_1.forEach(function(snapshot_2){
			snapshot_2.forEach(function(snapshot_3){
				faceID = snapshot_2.key;
				snapshot_3.forEach(function(snapshot_4){
					path =  faceID//FBID
					path += '/'+snapshot_3.key;
					path += '/'+snapshot_4.key
					promoPath = path
					path = ""
					var data = snapshot_4.val();
					if (data.lugar_id == idPlace && data.date == fechaHoy) {
						if (i % 2 == 0) {
							content += "<tr class='pair'>";
						} else {
							content += "<tr class='odd'>";
						}
						content += "<td>"+data.tiempo+"</td>";
						content += "<td>"+data.date+"</td>";
						content += "<td>"+data.nombre+"</td>";
						content += "<td>"+data.num_personas+"</td>";
						if (data.status == "pendiente") {
							content += "<td><form action='reservations.php' method='post'><button class='acept-reserv-btn' name='aceptar-reserva' value='"+promoPath+"'>Aceptar Reserva</button><input type='hidden' name='fcmToken' value='"+data.fcmToken+"'></form></td>";
						}
						if (data.status == "aceptada") {
							content += "<td>Aceptada</td>";
						}
						content += "</tr>";
						i++;
					}//end if
				});
			});
		});
		$('#reservations-table').append(content);
	});//end once('value')

	if (acceptReserveId !== undefined) {
		database.ref('/'+acceptReserveId).update({status:"aceptada"});
		$.ajax({
			type: 'post',
			data: {
				token: fcmToken,
				placeName: placeName
			},
			//url: 'http://localhost:3000/',
			url: 'https://www.hoppingapp.com:3000/',
			success: function(data){
				console.log('success \n'+data);
			},
			error: function(error){
				console.log('error \n'+error);
			}
		});
	}//end if

});//end ready function
