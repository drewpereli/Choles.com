<html>
    <head>
        <?php include("bootstrap.php");?>
    </head>
<body>
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSps40zmtEv13TKH-0s2YudA_0a1gybd4&callback=initMap">
    </script>

</body>
</html>