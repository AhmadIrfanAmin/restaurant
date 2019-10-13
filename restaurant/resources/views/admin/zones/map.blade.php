<div id="map" style="height: 450px;"></div>
<script>
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: {lat: 31.5204, lng: 74.3587},
      mapTypeId: 'terrain'
    });
    // Define the LatLng coordinates for the polygon's path.
    var triangleCoords = JSON.parse('<?php echo  $get_file; ?>');
    // Construct the polygon.
    var bermudaTriangle = new google.maps.Polygon({
      paths: triangleCoords,
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#FF0000',
      fillOpacity: 0.35
    });
    bermudaTriangle.setMap(map);
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAztLRM2c-6I3w681cHGtNQgjLVzmIQdt0&callback=initMap">
</script>
