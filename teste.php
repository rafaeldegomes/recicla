<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocomplete in Modal with Map</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .pac-container {
            z-index: 1051;
        }
        #map {
            width: 100%;
            height: 300px;
        }
    </style>
</head>
<body>

<!-- Trigger/Open The Modal -->
<button id="openModalBtn" class="btn btn-primary mt-5 ml-5">Open Modal</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Enter Address</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <label for="address">Endereço:</label>
        <input type="text" id="address" class="form-control">
        
        <!-- Map Container -->
        <div id="map" class="mt-4"></div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsJ7BiAuRUTKuXYG0G8yv48SA5g6FQEys&libraries=places&callback=initAutocomplete" async defer></script>

<script>
    let autocomplete;
    let map;
    let marker;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -23.563, lng: -46.654},
            zoom: 13
        });
    }

    $('#myModal').on('shown.bs.modal', function () {
        var input = document.getElementById('address');

        if (!map) {
            initMap();
        } else {
            google.maps.event.trigger(map, 'resize');
        }

        if (!autocomplete) {
            autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.bindTo('bounds', map);
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    console.log("Autocomplete's returned place contains no geometry");
                    return;
                }

                // Mostra o lugar selecionado no mapa
                map.setCenter(place.geometry.location);
                if (marker) marker.setMap(null);
                marker = new google.maps.Marker({
                    position: place.geometry.location,
                    map: map
                });
            });
        }
    });

    document.getElementById("openModalBtn").addEventListener("click", function() {
        $("#myModal").modal('show');
    });
</script>
</body>
</html>
