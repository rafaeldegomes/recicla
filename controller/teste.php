<?php

$host = "localhost";
$db   = "reciclatche";
$user = "root";
$pass = "";

$connection = new mysqli($host, $user, $pass, $db);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$query = "SELECT * FROM locations";
$result = $connection->query($query);

$locations = [];
while ($row = $result->fetch_assoc()) {
    $locations[] = $row;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Google Maps</title>
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
</head>

<body>

    <div id="map"></div>

    <script>
        function initMap() {
            var center = {
                lat: -28.667051,
                lng: -55.9947931
            };

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: center
            });

            var locations = <?php echo json_encode($locations); ?>;

            var infowindow = new google.maps.InfoWindow();

            for (var i = 0; i < locations.length; i++) {
                var location = locations[i];

                var marker = new google.maps.Marker({
                    position: {
                        lat: parseFloat(location.latitude),
                        lng: parseFloat(location.longitude)
                    },
                    map: map,
                    title: location.name
                });

                // Função para adicionar listener ao marcador.
                (function(marker, location) {
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.setContent(location.name);
                        infowindow.open(map, marker);
                    });
                })(marker, location);
            }
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsJ7BiAuRUTKuXYG0G8yv48SA5g6FQEys&callback=initMap">
    </script>
</body>

</html>