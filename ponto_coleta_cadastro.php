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






                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Pontos de Coleta</li>
                                </ol>

                            </div>

                        </div>
                        <div class="container text-center">

                            <form action="controller/cadastra_ponto_coleta.php" method="POST">

                                <div class="row">
                                    <div class="col">
                                        <input class="form-control" type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id; ?>">
                                        <label for="example-text-input" class="col-sm-6 col-form-label">Nome do Ponto de Coleta</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="nome" id="nome" required placeholder="Digite o nome do Residuo" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label class="col-sm-6 col-form-label">Endereço</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="addressInput" name="addressInput" placeholder="Digite o Endereço">
                                                <input type="hidden" class="form-control" id="latitude" name="latitude">
                                                <input type="hidden" class="form-control" id="longitude" name="longitude">

                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="col-sm-6 col-form-label">Bairro</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" name="bairro" id="bairro">
                                                <option selected="">Selecione o Bairro</option>
                                                <?php
                                                $sql = "SELECT * FROM bairros";
                                                $result = $conn->query($sql);
                                                while ($row = $result->fetch_assoc()) {
                                                ?>
                                                    <option value="<?php echo $row["id_bairro"]; ?>"><?php echo $row["nome"]; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">

                                        <label class="col-sm-12 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" name="statusresiduo" id="statusresiduo">
                                                <option selected="Ativo">Ativo</option>
                                                <option value="Inativo">Inativo</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <hr>


                                <div class="row">
                                    <div class="col">
                                        <label class="col-sm-6 col-form-label">Horário previsto</label>
                                        <div class="col-sm-10">


                                            <div id="entry-form">
                                                <br>
                                                <div class="form-group">
                                                    <label>Dia:</label>
                                                    <select class="form-select" aria-label="Default select example" name="dia[]" id="dia[]">
                                                        <option value="segunda">Segunda</option>
                                                        <option value="terca">Terça</option>
                                                        <option value="quarta">Quarta</option>
                                                        <option value="quinta">Quinta</option>
                                                        <option value="sexta">Sexta</option>
                                                        <option value="sabado">Sabado</option>
                                                        <option value="domingo">Domingo</option>

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Hora de Início:</label>
                                                    <input type="time" name="hora_inicio[]" class="form-control" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Resíduo:</label>
                                                    <select class="form-select" aria-label="Default select example" name="hora_fim[]" id="hora_fim[]">
                                                        <?php
                                                        $sql2 = "SELECT * FROM residuos";
                                                        $result2 = $conn->query($sql2);
                                                        while ($row2 = $result2->fetch_assoc()) {
                                                        ?>
                                                            <option value="<?php echo $row2["id_residuo"]; ?>"><?php echo $row2["nome"]; ?></option>
                                                        <?php
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="button" class="btn btn-secondary" id="add-entry">Adicionar mais dias e horários</button>
                                            <br>

                                        </div>
                                    </div>
                                    <div class="col">

                                        <div class="col-sm-10">


                                            <br>
                                            <button class="btn btn-primary" id="searchBtn">Buscar</button>
                                            <label class="col-sm-12 col-form-label">Visualizar Ponto de Coleta no Mapa</label>
                                            <br><br>
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                            Visualizar no Mapa
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div id="map" class="mt-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">


                                    <button type="submitt" class="btn btn-primary waves-effect waves-light">Cadastrar Ponto de Coleta</button>

                                </div>
                            </form>
                        </div>



                    </div>
                </div>
                <!-- end page title -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- end main content-->
        <script>
            let map, marker;

            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: -34.397,
                        lng: 150.644
                    },
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

                geocoder.geocode({
                    address: input
                }, (results, status) => {
                    if (status === 'OK' && results[0]) {
                        map.setCenter(results[0].geometry.location);
                        marker.setPosition(results[0].geometry.location);
                        //alert(results[0].geometry.location);
                        let latitude = results[0].geometry.location.lat();
                        let longitude = results[0].geometry.location.lng();
                        var inputlatitude = document.getElementById('latitude');
                        inputlatitude.value = latitude;
                        var inputlongitude = document.getElementById('longitude');
                        inputlongitude.value = longitude;

                        alert("Latitude: " + latitude + "\nLongitude: " + longitude);
                        marker.setVisible(true);
                    } else {
                        window.alert('Nenhum local foi encontrado para o endereço fornecido.');
                    }
                });
            });
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsJ7BiAuRUTKuXYG0G8yv48SA5g6FQEys&libraries=places&callback=initMap" async defer></script>





        <script>
            document.getElementById('add-entry').addEventListener('click', function() {
                const entryForm = document.getElementById('entry-form');

                // Busca resíduos via AJAX
                fetch('fetch_residuos.php')
                    .then(response => response.json())
                    .then(data => {
                        let residuosOptions = data.map(residuo => `<option value="${residuo.nome}">${residuo.nome}</option>`).join('');

                        const newEntry = `
            <br>
            <div class="form-group">
                <label>Dia:</label>
                <select class="form-select" aria-label="Default select example" name="dia[]" id="dia[]">
                    <option value="Segunda">Segunda</option>
                    <option value="Terca">Terça</option>
                </select>
            </div>
            <div class="form-group">
                <label>Hora de Início:</label>
                <input type="time" name="hora_inicio[]" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Residuo :</label>
                <select class="form-select" aria-label="Default select example" name="hora_fim[]" id="hora_fim[]">
                    ${residuosOptions}
                </select>
            </div>
        `;
                        entryForm.insertAdjacentHTML('beforeend', newEntry);
                    })
                    .catch(error => console.error('Erro ao buscar resíduos:', error));
            });
        </script>
    <?php

    require_once "header.php";
    echo $nome = $_SESSION["nome"];
}
    ?>