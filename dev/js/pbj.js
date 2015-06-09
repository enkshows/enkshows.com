$(document).ready(function(){


	var markers = [];
// The array where to store the markers

function initialize() {

        var mapOptions = {
            zoom: 10,
            center: new google.maps.LatLng(40.714364, -74.005972),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("googlemap"), mapOptions);


        var locations = [
            ['New York', 40.714364, -74.005972, 'http://www.google.com/intl/en_us/mapfiles/ms/micons/green-dot.png']
        ];


        var marker, i;
        var infowindow = new google.maps.InfoWindow();


        google.maps.event.addListener(map, 'click', function() {
            infowindow.close();
        });


        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon: locations[i][3]
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));

            // Push the marker to the 'markers' array
            markers.push(marker);
        }

    }
    google.maps.event.addDomListener(window, 'load', initialize);

    // The function to trigger the marker click, 'id' is the reference index to the 'markers' array.
    function myClick(id){
        google.maps.event.trigger(markers[id], 'click');
    }







});