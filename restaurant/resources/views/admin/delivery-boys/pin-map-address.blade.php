@extends('admin-layout.content')

@section('sidebar')

@parent

Available Delivery Boys

@endsection
@section('content')
<div id="map" style="width: 100%; height: 440px;"></div>
@endsection


@section('script-dashboard')

<script src="http://maps.google.com/maps/api/js?key=AIzaSyAztLRM2c-6I3w681cHGtNQgjLVzmIQdt0" 
          type="text/javascript"></script>

<script type="text/javascript">
    
    var locations = <?php print_r($locations); ?>;
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(31.5204, 74.3587),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
@stop