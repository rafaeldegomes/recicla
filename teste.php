<!DOCTYPE html>
<html>
<head>
  <title>Auto Completar e Google Maps</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    #map {
      height: 400px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h2>Busca de Endereço</h2>
    <div class="form-group">
      <label for="addressInput">Digite o endereço:</label>
      <input type="text" class="form-control" id="addressInput">
    </div>
    <button class="btn btn-primary" id="searchBtn">Buscar</button>
    <div id="map" class="mt-4"></div>
  </div>

  <script>
    let map, marker;

    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 8
      });

      marker = new google.maps.Marker({
        map: map,
        anchorPoint: new google.maps.Point(0, -29)
      });

      const input = document.getElementById('addressInput');
      const autocomplete = new google.maps.places.Autocomplete(input);
      autocomplete.bindTo('bounds', map);

      autocomplete.addListener('place_changed', () => {
        const place = autocomplete.getPlace();

        if (!place.geometry) {
          window.alert('Nenhum local foi encontrado para o endereço fornecido.');
          return;
        }

        if (place.geometry.viewport) {
          map.fitBounds(place.geometry.viewport);
        } else {
          map.setCenter(place.geometry.location);
          map.setZoom(17);
        }

        marker.setPosition(place.geometry.location);
        marker.setVisible(true);
      });
    }

    document.getElementById('searchBtn').addEventListener('click', () => {
      const input = document.getElementById('addressInput').value;
      const geocoder = new google.maps.Geocoder();
  
      geocoder.geocode({ address: input }, (results, status) => {
        if (status === 'OK' && results[0]) {
          map.setCenter(results[0].geometry.location);
          marker.setPosition(results[0].geometry.location);
          marker.setVisible(true);
        } else {
          window.alert('Nenhum local foi encontrado para o endereço fornecido.');
        }
      });
    });
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsJ7BiAuRUTKuXYG0G8yv48SA5g6FQEys&libraries=places&callback=initMap" async defer></script>
</body>
</html>

  </body>
</html>