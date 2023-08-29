<?php
session_start();

$id = $_SESSION["usuario_id"];
if (empty($id)) {
    header("Location: index.php");
} else {
    require_once "footer.php";
    require_once "controller/conecta.php";
?>
    <style>
        #map {
            height: 400px;
        }
    </style>


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Pontos de Coleta</h4>

                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsJ7BiAuRUTKuXYG0G8yv48SA5g6FQEys&libraries=places&callback=initMap" async defer></script>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Pontos de Coleta <i class="ri-home-line"></i></li>
                                </ol>

                            </div>
                        </div>


                        <?php

                        require_once "controller/conecta.php";
                        $query = "SELECT *
                        FROM ponto_coleta AS pc
                        LEFT JOIN horarios_coleta AS hc ON pc.id_ponto_coleta = hc.id_ponto_coleta
                        where pc.status = 'Ativo';
                        ";
                        $result = $conn->query($query);

                        $locations = [];
                        while ($row = $result->fetch_assoc()) {
                            if (!isset($locations[$row['id_ponto_coleta']])) {
                                $locations[$row['id_ponto_coleta']] = [
                                    'id_usuario' => $id,
                                    'id' => $row['id_ponto_coleta'],
                                    'nome' => $row['nome'],
                                    'endereco' => $row['endereco'],
                                    'bairro' => $row['bairro'],
                                    'id_usuario' => $row['id_usuario'],
                                    'status' => $row['status'],
                                    'latitude' => $row['latitude'],
                                    'longitude' => $row['longitude'],
                                    'horarios' => []
                                ];
                            }

                            if (!is_null($row['dia'])) {
                                $locations[$row['id_ponto_coleta']]['horarios'][] = [
                                    'dia' => $row['dia'],
                                    'hora_inicio' => $row['hora_inicio'],
                                    'hora_fim' => $row['hora_fim']
                                ];
                            }
                        }
                        $locations = array_values($locations); // Reset the keys to avoid JSON issues

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
                                        zoom: 12,
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
                                            title: location.nome,
                                            icon: 'iconemaps.png'
                                        });

                                        (function(marker, location) {
                                            google.maps.event.addListener(marker, 'click', function() {

                                                var horariosString = '';
                                                for (var j = 0; j < location.horarios.length; j++) {
                                                    horariosString += location.horarios[j].dia + ': ' + location.horarios[j].hora_inicio + ' <br> Resíduo: ' + location.horarios[j].hora_fim + '<br><br>';
                                                }

                                                var infoContent = `
                    <div>
                        <b>Nome do Ponto:</b> ${location.nome} <br>
                        <b>Endereço: </b>${location.endereco} <br><br>
                        <b>Horários:</b> <br><br>
                        ${horariosString}<br><br>
                        <button onclick="abrirModalCadastro(${location.id} , ${location.id_usuario})" class="btn btn-primary">Cadastrar</button>
                    </div>
                `;
                                                infowindow.setContent(infoContent);
                                                infowindow.open(map, marker);
                                            });
                                        })(marker, location);
                                    }

                                    // Geolocalização: tenta obter a localização do usuário
                                    if (navigator.geolocation) {
                                        navigator.geolocation.getCurrentPosition(function(position) {
                                            var userLocation = {
                                                lat: position.coords.latitude,
                                                lng: position.coords.longitude
                                            };

                                            // Atualiza o centro do mapa para a localização do usuário
                                            map.setCenter(userLocation);

                                            // Opcional: Adicionar um marcador na localização do usuário
                                            new google.maps.Marker({
                                                position: userLocation,
                                                map: map,
                                                title: 'Sua localização'
                                            });

                                        }, function(error) {
                                            console.log("Erro ao obter localização: " + error.message);
                                        });
                                    } else {
                                        // O navegador do usuário não suporta geolocalização
                                        console.log("Geolocalização não é suportada neste navegador.");
                                    }
                                }


                                function abrirModalCadastro(id, id_usuario) {
                                    // Atualizar o valor do input com o ID recebido
                                    document.getElementById('inputId').value = id;
                                    document.getElementById('inputIdusuario').value = id_usuario;
                                    $('#firstmodal').modal('show'); // Abre o modal usando jQuery e Bootstrap
                                }
                            </script>
                            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsJ7BiAuRUTKuXYG0G8yv48SA5g6FQEys&callback=initMap">
                            </script>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="cadastrar_coleta.php" method="POST" enctype="multipart/form-data">
                        <!-- Input para receber o ID -->
                        <input type="text" id="inputId" name="inputId">
                        <input type="text" id="inputIdusuario" name="inputIdusuario">

                        <div class="form-group">
                            <label for="residuo">Tipo de Resíduo:</label>
                            <select class="form-control" id="residuo" name="residuo">
                                <option value="plastico">Plástico</option>
                                <option value="vidro">Vidro</option>
                                <option value="metal">Metal</option>
                                <option value="papel">Papel</option>
                                <option value="organico">Orgânico</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="horario">Horário:</label>
                            <input type="time" class="form-control" id="horario" name="horario">
                        </div>
                        <div class="form-group">
                            <label for="horario">peso:</label>
                            <input type="text" class="form-control" id="peso" name="peso">
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto:</label>
                            <input type="file" class="form-control-file" id="foto" name="foto" onchange="loadImage(event)">
                            <br>
                            <img id="outputImage" width="200">
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>


                </div>
                <div class="modal-footer">
                    <!-- Toggle to second dialog -->
                    <button class="btn btn-primary" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Open Second Modal</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function loadImage(event) {
            var outputImage = document.getElementById('outputImage');
            outputImage.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php

    require_once "header.php";
    echo $nome = $_SESSION["nome"];
}
?>