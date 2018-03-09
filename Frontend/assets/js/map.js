var myCenter = new google.maps.LatLng(23.8294748, 90.3845342);
function initialize() {
   var mapProp = {
       center: myCenter,
       scrollwheel: false,
       zoom: 2,
       zoomControl: false,
       mapTypeControl: false,
       streetViewControl: false,
       mapTypeId: google.maps.MapTypeId.ROADMAP,
       styles:[
	{
		"featureType": "administrative",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#444444"
			}
		]
	},
	{
		"featureType": "administrative.locality",
		"elementType": "labels.text.stroke",
		"stylers": [
			{
				"visibility": "on"
			},
			{
				"hue": "#ff0000"
			}
		]
	},
	{
		"featureType": "landscape",
		"elementType": "all",
		"stylers": [
			{
				"color": "#ccc"
			}
		]
	},
	{
		"featureType": "poi",
		"elementType": "all",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "road",
		"elementType": "all",
		"stylers": [
			{
				"saturation": -100
			},
			{
				"lightness": 45
			}
		]
	},
	{
		"featureType": "road.highway",
		"elementType": "all",
		"stylers": [
			{
				"visibility": "simplified"
			}
		]
	},
	{
		"featureType": "road.highway",
		"elementType": "geometry",
		"stylers": [
			{
				"visibility": "on"
			},
			{
				"color": "#ffffff"
			},
			{
				"weight": "1.68"
			}
		]
	},
	{
		"featureType": "road.arterial",
		"elementType": "labels.icon",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "transit",
		"elementType": "all",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "water",
		"elementType": "all",
		"stylers": [
			{
				"color": "#7f00ff"
			},
			{
				"visibility": "on"
			}
		]
	}
]
   };

   var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

   var marker = new google.maps.Marker({
       position: myCenter,
       animation: google.maps.Animation.BOUNCE,
   });
   marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);