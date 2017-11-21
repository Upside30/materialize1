        function myMap() {
            var mapOptions = {
                center: new google.maps.LatLng(52.615283, -1.665418)
                , zoom: 16
                , mapTypeId: google.maps.MapTypeId.Hybrid
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var infoWindow;
            var locations = [
      ['Outdoor Gym', 52.615825, -1.667528, 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=1|00FFFF|000000'],
      ['Football Pitch', 52.616192,-1.666336, 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=2|00FFFF|000000'],
      ['Stepping Stones', 52.615357, -1.666123, 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=3|00FFFF|000000'],
      ['BMX Track', 52.614618, -1.662287, 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=4|00FFFF|000000'],
      
      

    ];
            // Resize stuff...
            google.maps.event.addDomListener(window, "resize", function () {
                var center = map.getCenter();
                google.maps.event.trigger(map, "resize");
                map.setCenter(center);
            });
            var lakeOutline = [
                {
                    lat: 52.617255
                    , lng: -1.669332
                }
                , {
                    lat: 52.615946
                    , lng: -1.667989
                }
                , {
                    lat: 52.612960
                    , lng: -1.662807
                }
                , {
                    lat: 52.614329
                    , lng: -1.661239
                }
                , {
                    lat: 52.614897
                    , lng: -1.662353
                }
                , {
                    lat: 52.617705
                    , lng: -1.668781
                }

  ];
            // Construct the polygon.
            var BelgraveLakes = new google.maps.Polygon({
                paths: lakeOutline
                , strokeColor: '#A9A9A9'
                , strokeOpacity: 0.8
                , strokeWeight: 3
                , fillColor: '#A9A9A9'
                , fillOpacity: 0.35
            });
            BelgraveLakes.setMap(map);
            // Add a listener for the click event.
            BelgraveLakes.addListener('click', showArrays);
            infoWindow = new google.maps.InfoWindow;
             var marker, i; 
    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
          icon: locations[i][3],
          title: locations[i][0]
      });
         google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                $('.collapsible').collapsible('open', [i] );
            }
        })(marker, i));

    }
        }
        /** @this {google.maps.Polygon} */
        function showArrays(event) {
            // Since this polygon has only one path, we can call getPath() to return the
            // MVCArray of LatLngs.
            var vertices = this.getPath();
            var contentString = '<b>Belgrave lakes polygon</b><br>' + 'Clicked location: <br>' + event.latLng.lat() + ',' + event.latLng.lng() + '<br>';
            // Iterate over the vertices.
            for (var i = 0; i < vertices.getLength(); i++) {
                var xy = vertices.getAt(i);
                contentString += '<br>' + 'Coordinate ' + i + ':<br>' + xy.lat() + ',' + xy.lng();
            }
            // Replace the info window's content and position.
            infoWindow.setContent(contentString);
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        }