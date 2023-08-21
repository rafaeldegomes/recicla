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
                                    <li class="breadcrumb-item active">Pontos de Coleta</li>
                                </ol>

                            </div>
                        </div>
                        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myExtraLargeModalLabel">Cadastrar novo Ponto de Coleta</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="controller/cadastra_ponto_coleta.php" method="POST">

                                            <div class="row">
                                                <div class="col">
                                                    <input class="form-control" type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id; ?>">
                                                    <label for="example-text-input" class="col-sm-6 col-form-label">Nome Ponto Coleta</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite o nome do Residuo" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label class="col-sm-6 col-form-label">Endereço</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Digite o nome do Residuo" id="example-text-input">

                                                    </div>


                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="col-sm-6 col-form-label">Bairro</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" aria-label="Default select example" name="bairro" id="bairro">
                                                            <option selected="">Selecione o Bairro</option>
                                                            <option value="1">Bettim</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label class="col-sm-6 col-form-label">Status</label>
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
                                                    <label class="col-sm-6 col-form-label">Horário de Coleta</label>
                                                    <div class="col-sm-10">


                                                        <div id="entry-form">
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
                                                        </div>
                                                        <br>
                                                        <button type="button" class="btn btn-secondary" id="add-entry">Adicionar mais dias e horários</button>
                                                        <br>

                                                    </div>
                                                </div>
                                                <div class="col">

                                                    <iframe src="teste.php" title="description"></iframe>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col">

                                                </div>
                                                <div class="col">
                                                </div>
                                                <div class="col" style="text-align: left;">
                                                    <button type="submitt" class="btn btn-primary waves-effect waves-light">Cadastrar novo Residuo</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <?php

                        // Consulta SQL para contar os registros
                        $query_total_residuos = "SELECT COUNT(*) as total FROM ponto_coleta where id_usuario = '$id' and status = 'Ativo'";

                        $result = $conn->query($query_total_residuos);

                        // Obtendo o número de registros
                        $row = $result->fetch_assoc();
                        $total = $row['total'];

                        // Consulta SQL para contar os registros
                        $query_total_residuos2 = "SELECT COUNT(*) as total FROM ponto_coleta where id_usuario = '$id' and status = 'Inativo'";

                        $result2 = $conn->query($query_total_residuos2);

                        // Obtendo o número de registros
                        $row2= $result2->fetch_assoc();
                        $total2 = $row2['total'];

                        ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap pb-3 gap-3">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-truncate mb-2">Ponto de Coletas cadastrados</p>
                                                <h4 class="mt-2 mb-0"><?php echo $total; ?><span class="badge bg-subtle-primary text-primary font-size-10 ms-1"><i class="mdi mdi-arrow-up"></i> Ativos</sup></h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap pb-3 gap-3">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-truncate mb-2">Residuos Inativos</p>
                                                <h4 class="mt-2 mb-0"><?php echo $total2; ?><span class="badge bg-subtle-primary text-primary font-size-10 ms-1"><i class="mdi mdi-arrow-up"></i> Inativos</sup></h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <a href="ponto_coleta_cadastro.php"><button type="button" class="btn btn-primary waves-effect waves-light" >Cadastrar novo Ponto de Coleta</button></a>

                            </div>
                            <br><br><br>
                            <!--  Modal content for the above example -->

                        </div>
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Resíduos Cadastrados</h4>
                                <!--<p class="card-title-desc">
                                    Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code>
                                    to make them scroll horizontally on small devices (under 768px).
                                </p>-->

                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Endereco</th>
                                                <th>Bairro</th>
                                                <th>Status</th>
                                                <th>Opcoes</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            // Consulta SQL para buscar os dados
                                            $query = "SELECT * FROM ponto_coleta where id_usuario = '$id'";

                                            $result = $conn->query($query);
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row['nome'] . "</td>";
                                                echo "<td>" . $row['endereco'] . "</td>";
                                                echo "<td>" . $row['bairro'] . "</td>";
                                                echo "<td>" . $row['status'] . "</td>"; ?>

                                                <td>
                                                    <div class="row">
                                                        <div class="col">
                                                            <a href='tela_view_pontocoleta.php?id_residuo=<?php echo $row["id_ponto_coleta"]; ?>' type="button" class="btn btn-warning waves-effect waves-light"><i class="ri-edit-line"></i></a>



                                                            <a href='controller/atualiza_status_pontocoleta.php?id=<?php echo $row["id_ponto_coleta"]; ?>' type="button" class="btn btn-danger waves-effect waves-light"><i class="ri-sensor-fill"></i></a>
                                                        </div>
                                                    </div>
                                                </td>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

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