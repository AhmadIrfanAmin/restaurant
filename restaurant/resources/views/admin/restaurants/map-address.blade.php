<div id="map" style="height: 450px;"></div>
<script type='text/javascript'>

    var map,marker,latlng,bounds,infowin;
    /* initial locations for map */
    var _lat = <?php echo $restaurant_location->latitude; ?>;
    var _lng = <?php echo $restaurant_location->longitude; ?>;
    var restaurant_name = <?php echo "'$restaurant_location->name'"; ?>;

    function showMap(){
        /* set the default initial location */
        latlng={ lat: _lat, lng: _lng };

        bounds = new google.maps.LatLngBounds();
        infowin = new google.maps.InfoWindow();

        /* invoke the map */
        map = new google.maps.Map( document.getElementById('map'), {
           center:latlng,
           zoom: 12
       });

        /* show the initial marker */
        marker = new google.maps.Marker({
           position:latlng,
           map: map,
           title: restaurant_name
       });
        bounds.extend( marker.position );
    }

    /* simple function just to add a new marker */
    function addMarker(lat,lng,title) {
        marker = new google.maps.Marker({/* Cast the returned data as floats using parseFloat() */
           position:{ lat:parseFloat( lat ), lng:parseFloat( lng ) },
           map:map,
           title:title
       });

        google.maps.event.addListener( marker, 'click', function(event){
            infowin.setContent(this.title);
            infowin.open(map,this);
            infowin.setPosition(this.position);
        }.bind( marker ));

        bounds.extend( marker.position );
        map.fitBounds( bounds );
    }
    document.addEventListener( 'DOMContentLoaded', showMap, false );

</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAztLRM2c-6I3w681cHGtNQgjLVzmIQdt0&callback=showMap">
</script>