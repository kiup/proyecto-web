var api = 'AIzaSyAI9clEUB-BHFbI_ICkdmVdGF2WADwsy7E';

function initMap() {
  var latLng = {
    lat: 21.0333496,
    lng: -89.6317668
  };

  var map = new google.maps.Map(document.getElementById('mapa'), {
    center: latLng,
    zoom: 14,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    //draggable: false,
    //scrollwheel: false,
  });

  var content = '<h2>CONFERENCIA X</h2>'+'<p>Del 10 al 12 de Mayo</p>'+
                '<p>Visitanos</p>'

  var info = new google.maps.InfoWindow({
    content: content
  });

  var marker = new google.maps.Marker({
    position: latLng,
    map: map,
    title: 'CONFERENCIAS',
  });

   marker.addListener('click', function() {
     info.open(map, marker);
   })
}
