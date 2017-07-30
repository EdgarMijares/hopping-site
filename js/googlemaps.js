var map;
var durango = {lat: 24.024609, lng: -104.670267};
var image = 'icons/Ubicacion_Hopping.png';
var marker;
var latitude;
var longitude;

var myStyles =[
    {
        featureType: "poi",
        elementType: "labels",
        stylers: [
              { visibility: "off" }
        ]
    }
];

function initMap() {
    var latLng = {lat: latitude, lng: longitude};
    map = new google.maps.Map(document.getElementById('googleMap'), {
    	center: latLng,
        zoom: 17,
        disableDefaultUI: true,
        styles: myStyles
    });

    marker = new google.maps.Marker({
        position: latLng,
        map: map,
        draggable: true,
        icon: image
    });

    google.maps.event.addListener(marker, 'dragend', function(){
        latitude = marker.getPosition().lat();
        longitude = marker.getPosition().lng();
        alert("cambio a : "+latitude+","+longitude);
    });

    google.maps.event.addListener(map, 'click', function(event) {
        var confirmation;
        if (!marker) {
            confirmation = confirm("¿Establecer ubicacion?");
            if (confirmation) {
                marker = new google.maps.Marker({
                    position: event.latLng,
                    map: map,
                    draggable: true,
                    icon: image
                });
                latitude = marker.getPosition().lat();
                longitude = marker.getPosition().lng();
            }
        } else {
            confirmation = confirm("¿Modificar ubicacion?");
            if (confirmation) {
                marker.setPosition(event.latLng);
                latitude = marker.getPosition().lat();
                longitude = marker.getPosition().lng();
            }
        }
    });

    
}//end function initMap