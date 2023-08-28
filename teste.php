<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Full-Screen Map</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsJ7BiAuRUTKuXYG0G8yv48SA5g6FQEys"></script>
  <style>
    #map {
      height: 100vh;
      width: 100vw;
    }

    @keyframes blink {
    0% { opacity: 1; }
    50% { opacity: 0.5; }
    100% { opacity: 1; }
}

.floating-button {
    position: fixed;
    top: 20px;
    right: 60px;
    z-index: 1000; 
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    
    animation: blink 1s infinite;
    
    background-color: red;  /* Cor de fundo do botão */
    color: white;           /* Cor do texto do botão */
}

  </style>
</head>

<body>
  <div id="map"></div>
  <button id="backButton" class="btn btn-primary floating-button">Voltar</button>

  <script>
    function initialize() {
      var mapOptions = {
        center: {
          lat: -34.397,
          lng: 150.644
        },
        zoom: 8
      };
      var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    document.getElementById("backButton").onclick = function() {
      window.location.href = "index.html";
    }
  </script>
</body>

</html>


<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsJ7BiAuRUTKuXYG0G8yv48SA5g6FQEys&libraries=places&callback=initMap" async defer></script>