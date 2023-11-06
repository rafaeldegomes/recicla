<?php
session_start();

$id = $_SESSION["usuario_id"];
$id_residuo = $_GET['id_residuo'];
$nivel = $_SESSION["nivel"];
if (empty($id) || $nivel == "usuario") {
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Visualizar Ponto de Coleta</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Página Inicial</li>
                                </ol>

                            </div>
                        </div>
                        <?php

                        // Consulta SQL para contar os registros
                        $query_total_residuos = "SELECT * FROM ponto_coleta where id_ponto_coleta = '$id_residuo' ";

                        $result = $conn->query($query_total_residuos);

                        // Obtendo o número de registros
                        $row = $result->fetch_assoc();


                        ?>
                        <div class="row">
                            <div class="modal-body">
                                <form action="controller/cadastra_ponto_coleta.php" method="POST">

                                    <div class="row">
                                        <div class="col">
                                            <input class="form-control" type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id; ?>">
                                            <label for="example-text-input" class="col-sm-6 col-form-label">Nome do Ponto de Coleta</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>" placeholder="Digite o nome do Ponto de Coleta" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Endereço</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="addressInput" name="addressInput" placeholder="Digite o Endereço" value="<?php echo $row['endereco']; ?>">
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Bairro</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="bairro" id="bairro">
                                                    <option selected="<?php echo $row['bairro']; ?>"><?php echo $row['bairro']; ?></option>
                                                    <option value="1">Bettim</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="statusresiduo" id="statusresiduo">
                                                    <option selected="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
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

                                                <?php
                                                // Consulta SQL para buscar os dados
                                                $query = "SELECT * FROM horarios_coleta where id_ponto_coleta = $id_residuo";

                                                $result = $conn->query($query);
                                                while ($row = $result->fetch_assoc()) {


                                                ?>
                                                    <div id="entry-form">
                                                        <br>
                                                        <div class="form-group">
                                                            <label>Dia:</label>
                                                            <select class="form-select" aria-label="Default select example" name="dia[]" id="dia[]">
                                                                <option value="<?php echo $row['dia']; ?>"><?php echo $row['dia']; ?></option>
                                                                <option value="Terca">Terça</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Hora de Início:</label>
                                                            <input type="time" name="hora_inicio[]" class="form-control" value="<?php echo $row['hora_inicio']; ?>" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Resíduo:</label>
                                                            <select class="form-select" aria-label="Default select example" name="hora_fim[]" id="hora_fim[]">
                                                                <option selected="<?php echo $row['hora_fim']; ?>"><?php echo $row['hora_fim']; ?></option>
                                                                <option value="Terca">Lata</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
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
                                                    <br>
                                                    <div class="row">
                                                        <div class="col">

                                                        </div>
                                                        <div class="col">
                                                        </div>
                                                        <div class="col" style="text-align: left;">
                                                            <button type="submitt" class="btn btn-primary waves-effect waves-light"><i class="ri-save-line"></i> Salvar</button>
                                                            <a href="ponto_coleta_cadastro.php"><button class="btn btn-warning waves-effect waves-light"> <i class="ri-reply-fill"></i> Voltar</button></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <hr>

                                </form>
                            </div>

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
                        alert(results[0].geometry.location);
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
                                                                    <option selected="Segunda">Plastico</option>
                                                                    <option value="Terca">Lata</option>
                                                                </select>
                                                            </div>
        `;
                entryForm.insertAdjacentHTML('beforeend', newEntry);
            });
        </script>
    <?php

    require_once "header.php";
    echo $nome = $_SESSION["nome"];
}
    ?>