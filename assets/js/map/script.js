function initMap() {
    var center = { lat: 40.409264, lng: 49.867092 };
    var locations = [
        ['(İçərişəhər filialı)<br>\
        📍İstiqlaliyyət. 69, Bakı, Azərbaycan  <br>\
     <a href="">Get Directions</a>', 40.3687626, 49.8313839],
        ['(Malakan filialı)<br>\
        📍Mərdanov qardaşları. 1/5, Bakı, Azərbaycan  <br>\
     <a href="">Get Directions</a>', 40.3723106, 49.8360584],
        ['(Nərimanov filialı)<br>\
        📍Ağa Nemətulla. 52, Bakı, Azərbaycan  <br>\
      <a href="">Get Directions</a>', 40.4046116, 49.8686995]
    ];
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11.5,
        center: center
    });
    var infowindow = new google.maps.InfoWindow({});
    var marker, count;
    for (count = 0; count < locations.length; count++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[count][1], locations[count][2]),
            map: map,
            title: locations[count][0]
        });
        google.maps.event.addListener(marker, 'click', (function(marker, count) {
            return function() {
                infowindow.setContent(locations[count][0]);
                infowindow.open(map, marker);
            }
        })(marker, count));
    }
}